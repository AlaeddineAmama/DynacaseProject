<?php

/**
 * @author Anakeen
 */

// ---------------------------------------------------------------
// $Id: FGSEARCH_init.php.in,v 1.4 2007/12/11 14:23:29 eric Exp $
// $Source: /home/cvsroot/anakeen/freedom/freedom/App/Fgsearch/FGSEARCH_init.php.in,v $
// ---------------------------------------------------------------

global $app_const;


$app_const= 
array(
      "VERSION"	   =>"3.2.23-6",
      "FGSEARCH_SEARCHMODE" => array(
          "val"=>"words",
				      "descr"=>N_("search mode"),
				      "global"=>"N",
				      "kind"=>"enum(words|characters)",
				      "user"=>"N")
      );


