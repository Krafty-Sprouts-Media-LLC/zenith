# Zenith

**Version:** 0.1.0

A simple list-shaped theme for [Teme CMS](https://github.com/temecms/teme).

This release is the **foundation only**: package metadata, docs, design tokens, and floor Blade templates. The full Zenith look (from the HTML skins) lands in later versions — see [Roadmap](#roadmap).

## Requirements

- Teme `>=1.3.2 <2.0`
- PHP 8.4+

## What 0.1.0 draws

| Template | Draws |
|---|---|
| `index` | Floor: site name as `<h1>` (home and anything without a more specific template) |
| `single` | An item’s title as `<h1>` |

Menus: `primary` (Header). No theme settings, regions, or built assets yet.

## Install on a Teme site

Point the site at this folder (comma-separate if you have several themes):

```dotenv
TEME_THEME_PATHS=workshop/themes/zenith
```

From the Teme site root:

```bash
php artisan teme:theme:check zenith
```

Then activate under **Themes**.

## Repository layout

```
teme-theme.json     Manifest (version lives here)
composer.json       type: teme-theme → kraftysprouts/zenith
AGENTS.md           Rules for coding agents in this package
CLAUDE.md           Pointer to AGENTS.md
README.md           This file
CHANGELOG.md        Version history
LICENSE             MIT
SOURCE.md           Where the HTML prototypes live (reference only)
views/templates/    Blade templates
```

## Roadmap

Planned after 0.1.0 (one vertical slice at a time):

1. Layout shell + stylesheet (`@layer teme.theme`) from the Zenith tokens
2. `latest` (home) from `zenith-home.html`
3. `single` article layout from `zenith-article.html`
4. `archive` / `author` / `search` / `notfound`
5. Page templates (including Subscribe) and regions

Do not jump ahead: finish and check each slice before the next.

## Licence

MIT © Krafty Sprouts Media LLC
