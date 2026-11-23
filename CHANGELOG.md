# Changelog

All notable changes to this theme are documented in this file.

The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and versioning follows [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.3.1] - 23/11/2026

### Changed

- Composer package renamed to `krafty-sprouts/zenith` (same vendor as the other Krafty Sprouts packages).

## [0.3.0] - 22/11/2026

### Added

- `latest` template: simple list feed (lead, featured, then the rest) with thumb + title rows.
- Partials: `card`, `kicker`, `byline`, `pagination`.

## [0.2.1] - 22/11/2026

### Fixed

- Prose tables: borders, padding, header background, and horizontal scroll (border uses a stronger contrast mix so cells are visible on white).
- Prose lists: restore bullets/numbers (nav-only `list-style: none`).
- Built CSS filename includes the version so browsers drop a stale `theme.css`.

## [0.2.0] - 22/11/2026

### Added

- Layout shell: `layouts/base`, header, footer, search form (no JavaScript; narrow nav via `<details>`).
- Stylesheet in `@layer teme.theme` with committed Vite-style `public/build`.
- Footer navigation slot.

## [0.1.0] - 22/11/2026

### Added

- Package foundation: `teme-theme.json` (v0.1.0), Composer package `kraftysprouts/zenith`, licence, agent and human docs.
- Floor templates: `index` and `single` (enough for `teme:theme:check` and a readable site before the skin lands).
- Brand tokens (indigo accent, Outfit/Nunito stacks) in the manifest for later CSS work.
- Description kept plain: a simple list-shaped theme.
