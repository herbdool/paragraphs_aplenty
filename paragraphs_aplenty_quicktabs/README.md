# Paragraphs Aplenty Quicktabs

Integrates with Quicktabs to format paragraph items as a collection of quicktabs.

## Styles

By default, there is no styling added to the tabs. To style, either add CSS to
the active theme, or enable the Quicktabs Tabstyles sub-module.

### Add style options

To add further style options for the end user, invoke the hook
`hook_quicktabs_tabstyles` in a custom module. In that hook add where the css
files can be found. See `quicktabs_tabstyles_quicktabs_tabstyles()` for help.
The array returned should be in the format:
`$tabstyles[$file->uri] = backdrop_ucfirst($file->name);`
