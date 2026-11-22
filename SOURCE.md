# Source prototypes

The visual design for Zenith started as static HTML skins. They are **reference only** — not part of this package, not redistributed here.

## Location (local)

On the machine that holds the Egberipiribo WordPress theme:

`…/wp-content/themes/egberipiribo/skins/zenith/`

| File | Intended Teme template (later slices) |
|---|---|
| `zenith-home.html` | `latest` |
| `zenith-article.html` | `single` |
| `zenith-page.html` | `single-page` |
| `zenith-archive.html` | `archive` |
| `zenith-author.html` | `author` |
| `zenith-search.html` | `search` |
| `zenith-404.html` | `notfound` |
| `zenith-subscribe.html` | `single-page-subscribe` (page template) |

## Port rules

- Preserve Zenith’s brand (pastel badges, indigo/purple mark, Outfit + Nunito, horizontal list cards).
- Map mock content to Teme view models (`$page`, `$site`, `$navigation`, `$themeSettings`).
- Do not copy CDN Tailwind/Alpine into the theme; rebuild with Blade + theme CSS.
