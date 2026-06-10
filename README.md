# Fensterputzer Schwabach — WordPress Bundle

This bundle contains the entire landing page as plain HTML/CSS/JS plus two
ready-to-use WordPress page templates. No build step, no React, no Tailwind
required at runtime.

## Folder structure

```
fensterputzer-schwabach/
├── index.html                       Standalone preview (open in any browser)
├── css/style.css                    All styles
├── js/main.js                       Header scroll, mobile menu, form, floating CTA
├── partials/body.html               The page body markup (included by PHP templates)
└── wordpress/
    ├── page-fensterputzer.php         Template using your theme's header/footer
    └── page-fensterputzer-blank.php   Full-width template (no theme header/footer)
```

## Quick preview (no WordPress)

Just open `index.html` in a browser. Everything works offline except the
hero photos and the Vimeo video, which load from
`fensterputzer-schwabach.de` and `player.vimeo.com`.

## Installation in WordPress

1. **Copy the assets folder into your active (child) theme:**

   ```
   wp-content/themes/your-theme/assets/fensterputzer-schwabach/
       ├── css/style.css
       ├── js/main.js
       └── partials/body.html
   ```

2. **Copy ONE of the templates into the theme root:**

   - `wordpress/page-fensterputzer.php` — keeps your theme header/footer
   - `wordpress/page-fensterputzer-blank.php` — full-width, ignores theme chrome

   Final location (pick one):

   ```
   wp-content/themes/your-theme/page-fensterputzer.php
   ```

3. **Create the page** in WordPress Admin → *Pages → Add New*:
   - Title: e.g. `Fensterputzer Schwabach`
   - In the *Page Attributes* sidebar, set **Template** to
     *Fensterputzer Schwabach Landing* (or the *Blank* variant).
   - Leave the content empty — the template renders everything.
   - Publish.

4. **Set as homepage** (optional): Settings → Reading → *Your homepage displays*
   → *A static page* → choose the page you just created.

## Customising

| What                       | Where                                                  |
| -------------------------- | ------------------------------------------------------ |
| Text content / sections    | `partials/body.html`                                   |
| Colors, spacing, fonts     | `css/style.css` (CSS variables at the top of the file) |
| Phone number / email       | search `09122 / 88 71 472` and `schwabach@putzen-privat.de` in `partials/body.html` and `js/main.js` |
| Hero / about images        | Replace the external image URLs in `partials/body.html` (or upload local copies and update the `src`) |
| Vimeo video                | Update the iframe `src` in `partials/body.html`        |

## Images

The hero and about images currently reference the live site
(`fensterputzer-schwabach.de`). To self-host them:

1. Download:
   ```
   fensterputzer-1.jpg, fensterputzer-2.jpg, fensterputzer-3.jpg, fensterputzer-4.jpg
   ```
   from `https://fensterputzer-schwabach.de/wp-content/uploads/sites/8/2017/04/`.
2. Place them in `assets/fensterputzer-schwabach/images/`.
3. Replace the four `https://fensterputzer-schwabach.de/...` URLs in
   `partials/body.html` with relative paths, e.g.
   `<?php echo get_stylesheet_directory_uri(); ?>/assets/fensterputzer-schwabach/images/fensterputzer-1.jpg`.

## Contact form

The form opens the user's mail client with a pre-filled message to
`schwabach@putzen-privat.de` (works without any backend). To use a real
WordPress form, replace the `<form id="contact-form">` block in
`partials/body.html` with a shortcode from Contact Form 7, WPForms, etc.

## Browser support

Modern evergreen browsers. Uses CSS variables, `aspect-ratio`, and
`IntersectionObserver` — all supported in Chrome / Edge / Firefox / Safari
from 2020 onwards.
