# wp-plugin-find-replace-ads-source
Wordpress plugin that finds iframes of specified size on a web page and replace their source url to a specific url.

What this plugin does:

When a visitor lands on a non-admin page (AND the visitor is not an admin), a 'script' tag (linking to a find_replace.js file) is added to the page's head.
The find_replace.js script checks the page for 'iframe' elements that are sized 250x250, 320x400 or 800x90 (i.e. ads). If at least one iframe of those sizes is found, the script changes the iframe's src to a specific url.
If no iframe's with those sizes is found, a 'floating' iframe is shown at the bottom of the page.
By 'floating', I mean that it is always visible, even when the user scrolls up and down.

If the user's an admin, the 'script' tag is added to admin pages too and link to a different admin_script.js file which is blank and can used to process anything.

This feature is not theme-specific - it applies to any theme used.

Installation steps:

1. Download this plugin as zip
2. Goto Plugins->Add new in Wordpress Admin Sidebar
3. Browse this zipped plugin named wp-plugin-find-replace-ads-source.zip and upload it.
4. Once Plugin is uploaded, Activate it under All plugins tab.

Fork this for future updates.


