<?php

/*
 * 360 - School Empowerment System.
 * Developer: Ankur Mishra (amishra@ebizneeds.com.au) | www.ebizneeds.com.au 
 * Page details here: the configuration file for the APP 
 * Updates here: 
 */

/** Configuration Variables * */
if ($_SERVER['HTTP_HOST'] == 'localhost') { // or any other host

    /* Development enviornment */
    define('DEVELOPMENT_ENVIRONMENT', true);
    //define('DB_NAME', '360');
   // define('DB_USER', 'root');
    //define('DB_PASSWORD', '');
   // define('DB_HOST', 'localhost');
    define('REDIRECT_USER', 'index.php');

    define('DS', DIRECTORY_SEPARATOR);
    define('DIR_BASE', DS . basename(dirname(dirname(__FILE__))) . DS);
    define('DIR_ASSET', DIR_BASE . 'assets');
   // define('DIR_LIB', DIR_BASE . 'lib');
  // define('DIR_FILES', DIR_BASE . 'files');
  //  define('DIR_FUNCTIONS', dirname(dirname(__FILE__)) . DS . 'lib' . DS . 'functions.php');
  
    define('VIEW_HEADER', dirname(dirname(__FILE__)) . DS . 'includes' . DS . 'header.php');
   // define('VIEW_FOOTER', dirname(dirname(__FILE__)) . DS . 'includes' . DS . 'footer.php');
   // define('PROCESS_FORM', htmlspecialchars($_SERVER['REQUEST_URI']));
 //  define('ERR_HANDLER', $_SERVER["DOCUMENT_ROOT"] . DIR_BASE . 'vendor' . DS . 'Nette-minified' . DS . 'nette.phar');
} else {
    /* Production enviornment 
      define('DEVELOPMENT_ENVIRONMENT', true);
      define('DB_NAME', 'c360view_beta');
      define('DB_USER', 'c360view');
      define('DB_PASSWORD', '$ecure1t');
      define('DB_HOST', '109.199.119.94'); */


    define('DEVELOPMENT_ENVIRONMENT', true);
    define('DB_NAME', '360_backup');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('REDIRECT_USER', 'index.php');



    define('DS', DIRECTORY_SEPARATOR);
//define('DIR_BASE', '/~c360view/'. basename(dirname(dirname(__FILE__))).DS);
    define('DIR_BASE', DS . basename(dirname(dirname(__FILE__))) . DS);
    define('DIR_ASSET', DIR_BASE . 'assets');
    define('DIR_LIB', DIR_BASE . 'lib');
    define('DIR_FILES', DIR_BASE . 'files');
    define('DIR_FUNCTIONS', dirname(dirname(__FILE__)) . DS . 'lib' . DS . 'functions.php');
    define('VIEW_HEADER', dirname(dirname(__FILE__)) . DS . 'includes' . DS . 'header.php');
    define('VIEW_FOOTER', dirname(dirname(__FILE__)) . DS . 'includes' . DS . 'footer.php');
    define('PROCESS_FORM', htmlspecialchars($_SERVER['REQUEST_URI']));
    define('DIR_ERROR', dirname(dirname(__FILE__)) . DS . 'error' . DS . 'error.txt');
}


define('COOKIE_NAME', 'CAJ360LOGIN');
define('COOKIE_TIME', (3600 * 24 * 30));
define('ROW_PER_PAGE', 10);


/* * *****************************************************************************************
 * 
 */

if (DEVELOPMENT_ENVIRONMENT) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    # index.php
    //Debugger::enable();
    //  Debugger::$strictMode = TRUE;
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    ini_set('log_errors', 'On');
    //  ini_set('error_log', rootFolder . DS . 'logs' . DS . 'error.log');
}








/*********************************************************************************************
All the collection Names and their numeric id used in the App (tblMasterCollection and tblMasterCollectionType). 
Append/updated as needed. 
**********************************************************************************************

------------------
FeeCollectionMode
------------------
FeeRuleType: Discount: 6  | Addition: 7 
FeeRuleMode: Flat: 5 | Percentage: 4 
Fee mode: Cash :188 |  Cheque :187




------------------
Gender
------------------
Male: 
Female: 

------------------
Class Names
------------------
NUR: 

*/
