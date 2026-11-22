# Zenith — agent notes

Standalone Teme theme package (`kraftysprouts/zenith`, code `zenith`). Parent workshop rules: `../../AGENTS.md`.

## What this package is

Simple list-shaped theme for Teme. **0.3.0** has layout shell, CSS, and the `latest` list feed. Article / archive skins still to come. Follow the README roadmap, one slice per change, bump `version` + `CHANGELOG.md` each time.

After editing `assets/css/theme.css`, copy into a new `public/build/assets/theme-<version>.css` and point `public/build/manifest.json` at it (cache bust).

HTML prototypes (read-only reference, not shipped):

- See `SOURCE.md` for paths.

## Package facts

| | |
|---|---|
| Manifest | `teme-theme.json` |
| Code | `zenith` (folder name must match) |
| Version | keep in sync with `CHANGELOG.md` |
| Requires | Teme `>=1.3.2 <2.0` |
| Remote | https://github.com/Krafty-Sprouts-Media-LLC/zenith.git |

## Rules

1. **Only this folder.** Never edit another workshop package or Teme core (`balafama/` outside `workshop/`) unless the person asks.
2. **Contracts / theme reference only.** View data and `<x-teme::*>` from `docs/reference/theme.md`. Never `App\…`.
3. **No CDN Tailwind or Alpine** in templates. CSS goes in `assets/css/theme.css` under `@layer teme.theme` when that slice lands. Prefer `<details>` for mobile nav, not JavaScript.
4. **Version every change** that is not pure docs: bump `teme-theme.json` → `version`, add a `CHANGELOG.md` heading dated `dd/MM/yyyy`.
5. **Git:** this directory is its own repository. Commit here; never from the parent Teme site. `workshop/` is excluded from Teme’s git.
6. **`.env`:** ask the person to set `TEME_THEME_PATHS`; do not edit `balafama/.env`.
7. **File headers:** every PHP file gets the package header (`@package kraftysprouts/zenith`, `@since`, `@license MIT`). Blade files open with a short `{{-- … --}}` purpose comment.

## Check before calling a slice done

From the Teme site root (`balafama/`):

```bash
php artisan teme:theme:check zenith
```

Fix every error. Then activate under Themes only when the person asks.

## Handbook (read before coding)

1. `docs/guides/developers/start/first-theme.md`
2. `docs/guides/developers/concepts/manifest.md`
3. `docs/guides/developers/rules/plugins-and-themes.md`
4. `docs/reference/theme.md` and `docs/reference/theme-manifest.md`
5. `docs/guides/developers/themes/regions.md` (when adding regions)
