# WordPress + WooCommerce Setup Guide — West Coast Pawn & Gun

## What's In This Package

| File / Folder | What It Is |
|---|---|
| `westcoast-theme/` | Complete WordPress theme matching your current site |
| `wordpress-import.xml` | All pages + menus ready to import into WordPress |
| `woocommerce-products.csv` | 17 sample products across 6 categories |
| This guide | Step-by-step instructions |

---

## Step 1: Choose Hosting

WordPress needs PHP + MySQL hosting (your current Vercel setup can't run it). Here are three solid options:

### Recommended: SiteGround ($3–15/mo)
- One-click WordPress install
- WooCommerce-optimized plans
- Free SSL, daily backups, CDN
- Great support for beginners
- **Go with the "GrowBig" plan ($7/mo)** — it handles staging sites and on-demand backups

### Alternative: Cloudways ($14/mo)
- More control and better performance
- Choose DigitalOcean or Vultr as the server
- Best if you want to scale later
- Slightly more technical

### Budget: Bluehost ($3/mo)
- Officially recommended by WordPress.org
- Cheapest option, fine for getting started
- Performance is adequate for a single store

**What to do:**
1. Go to your chosen host and sign up
2. Register or transfer your domain (`westcoastpawngun.com`)
3. Install WordPress using their one-click installer

---

## Step 2: Install the Theme

1. In your WordPress admin, go to **Appearance → Themes → Add New → Upload Theme**
2. Zip the `westcoast-theme` folder first: right-click → "Send to" → "Compressed (zipped) folder"
3. Upload the zip file and click **Install Now**
4. Click **Activate**

---

## Step 3: Install Required Plugins

Go to **Plugins → Add New** and install + activate each of these:

| Plugin | Purpose |
|---|---|
| **WooCommerce** | E-commerce (products, cart, checkout) |
| **Yoast SEO** | SEO + schema markup (replaces your current JSON-LD) |
| **WPForms Lite** | Contact form on the Contact page |
| **MC4WP: Mailchimp for WordPress** | Email signup integration |
| **Wordfence Security** | Firewall + malware scanner |
| **UpdraftPlus** | Automated backups |

### Optional but recommended:
| Plugin | Purpose |
|---|---|
| **Smush** | Image compression |
| **WP Super Cache** or **LiteSpeed Cache** | Page caching for speed |
| **Redirection** | Set up 301 redirects from old URLs |

---

## Step 4: Import Your Content

### Pages:
1. Go to **Tools → Import → WordPress**
2. Install the WordPress Importer if prompted
3. Upload `wordpress-import.xml`
4. Assign all content to your admin user
5. Click **Submit**

This creates all your pages with the correct templates assigned:
- Home, Services, About, CCW Class, NFA Items, Pawn & Loan, Precious Metals, Weekly Deals, Contact, Store Policies, Privacy Policy, Terms & Conditions

### Products:
1. Go to **WooCommerce → Products → Import**
2. Upload `woocommerce-products.csv`
3. Map the columns (they should auto-map)
4. Click **Run the importer**

This creates 17 sample products in categories: Handguns, Rifles, Shotguns, Ammunition, Accessories, NFA Items. Replace these with your real inventory.

---

## Step 5: Set Up Menus

1. Go to **Appearance → Menus**
2. The import should have created "Primary Menu" and "Footer Menu"
3. Under **Menu Settings**, assign:
   - Primary Menu → **Primary Navigation** location
   - Footer Menu → **Footer Navigation** location
4. If menus weren't imported, create them manually:
   - **Primary:** Home, Shop, Services, CCW Class, Deals, About, Contact
   - **Footer:** NFA Items, Pawn & Loan, Precious Metals, Store Policies

---

## Step 6: Configure WordPress Settings

### Reading Settings:
1. Go to **Settings → Reading**
2. Set "Your homepage displays" to **A static page**
3. Homepage: **Home**
4. Posts page: (leave blank or create a "Blog" page)

### Permalinks:
1. Go to **Settings → Permalinks**
2. Select **Post name** (`/%postname%/`)
3. Click **Save Changes**

### Site Identity:
1. Go to **Appearance → Customize → Site Identity**
2. Set site title: **West Coast Pawn & Gun**
3. Tagline: **Lakeland's trusted source for firearms, ammo, pawn loans, and precious metals**

---

## Step 7: Configure WooCommerce

### Initial Setup Wizard:
WooCommerce will walk you through a setup wizard on first install. Key settings:

- **Store address:** 5619 US Hwy 98 N, Lakeland, FL 33809
- **Industry:** Other
- **Product types:** Physical products
- **Currency:** USD

### Payment Gateway:

⚠️ **Important: Most payment processors (Stripe, PayPal, Square) prohibit firearm sales.** You need a firearms-friendly processor:

| Gateway | Notes |
|---|---|
| **Payroc** | You may already use this. They support firearms. |
| **Authorize.Net** | Firearms-friendly. ~$25/mo + 2.9% + $0.30 per transaction |
| **PayTrace** | Firearms-friendly. Contact for FFL pricing |
| **Durango Merchant Services** | Specializes in firearms merchants |

To set up:
1. Go to **WooCommerce → Settings → Payments**
2. Install your chosen gateway's WooCommerce plugin
3. Enter your merchant credentials

### Shipping:
1. Go to **WooCommerce → Settings → Shipping**
2. Add a shipping zone for your service area
3. **For firearms:** You'll likely want "Local Pickup" only (buyer picks up from your FFL)
4. **For ammo/accessories:** You can ship these. Set flat rate or free shipping thresholds

### Tax:
1. Go to **WooCommerce → Settings → Tax**
2. Enable taxes
3. Florida sales tax: **7%** (Polk County)
4. Or install **WooCommerce Tax** plugin for automated tax calculation

---

## Step 8: FFL E-Commerce Considerations

Selling firearms online has specific legal requirements:

### How Online Firearm Sales Work:
1. Customer buys a firearm on your website
2. **You do NOT ship directly to the customer**
3. If the buyer is local → they pick up in-store and complete Form 4473 + NICS check
4. If the buyer is out of area → you ship to their local FFL dealer, who completes the transfer

### What You Need:
- **FFL Transfer workflow:** Add a note on product pages that all firearms require Form 4473 and background check at pickup
- **Age gate:** Already built into the theme (verifies 21+ before browsing)
- **Restricted states:** Some states have additional restrictions. Consider a plugin like "WooCommerce Conditional Shipping and Payments" to block sales to restricted states
- **Product disclaimers:** Add a notice on checkout that firearm purchases require valid government-issued photo ID at pickup

### Recommended Checkout Flow:
1. Customer adds firearm to cart
2. At checkout, show notice: "Firearm purchases require in-store pickup with valid ID and background check"
3. Set shipping method to "Local Pickup" for firearms category
4. After order is placed, contact customer to schedule pickup

---

## Step 9: Set Up Mailchimp Integration

1. Install and activate **MC4WP: Mailchimp for WordPress**
2. Go to **MC4WP → Mailchimp** and enter your API key
   - Get your API key: Mailchimp → Account → Extras → API keys
3. The Weekly Deals template already has the Mailchimp form embedded with your list ID

---

## Step 10: Set Up Contact Form

1. Go to **WPForms → Add New**
2. Choose "Simple Contact Form" template
3. Customize fields: Name, Email, Phone, Message
4. Set notification email to: `westcoastpawn@gmail.com`
5. Copy the shortcode (e.g., `[wpforms id="123"]`)
6. Edit the Contact page and paste the shortcode in the content area

---

## Step 11: DNS / Go Live

Once everything looks good:

1. In your hosting control panel, find your server's IP address or nameservers
2. Go to your domain registrar (wherever you bought `westcoastpawngun.com`)
3. Update the DNS:
   - **Option A (nameservers):** Point to your host's nameservers (they'll tell you what they are)
   - **Option B (A record):** Point the A record to your server's IP address
4. DNS propagation takes 15 minutes to 48 hours
5. Once live, go to your hosting panel and activate the **free SSL certificate**
6. In WordPress: **Settings → General** — update both URLs to `https://westcoastpawngun.com`

### Redirects from Old URLs:
Install the **Redirection** plugin and set up these redirects:
- `/subscribe` → `/weekly-deals/`
- `/gun-tags` → `/shop/`

---

## Step 12: Post-Launch Checklist

- [ ] All pages load correctly and look right
- [ ] Navigation menus work on desktop and mobile
- [ ] Age gate appears on first visit
- [ ] WooCommerce shop page shows products
- [ ] Add to cart and checkout flow works
- [ ] Payment gateway processes a test transaction
- [ ] Contact form sends emails to `westcoastpawn@gmail.com`
- [ ] Mailchimp signup works on Weekly Deals page
- [ ] Google Maps loads on Contact page
- [ ] SSL certificate is active (padlock icon in browser)
- [ ] Yoast SEO is configured with your business info
- [ ] Google Search Console is set up and sitemap submitted
- [ ] Old Vercel site is taken down to avoid duplicate content

---

## Ongoing Maintenance

- **Update WordPress, plugins, and theme** regularly (at least monthly)
- **Back up** before every update (UpdraftPlus handles this)
- **Update weekly deals** by editing the Weekly Deals page in WordPress admin
- **Manage products** via WooCommerce → Products
- **Monitor security** via Wordfence dashboard
- **Check orders** via WooCommerce → Orders

---

## Need Help?

If you get stuck on any step, most WordPress hosting providers offer free migration assistance and 24/7 support. SiteGround and Bluehost both have WordPress-specific support teams.

For WooCommerce-specific questions: [WooCommerce Documentation](https://woocommerce.com/documentation/)
For theme customization: The theme files are well-structured PHP templates — any WordPress developer can modify them.
