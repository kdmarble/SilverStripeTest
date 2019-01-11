## SilverStripe exercise for TRAINOR

Could potentially add node_modules and public/assets to gitignore, if necessary/used.

* Page.ss in themes/ loads as the default page with necessary head, links, and scripts. 
* Various components can be stripped away to the themes/(my-theme)/includes directory and included in default Page.ss. 
* Main content can be stripped out to $Layout variable, which will load various .ss layouts depending on page visited. 

Had some initial trouble with dev environment, and /dev/build returning a 500 error. Added configured local .env file that fixed the problem. Experienced the same problem while fiddling with the homepage model. Realized it was an incorrect relationship, had a $has_one as a $many_many instead.
