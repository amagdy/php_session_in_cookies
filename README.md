php_session_in_cookies
======================

This class enables SSO (Single sign on) by saving the session data in a cookie on the client. It supports session accross multiple servers and multiple subdomains. Its idea that it uses the session save handler and mcrypt to encrypt the session data and save it in a cookie. This session handling is totally transparent to the developer he just includes the class at the beginning of hist pages and use the session array as usual.
