=== TuKod MultiSite Site Names ===
Contributors: TuKod
Donate link: http://tukod.com/donate-to-tukod/
Tags: sitename, multisite, blogname, multi, multinetworks, networks, domains, multidomains, dash, hyphen, dot, period, underscore, tilde, numbers, uppercase, capitals, letters, lowercase, site, blog, name, internal, tukod, network
Requires at least: 3.1
Tested up to: 3.3.1
Stable tag: 0.1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Expanded SiteName Choices in the sign-up process. Use dashes (-), dots(.), tildes (~), underscores (_),  capitals (A-Z) and change the minimum length!

== Description ==

`
***************************************************************
*      _____      _  __         _    ____                     *
*     |_   _|   _| |/ /___   __| |  / ___|___  _ __ ___       *
*       | || | | | ' // _ \ / _' | | |   / _ \| '_ ' _ \      *
*       | || |_| | . \ (_) | (_| |_| |__| (_) | | | | | |     *
*       |_| \__,_|_|\_\___/ \__,_(_)\____\___/|_| |_| |_|     *
*     ===================================================     *
*                                                             *
***************************************************************
`

The [***TuKod MultiSite Site Names***](http://tukod.com/to-code-projects/tukod-multisite-site-names/ "Customize your MultiSite SiteName with many new features!") plugin allows you to customize the **SiteName** portion during the registration (sign-up) process.  The plugin is tested to work with the **_TuKod Multi Networks_** plugin to allow you to use expanded SiteNames across different Networks and Domain Names.  Likewise the plugin is tested to work with the **_TuKod MultiSite User Names_** plugin, which allows you to modify the UserName during registration also, even across Networks with different Domain Names!

= WordPress Limitations =

_“Out of the box”_ WordPress has a number of restrictions on the SiteNames you can register.  These restrictions are usually due to older servers, and older code.  Most people today do not use this old software, and you can benefit from the following improvements in this plugin.

= Features =

*	**_Minimum Length:_** Set it from **1 to 10** Characters

*	**_Matching UserNames:_** SiteNames may be allowed to match existing UserNames.

*	**_Dash or Hyphen:_** Use an internal Dash or Hyphen (**-**) in your SiteNames!

*	**_Dot or Period:_** Use an internal Dot or Period (**.**) in your SiteNames!

*	**_Tilde:_** Use an internal Tilde (**~**) in your SiteNames!

*	**_Underscore:_** Use an internal Underscore (**_**) in your SiteNames!

*	**_Uppercase:_** Use uppercase letters (capital **A-Z**) the same as lowercase letters or numbers!

= Selectivity =

Any or all of these features may be individually, or selectively, turned on or off with just a click!  _"Off"_ reverts back to the normal WordPress behavior.

= Compatibility =

*	**_[TuKod Multi Networks](http://tukod.com/to-code-projects/tukod-multi-network/ "Add More Networks and Domain Names To your MultiSite WordPress!")_ Plugin**

	* These Two Plugins (_TuKod Multi Networks_ and _TuKod MultiSite Site Names_) work together to allow you to have multiple domain names (Multi Networks or sometimes called Multi Domains ) using sign-up forms with all the features of the _TuKod MultiSite Site Names_.  In this case _TuKod MultiSite Site Names_ automatically self adjusts to the MultiSite Multi Networks Domain Names plugin, and only presents options that are valid withing Sub-Domain Installations.

*	**_[TuKod MultiSite User Names](http://tukod.com/to-code-projects/tukod-multisite-user-names/ "Customize your MultiSite UserName with many new features!")_ Plugin**

	* These Two Plugins (_TuKod MultiSite User Names_ and _TuKod MultiSite Site Names_) work together to allow people to register UserNames that match their expanded SiteNames as well as a number of other features.

*	**_All Three of the Above Plugins_** are designed to work together and offer a very light load on the server.

*	**_TuKod MultiSite Site Names_** has been tested and works with a great many other plugins without problems.

== Installation ==

The _TuKod MultiSite Site Names_ plugin is one of the easiest and most intutive WordPress plugins to install and configure.  Many people do not need any instructions at all, but for those that are not so sure, here is the easy way to make this work on your site!

1. Insure that WordPress MultiSite is working on your site (this may be with or without the TuKod Multi Network plugin that adds more domain names).

2. Install the plugin by either method.

	* You can download and install the _TuKod MultiSite Site Names_ plugin, using the built in WordPress plugin installer. **Or...**

	* Download the _TuKod MultiSite Site Names_ plugin into your computer, unzip, and upload the **tukod-multisite-site-names** folder to the `/wp-content/plugins/` directory.

3. From your Network Admin Panel **Network Activate** the _TuKod MultiSite Site Names_ plugin through the 'Plugins' menu in WordPress.

4. Go to your SiteName Options by either of the following methods:

	* From the Network Plugin Menu click on the Settings Link for the _TuKod MultiSite Site Names_ plugin. **Or...**

	* From the Network Sites Menu click on **_TuKod SiteNames_** link

5. If you need to make any changes in your WordPress Configuration, the _TuKod MultiSite Site Names_ plugin will tell you what to do here.

6. Configure your options, with a check-mark next to the SiteName Options you want to add.

7. Use the pull down menu to select the minimum number of characters in a SiteName (from 1-10).

8. At the bottom of the page click Save Changes!

9. If you are using the TuKod Multi Networks plugin (for Multi Domain names), you will need to Network Activate this plugin on **each network**.

== Frequently Asked Questions ==

Frequently Asked Questions...

    *                       _________   ____
    *                      / ____/   | / __ \  _____
    *                     / /_  / /| |/ / / / / ___/
    *                    / __/ / ___ / /_/ / (__  )
    *                   /_/   /_/  |_\___\_\/____/

= Can I set a minimum length of greater than 4 characters? =

**Yes!!** The plugin allows you to select a new minimum SiteName length between 1 and 10.

= Why delete "define( 'DOMAIN_CURRENT_SITE', 'example.com' );"? =

WordPress had you add... "define( 'DOMAIN\_CURRENT\_SITE', 'example.com' );" to your wp-config.php file when you set up your MultiSite (note that _example.com_ represents your first site's domain name). Some people are confused, and wonder why we are now asking you to remove it?

Actually we want you to **_replace_** this with...
define( 'TUKOD_MSSN', true );

This replacement does two things.  First it allows the plugin to work properly regardless of your current configuration.  Secondly, if you are using the _TuKod Multi Networks_ plugin with this (a growing number of people use them together). It allows the _TuKod Multi Networks_ to work dynamically to register new sites.

= What is an Internal character? =

An Internal character is just one that has a letter or number on both the left and the right side.  Some valid Internal dash examples are:

_Valid_

*	**george-jones**
*	**george-of-the-jungle**

_Invalid_

*	**-george :** The dash is invalid because it has no letter or number on the left side.
*	**george- :** The dash is invalid because it has no letter or number on the right side.
*	**george--jones :** The first dash is invalid because it has no letter or number on the immediate right, the second dash is invalid because it has no letter or number to it's immediate left.  A dash is not considered a letter or number.
*	**george-d.-jones :** The dot is invalid because it has no letter or number on the immediate right, the second dash is invalid because it has no letter or number to it's immediate left.  A dash or dot is not considered a letter or number.

= What letters and numbers can be used in any position? =

Valid letters and number include lowercase a-z and 0-9.  If you have enabled uppercase you may use A-Z as well.  For those using _TuKod MultiSite User Names_ you can also add any ISO/IEC 8859 letter in the UserName, like **ñ** in jalape**ñ**o or Ñoclo or like the letter **µ** (mu).

== Screenshots ==

1. **Network Activate:** After loading the _TuKod MultiSite Site Names,_ you need to _Network Activate_ it from the _Plugin Menu_ on the _Network Admin Pannel_.
2. **Settings:** On the same Plugin Menu, where you just clicked Network Activate, a click on _Settings_ will bring you to the _TuKod MultiSite Site Names_ options.
3. **TuKod SiteNames:** On the Sites Menu is another convenient way to set the options for the SiteNames.  Just click on _TuKod SiteNames_
4. **TUKOD\_MSSN: IF** you receive this message you need to make a small change in your wp-config.php file. (See the next Screenshot!)
5. **Define TUKOD\_MSSN:** You will need to replace the DOMAIN\_CURRENT\_SITE with the TUKOD\_MSSN in wp-config.php as directed.
6. **Sub-Directory Install:** Here is a view of the options page for a Sub-Directory website.  Minimum length may be adjusted up to ten!
7. **Sub-Domain Install:** Here we can see the options page for a Sub-Domain website. Minimum length may be adjusted down to one!

== Changelog ==

= 0.1.0.0 =
* 2012 May 6
* Initial Release

== Upgrade Notice ==

= 0.1.0.0 =
This version adds many features to your SiteName sign-up form.  Upgrade immediately!

== Out Of The Box ==

Below is a list of the **Standard WordPress Limitations**, which are **_Fixed_** by the **_TuKod MultiSite Site Names_** Plugin.

= Minimum Length =

*	This is set at a fixed length of 4 characters minimum.

= Existing UserName Match is Not Allowed =

*	A new SiteName is not allowed to match any existing UserName.
*	Assume you have three Networks (domains) like:
	*	example.com
	*	example.net
	*	example.org
*	Assume someone registers pizza.example.org with UserName pizza, then the following would be reserved, or blocked, from anyone else using it.
	*	pizza.example.com
	*	pizza.example.net
*	The more domains you have the worst this becomes.

= Hyphen or Dash (-) =

*	A hyphen or dash is not allowed anywhere in the SiteName.

= Period or Dot (.) =

*	A period or dot is not allowed anywhere in the SiteName.

= Tilde (~) =

*	A tilde is not allowed anywhere in the SiteName.

= Underscore (_) =

*	A underscore is not allowed anywhere in the SiteName.

= Uppercase (-) =

*	Uppercase letters are not allowed anywhere in the SiteName.

