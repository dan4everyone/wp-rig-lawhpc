# Changelog

All notable changes to this project will be documented in this file.

---

## [1.1.0] - 2025-05-27

### Removed
- **Widgets**
  - Deleted `sidebar.php`, `get_sidebar()` calls, and `Sidebars\Component`.
  - Removed widget-related styles and all `wp-rig-widgets` assets.
- **Comments**
  - Deleted `comments.php`, removed `comments_template()` calls.
  - Removed support for 'comment-form' and 'comment-list'.
  - Cleaned comment-related styles and references in templates.
- **Unused Files**
  - Removed `offline.php`, `error-500.php`, and unused PHPUnit files.
  - Cleaned up `.widget`, `.comment`, and other unused CSS classes.

### Cleaned
- Verified no remaining dependencies in active components.
- Updated all templates (`index.php`, `page.php`, etc.) to ensure no widget/comment logic remains.

---

## [1.0.0] - 2025-05-24

### Added
- Initial setup of WP Rig-based theme.
- Modular folder structure with template parts:
  - Pages: Home, About, Contact, Blog, Privacy Policy, Cookies Policy, Terms and Conditions.
  - Each page uses its own `page-{slug}.php` template.
- Modular CSS architecture:
  - Separate styles per component and per page under `assets/styles/`.
  - All compiled via `main.css` using WP Rig’s build system.
- Custom footer and header navigation:
  - Footer includes links to Privacy Policy, Cookies Policy, Terms.
  - Header menu supports dynamic items with optional static links.

### Fixed
- Permalink structure activated for WordPress to recognize page templates correctly.
- Verified file paths and modular includes using `get_template_part()`.
- Initial testing with `<h2>` markers and `die()` for debugging template loading.
