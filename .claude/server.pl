#!/usr/bin/perl
use strict;
use warnings;
use HTTP::Daemon;
use HTTP::Status;
use File::Basename;

my $port = $ARGV[0] || 3000;
my $root = $ARGV[1] || '.';

my $d = HTTP::Daemon->new(
    LocalAddr => '0.0.0.0',
    LocalPort => $port,
    ReuseAddr => 1,
) or die "Cannot start server: $!";

print "Serving '$root' at http://localhost:$port/\n";

my %mime = (
    html => 'text/html',
    css  => 'text/css',
    js   => 'application/javascript',
    json => 'application/json',
    png  => 'image/png',
    jpg  => 'image/jpeg',
    jpeg => 'image/jpeg',
    gif  => 'image/gif',
    svg  => 'image/svg+xml',
    ico  => 'image/x-icon',
    woff => 'font/woff',
    woff2=> 'font/woff2',
    ttf  => 'font/ttf',
    txt  => 'text/plain',
);

while (my $c = $d->accept) {
    while (my $r = $c->get_request) {
        my $path = $r->uri->path;
        $path = '/index.html' if $path eq '/';
        $path =~ s|^/||;
        my $file = "$root/$path";

        if (-f $file) {
            my ($ext) = $file =~ /\.([^.]+)$/;
            my $type = $mime{lc($ext // '')} // 'application/octet-stream';
            open(my $fh, '<:raw', $file) or do {
                $c->send_error(RC_INTERNAL_SERVER_ERROR);
                next;
            };
            local $/;
            my $body = <$fh>;
            close $fh;
            my $res = HTTP::Response->new(200);
            $res->header('Content-Type' => $type);
            $res->content($body);
            $c->send_response($res);
        } else {
            $c->send_error(RC_NOT_FOUND, "File not found: $path");
        }
    }
    $c->close;
}
