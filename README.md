# Zenith

**Version:** 0.2.1

A simple list-shaped theme for [Teme CMS](https://github.com/temecms/teme).

**0.2.0** adds the layout shell and stylesheet. The list feed / article skin from the HTML prototypes lands next — see [Roadmap](#roadmap).

## Requirements

- Teme `>=1.3.2 <2.0`
- PHP 8.4+

## What it draws now

| Template | Draws |
|---|---|
| `index` | Floor inside the site shell (tagline on the home page) |
| `single` | Title, standfirst, body inside the site shell |

Menus: `primary` (Header), `footer` (Footer). Stylesheet: `assets/css/theme.css` → `public/build`.

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
assets/css/         Source stylesheet
public/build/       Committed build (ThemeVite)
views/layouts/      Page shell
views/partials/     Header, footer, search
views/templates/    Page templates
```

After CSS edits, copy `assets/css/theme.css` into `public/build/assets/theme.css` (or run a Vite build when that is wired).

```bash
php artisan teme:themes:link
```

## Roadmap

One vertical slice at a time:

1. ~~Layout shell + stylesheet~~ (0.2.0)
2. `latest` (home) — list feed from `zenith-home.html`
3. `single` article layout from `zenith-article.html`
4. `archive` / `author` / `search` / `notfound`
5. Page templates (including Subscribe) and regions

Do not jump ahead: finish and check each slice before the next.

## Licence

MIT © Krafty Sprouts Media LLC
