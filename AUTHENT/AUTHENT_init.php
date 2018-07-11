<?php
/*
 * @author Anakeen
 * @package FDL
*/
/**
 * Application parameters
 *
 * @author Anakeen 2002
 * @version $Id: AUTHENT_init.php.in,v 1.6 2008/08/18 15:05:36 jerome Exp $
 * @package FDL
 * @subpackage CORE
 */
/**
 */
/**
 * Application parameters
 * @name $app_const
 * @global array $GLOBALS['app_const']
 */
global $app_const;

$app_const = array(
    "INIT" => "yes",
    "VERSION" => "3.2.23-6",
    
    "AUTHENT_SHOW_REQPASSWD" => array(
        "val" => "yes",
        "descr" => N_("show request for password") ,
        "kind" => "enum(yes|no)",
        "global" => "N"
    ) ,
    

    "AUTHENT_SHOW_LANG_SELECTION" => array(
        "val" => "yes",
        "descr" => N_("show language selection") ,
        "kind" => "enum(yes|no)",
        "global" => "N"
    ) ,
    "AUTHENT_FAILURECOUNT" => array(
        "val" => 0,
        "descr" => N_("Authentication failures before account deactivation") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_ACCOUNTEXPIREDELAY" => array(
        "val" => 0,
        "descr" => N_("Default delay for account expiration (days)") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_LOGFACILITY" => array(
        "val" => "LOG_AUTH",
        "descr" => N_("Session authentication log facility") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    
    "AUTHENT_MAILASKPWD" => array(
        "val" => "AUTH_TPLMAILASKPWD",
        "descr" => N_("Mail template document reference to ask new password") ,
        "kind" => "text",
        "global" => "N"
    ) ,
    
    "AUTHENT_PWDMINLENGTH" => array(
        "val" => "0",
        "descr" => N_("Minimum character length needed for user password") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_PWDMINDIGITLENGTH" => array(
        "val" => "0",
        "descr" => N_("Minimum digit number needed for user password") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_PWDMINUPPERALPHALENGTH" => array(
        "val" => "0",
        "descr" => N_("Minimum uppercase alpha needed for user password") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_PWDMINLOWERALPHALENGTH" => array(
        "val" => "0",
        "descr" => N_("Minimum lowercase alpha needed for user password") ,
        "kind" => "text",
        "global" => "Y"
    ) ,
    "AUTHENT_PWDMINSYMBOLLENGTH" => array(
        "val" => "0",
        "descr" => N_("Minimum symbol (no alpha, no digit) needed for user password") ,
        "kind" => "text",
        "global" => "Y"
    )
);
?>
