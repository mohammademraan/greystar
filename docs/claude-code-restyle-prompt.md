# Prompt for Claude Code (VS Code extension)

Paste everything below the line into Claude Code, and attach the homepage screenshot to the same message.

---

## Task

Restyle this website so its look, layout and page style match the attached homepage screenshot and the design spec below. This is a **visual redesign only**. Keep my brand name, logo, text, images, links, forms, data and all features exactly as they are. Do not copy any other company's logo, name, wordmark or copy.

Follow the spec strictly. Where the screenshot and the spec disagree, the spec wins for exact values (colors, sizes, radii), and the screenshot wins for layout and overall feel.

## Step 0: Before you change anything

1. Inspect the project and tell me the stack (plain HTML/CSS, WordPress theme, Laravel Blade, React/Next, Tailwind, Bootstrap, etc.) and where the global styles, layout, header, footer and homepage template live.
2. List every page or template you plan to touch.
3. Create a git branch called `redesign-new-style` (or back up the files if there is no git) before editing.
4. Show me the plan, then go ahead.

## Step 1: Design tokens (set once, use everywhere)

Put these in one central place: CSS custom properties on `:root`, or the Tailwind theme config, or SCSS variables, depending on the stack. Replace hard-coded colors and font sizes across the site with these tokens. Do not leave old colors behind.

### Colors

```css
:root {
  --color-ink:        #0A2245; /* main text + all headings (deep navy) */
  --color-ink-2:      #3B4E6A; /* secondary text */
  --color-muted:      #6A778B; /* captions, small labels, meta text */
  --color-bg:         #FFFFFF; /* page background */
  --color-surface:    #F4F4F4; /* light grey surface */
  --color-cream:      #F5EBDC; /* warm feature section background */
  --color-primary:    #0077D4; /* links, buttons, focus ring */
  --color-primary-dk: #00477F; /* gradient end / hover */
  --color-blue-2:     #3860BE; /* outlines, accents */
  --color-blue-3:     #6AAAE4;
  --color-tint-1:     #CCE4F6; /* pale blue tints */
  --color-tint-2:     #E6F1FB;
  --color-accent:     #FFD972; /* yellow: search / key action button only */
  --color-footer:     #27455C; /* dark slate footer */
  --color-border:     #CED3DA; /* borders, dividers */
  --color-border-2:   #9DA7B5;
  --glass:            rgba(255,255,255,0.9); /* frosted panels, sticky header */

  --radius-card: 24px;
  --radius-group: 32px;
  --radius-btn: 12px;
  --radius-pill: 9999px;
  --radius-sm: 2px;

  --shadow-card:  0 0 4px rgba(24,25,26,.16), 0 0 .5px rgba(24,25,26,.12);
  --shadow-raise: 0 0 8px rgba(24,25,26,.16), 0 0 1px rgba(24,25,26,.12);
}
```

### Fonts

The reference uses paid fonts. Use these free Google Fonts instead:

- **Headings:** `Manrope` (weights 600 and 700), with `Inter` as the fallback. Clean, crisp sans-serif with slightly negative letter spacing.
- **Body, menu, buttons:** `Newsreader` (or `Source Serif 4`), weights 300, 400 and 500. A modern serif body is a key part of this look, so do not swap it for a sans-serif.
- Load them with `<link rel="preconnect">` and `font-display: swap`. Self-host instead if the project already self-hosts fonts.

### Type scale (desktop, size / line height)

| Element | Size / LH | Weight | Letter spacing | Font |
|---|---|---|---|---|
| H1 (hero) | 46 / 52px | 600 | -0.92px | Heading |
| H2 (section titles) | 32 / 36px | 600 | -0.32px | Heading |
| H3 large | 26 / 32px | 600 | normal | Heading |
| H3 feature card | 22 / 28px | 600 | -0.55px | Heading |
| H3 / card title | 18 / 24px | 600 | normal | Heading |
| H4–H6, footer column headings | 16 / 22px | 600 | normal | Heading |
| Body | 16 / 24px | 400 | normal | Body |
| Nav links | 18px | 400 | normal | Body |
| Small | 14 / 20px | 400 | normal | Body |
| Caption / meta | 12 / 14px | 400 | normal | Body, `--color-muted` |
| Section kicker (small line above H2) | 12–14px | 400 | normal | Body |

On mobile (under 768px), scale the H1 to about 32/38px and the H2 to about 26/32px.

All headings use `--color-ink`. Never pure black. No uppercase headings.

## Step 2: Components

**Buttons (primary)**
- Background `linear-gradient(to right, #0077D4 0%, #0077D4 50%, #00477F 100%)`, white text.
- Body font, 16px, weight 500, padding 8px 24px, height 48px, radius 12px.
- On hover, shift toward `--color-primary-dk`. Give it a visible 2px `--color-primary` focus ring.

**Accent button:** yellow `--color-accent` with navy icon or text. Use it only for the main search or most important action.

**Text links:** `--color-primary`, weight 500, no underline. Underline on hover.

**Cards:** white, radius 24px, `--shadow-card`, no visible border, overflow hidden. Image on top with the top corners rounded. Below it, title (18px/600), then meta text in `--color-muted`. Optional round heart or icon button floating top-right on the image (white circle, pill radius).

**Inputs / search bar:** pill shape (radius 9999px), white, 1px `--color-border`, light body font at 15px. The search button sits inside the right end as a yellow circle with a magnifier icon.

**Icons:** thin line icons in navy (for example Lucide or Heroicons outline).

## Step 3: Page layout (match the screenshot)

- **Container:** max-width about 1200px, centered, 24px side padding (16px on mobile).
- **Section spacing:** generous whitespace, about 80–96px vertical padding on desktop and 48–56px on mobile. Lots of white background. Only a few sections get color (cream or pale-blue tint).

### Header
- 72px tall, `position: sticky; top: 0`.
- Transparent over the hero. Turns into a frosted white bar (`--glass` + `backdrop-filter: blur(8px)`) once scrolled.
- My logo on the left. On the right: desktop nav links (18px, body font, navy), then a small icon (favorites, account or cart, whatever my site already has) and a round 44px pill-shaped hamburger button.
- On tablet and mobile, the nav collapses into a slide-in white panel about 325px wide. Menu items are stacked at 18px with plenty of spacing, and sub-menus expand as accordions.

### Hero
- Full-width background photo (use my existing hero image).
- Overlapping it near the bottom: a large frosted-white panel (`--glass`) with 24px top corners. Inside: centered H1, a one-line subtitle in body font (about 18px), then the pill search bar or main CTA.

### Featured items slider
- H2 on the left. Optional small info line with a check icon in `--color-muted`.
- Horizontal slider of 4 cards (my products, projects, properties or services) with prev/next round arrows and dots.
- A "See more" text link plus a primary button below.

### Intro / "why us" block
- H2 with 2–3 lines of body copy and a "Learn more" primary button.

### Feature grid
- H3 (26px) section title, then a 2-column grid (1 column on mobile) of image cards. Each card has a rounded image, a 22px H3 and a short paragraph.

### Locations / categories section
- Full-width `--color-cream` background with rounded 24px top corners.
- A row of cards, each with an image, an 18px title and a one-line description.

### Articles / guides section
- Small kicker line above the H2.
- A 2-up card slider of blog posts or guides.

### Trust / closing CTA
- A simple centered block: H2, short text and one primary button.

### SEO link block (above the footer)
- Optional multi-column lists of internal links (by city, category or service), 14px, navy, with 16px/600 column headings.

### Footer
- Background `--color-footer`, white text.
- 4–5 link columns with 16px headings and 14px links at 80% white opacity (100% on hover).
- Bottom row: my logo large in white, social icons and copyright. Below that, fine-print legal text at 12px.

## Step 4: Rules

- Apply the style to **every page**, not just the homepage: header, footer, typography, buttons, forms and cards should be consistent site-wide. Restyle inner pages using the same components.
- Keep all existing content, URLs, SEO tags (titles, meta, schema), alt text, forms, scripts and analytics. Do not delete features.
- Fully responsive at 360px, 768px, 1024px and 1440px. No horizontal scroll.
- Accessibility: WCAG AA contrast, visible focus states, a working keyboard menu, `aria-expanded` on the hamburger and on sub-menus.
- Performance: lazy-load images, no heavy new libraries. Use a lightweight slider (for example Swiper) only if the site doesn't already have one.
- Use the screenshot as the visual reference for spacing, proportions and overall feel.

## Step 5: Verify, then report

1. Run the site locally. Check the homepage and at least 2 inner pages at mobile and desktop widths, and fix anything that breaks.
2. Search the codebase for leftover old colors or fonts and replace them with tokens.
3. Give me a short summary: the files changed, what was restyled, and anything you could not match and why.
