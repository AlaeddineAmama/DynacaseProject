<?php
/*
 * @author Anakeen
 * @package FDL
*/
/**
 * @author Anakeen
 */
// ---------------------------------------------------------------
// $Id: DAV_init.php.in,v 1.6 2006/11/23 09:36:06 eric Exp $
// $Source: /home/cvsroot/anakeen/freedom/dav/DAV_init.php.in,v $
// ---------------------------------------------------------------
global $app_const;

$app_const = array(
    "INIT" => "yes",
    "VERSION" => "3.2.23-6",
    "FREEDAV_SERVEUR" => array(
        "val" => "",
        "descr" => N_("address of the webdav server for freedav") ,
        "global" => "Y"
    ) ,
    "WEBDAV_SERVEUR" => array(
        "val" => "",
        "descr" => N_("address of the webdav server for authenticate server") ,
        "global" => "Y"
    ) ,
    "WEBDAV_ROOTID" => array(
        "val" => "9",
        "descr" => N_("folder identifier for root") ,
        "global" => "Y"
    ) ,
    "WEBDAV_FOLDERMAXITEM" => array(
        "val" => "200",
        "descr" => N_("max items return when open a folder") ,
        "global" => "Y"
    )
);
