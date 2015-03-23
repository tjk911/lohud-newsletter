Lohud Newsletter
==============

Lohud's newsletter script to pull content from a curated Presto front.

Current live version viewable here: http://data.lohud.com/newsletter/rocklandangle/


Project code
==============

Project uses Zurb's Ink template for responsiveness. Uses Presto's PresentationV3 api to find the asset IDs of pinned stories on the front, then runs those asset IDs through Presto's SearchV4 api to pull actual information and echo it out onto a static page.

Changelog
==============

v0.1.2 - Added a check to limit API calls to once a minute at most, added character count and limit to admin, changed input to textarea

v0.1.1 - Now uses PresentationV3 as the base to order the assets, and then matches with SearchV4 to populate the pages with the appropriate information. Admin page has been added, accessible through login.php


To-do
==============

* ~~Hardcode databases into a 2x2 table~~
* Export pages once a day as html
* If/else solution for content without images 
* ~~Add social buttons~~
* Privacy/TOS/Ad choices

Contributors
==============

* Jun-Kai Teoh (@jkteoh)
* Anjanette Delgado (@anjdelgado)
* Jesse Hazel for troubleshooting help (@jessewhazel)

