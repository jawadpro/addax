# Addax 2.0 — block theme

A modern agency/business **block theme** (Full Site Editing) for WordPress 6.6+, built for the WordPress.org theme directory. Every pattern uses core blocks only; the original 2017 look is kept as the *Classic* style variation.

Pair it with **[Addax Core](https://github.com/jawadpro/addax-core)**, which provides the custom blocks, the Projects post type, Addax Settings and per-page options.

## What's inside

| | |
|---|---|
| `theme.json` | Colours, fonts (Roboto Slab + Raleway, bundled locally), spacing, buttons. Replaces the Redux options. |
| `templates/` | Front page, blog, single, page, archive, search, 404, single/archive project, plus *Landing (transparent header)*, *Full width* and *Page with sidebar*. |
| `parts/` | Header (standard), Header (transparent overlay), Header (business with top bar), Footer (four columns), Footer (simple), Sidebar, Page title bar. |
| `patterns/` | Core-only patterns: hero with floating avatars, hero cover, clients, services, how it works, stats, about, work showcase, team, process steps, testimonials, FAQ, CTA, latest posts, contact, and full *Agency home*, *About* and *Contact* pages. Plugin-block patterns live in Addax Core. |
| `styles/` | Style variations: Midnight, Coral, Classic. |
| `inc/block-styles.php` | Block styles that replace the old Heading/Button/Accordion shortcodes (outline/light/arrow buttons, underline headings, subheading/eyebrow/watermark text, accordion details, card/tile groups, link/check lists, card post grids). |
| `assets/js/addax.js` | Sticky/transparent header behaviour, back-to-top and reveal-on-scroll (vanilla JS, respects reduced motion). |

## Install

1. Copy this folder to `wp-content/themes/addax` and activate **Addax**.
2. Install and activate **Addax Core**.
3. Create a page with the *Landing (transparent header)* template, insert the *Agency home page* pattern and set it as the homepage.
4. Optional: *Addax → Settings → Tools → Import demo projects*.

Edit everything in **Appearance → Editor**.

## Old → new

| Addax 1.x | Addax 2.0 |
|---|---|
| Redux theme options | `theme.json` / Global Styles + *Addax → Settings* (in Addax Core) |
| Header styles 1–3 | Template parts, switchable per page |
| Meta Box page options | Native post meta + editor sidebar panel (in Addax Core) |
| WPBakery shortcodes | Native blocks (in Addax Core) and block styles |
| Bootstrap 3, jQuery, Owl, WOW, MixItUp | None — CSS grid/flex and small vanilla scripts |
| Google Fonts CDN, Font Awesome CDN | Fonts bundled locally (Plus Jakarta Sans, Inter), original GPL artwork |
