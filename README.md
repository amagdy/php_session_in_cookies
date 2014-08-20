PHP Session in Cookies
===========================

Overview
---------
This class enables SSO (Single sign on) by saving the session data in a cookie on the client. It supports session accross multiple servers and multiple subdomains. Its idea that it uses the session save handler and mcrypt to encrypt the session data and save it in a cookie. This session handling is totally transparent to the developer he just includes the class at the beginning of hist pages and use the session array as usual.

System Requirements
----------------------
- php 4.3 or later
- mcrypt extension 


Testing
-----------
To test the cookie_session class, Put the 3 files (cookie_session.php, test1.php, test2.php) and run the file (test1.php) on your server. Then click on the link to view the session data.

- You can change the constants at the beginning of the cookie_session.php:

	COOKIE_DOMAIN
	
	SESSION_ENCRYPTION_KEY

Source
----------
PHPClasses.org (http://www.phpclasses.org/package/3545-PHP-Session-handler-that-stores-data-in-cookies.html)

November 25th, 2006


