301-instead
===========

yourls plugin to send a 301 (permanent) redirect instead of 302 (temporary) to solve the facebook preview issue.

This plugin applies across an entire yourls installation - cannot currently be customised per-link. Note that it will only work reliably on *new* links, since old links will have already been cached in browsers due to the use of 301 headers.

Requirements

yourls 1.5 or 1.5.1

Installation

    Create a user/plugins/301-instead directory in yourls
    Place the plugin.php file in above directory
    Activate plugin in yourls
