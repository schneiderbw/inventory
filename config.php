<?php
/* The system administrator should use this form to configure the Saturn Discipline
   Management System.  This file contains all variables used for customization of the
   system. */
   
// Database configuration   
   $mysql_hostname = "localhost"; //Database server hostname or IP address
   $mysql_user = "inventory"; //Database user name
   $mysql_password = "pZsGhWvSLKrjm4t9"; //Database user password
   $mysql_database = "inventory";  //Database name
   $prefix = ""; //Only use this line if you are using a shared database
   
// District Configuration
   $district_name = "St. Bernard-Elmwood Place City Schools"; //District's Full Name
   $district_abbr = "SBEP"; //District's Abbriviated Name
   $district_admin = "Ben Schneider"; // System administrator name
   $district_adminnum = "ext. 250"; // System administrator contact number  
   $district_adminemail = "bschneider@sbepschools.org"; //System administrator e-mail address
   $district_emaildomain = "sbepschools.org"; //District e-mail domain name (ex: @schooldistrict.k12.oh.us)
   
// Saturn configuration
   $saturn_email = "saturn@schn-comp.com" //Email address that the server should use when sending e-mail.
?>