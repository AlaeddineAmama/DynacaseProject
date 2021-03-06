<?php

/**
 * @author Anakeen
 */

// ---------------------------------------------------------------
// $Id: GENERIC_init.php.in,v 1.11 2007/07/30 16:05:27 eric Exp $
// $Source: /home/cvsroot/anakeen/freedom/freedom/App/Generic/GENERIC_init.php.in,v $
// ---------------------------------------------------------------

global $app_const;


$app_const= 
array("INIT" => "yes",
      "VERSION"			=>"3.2.23-6",
      "DEFAULT_FAMILY" => array("val"=>"1",
				"descr"=>N_("default document family")),
      "CARD_SLICE_LIST" => array("val"=>"8",
				 "descr"=>N_("number of card by page"),
				 "user"=>"Y"),
      "ACARD_WIDTH" => array("val"=>"98%",
			     "descr"=>N_("width of the abstract card"),
			     "global"=>"Y",
			     "user"=>"Y"),
      "GENEA_WIDTH" => array("val"=>"420px",
			     "descr"=>N_("width of the frame for abstract card"),
			     "global"=>"Y",
			     "user"=>"Y"),
      "GENEA_HEIGHT" => array("val"=>"200px",
			      "descr"=>N_("height of the frame for abstract card"),
			      "global"=>"Y",
			      "user"=>"Y"),
      "GENE_VIEWMODE" => array("val"=>"",
			       "descr"=>N_("differents view mode by family"),
			       "global"=>"Y",
			       "kind"=>"static",
			       "user"=>"Y"),
      "GENE_SPLITMODE" => array("val"=>"",
				"descr"=>N_("split view mode by family"),
				"global"=>"Y",
				"kind"=>"static",
				"user"=>"Y"),
      "GENE_TABLETTER" => array("val"=>"N",
				"descr"=>N_("view tab letter by family"),
				"global"=>"Y",
				"kind"=>"static",
				"user"=>"Y"),
      "GENE_INHERIT" => array("val"=>"",
				"descr"=>N_("search in inherited family by family"),
				"global"=>"Y",
				"kind"=>"static",
				"user"=>"Y"),
      "GENERIC_USORT" => array("val"=>"",
				"descr"=>N_("default sort by family"),
				"global"=>"Y",
				"kind"=>"static",
				"user"=>"Y"),
      "GENE_PREFSEARCH" => array("val"=>"",
				 "descr"=>N_("prefered search"),
				 "global"=>"Y",
				 "kind"=>"static",
				 "user"=>"Y"),
      "GENE_LATESTTXTSEARCH" => array("val"=>"",
				      "descr"=>N_("last search text typed"),
				      "global"=>"Y",
				      "kind"=>"static",
				      "user"=>"Y"),
      "GENE_SEARCHMODE" => array("val"=>"words",
				      "descr"=>N_("search mode"),
				      "global"=>"N",
				      "kind"=>"enum(words|characters)",
				      "user"=>"N")
      );

?>
