<?php


namespace {



class ADoc1084 extends ADoc {
    // for familly : Animal

   function __construct () {
      ADoc::__construct();

     
     
     $this->attr["an_carnetsante"]=new MenuAttribute("an_carnetsante", "1084","Carnet Santé",24,"%S%app=GENERIC&action=GENERIC_ISEARCH&id=%I%&famid=ZOO_CARNETSANTE&viewone=Y","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_enclos"]=new MenuAttribute("an_enclos", "1084","Enclos",25,"%S%app=GENERIC&action=GENERIC_ISEARCH&id=%I%&famid=ZOO_ENCLOS&viewone=Y","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_parent"]=new MenuAttribute("an_parent", "1084","Parents",26,"%S%app=GENERIC&action=GENERIC_ISEARCH&generic=Y&id=%I%&famid=ZOO_ANIMAL","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_folder"]=new MenuAttribute("an_folder", "1084","Dossier",29,"%S%app=ZOO&action=ZOO_ANIMALFOLDER&id=%I%","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     
     $this->attr["an_identification"]=new FieldSetAttribute("an_identification", "1084","Identification","W","N","frame",$this->attr["FIELD_HIDDENS"],"relativeOrder=::auto","ZOO_ANIMAL");
     
     
     $this->attr["an_nom"]=new NormalAttribute("an_nom", "1084","nom","text","",false,12,"",
                                                "W",true,true,false,
						$this->attr["an_identification"],"","","","","N","","edittemplate=ZOO:ANIMALNAME:U|viewtemplate=ZOO:ANIMALNAME|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_tatouage"]=new NormalAttribute("an_tatouage", "1084","tatouage","int","",false,13,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","::isInteger(an_tatouage)","N","","edittemplate=ZOO:ANIMALTATOO:S|viewtemplate=ZOO:ANIMALTATOO:S|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_espece"]=new NormalAttribute("an_espece", "1084","espèce","docid","ZOO_ESPECE",false,14,"",
                                                "W",true,false,false,
						$this->attr["an_identification"],"","","","","N","","creation={es_nom:CT}|doctitle=an_espece_title|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_espece_title"]=new NormalAttribute("an_espece_title", "1084","espèce (titre)","text","",false,15,"",
                                                "H",false,false,false,
						$this->attr["an_identification"],"","::getLastTitle(an_espece,' )","","","A","","autotitle=yes|relativeOrder=an_espece","ZOO_ANIMAL");

     
     $this->attr["an_ordre"]=new NormalAttribute("an_ordre", "1084","ordre","text","",false,16,"",
                                                "R",false,false,false,
						$this->attr["an_identification"],"","::getdocvalue(an_espece,es_ordre)","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_classe"]=new NormalAttribute("an_classe", "1084","classe","docid","ZOO_CLASSE",false,17,"",
                                                "R",false,false,false,
						$this->attr["an_identification"],"","::getdocvalue( an_espece , es_classe)","","","N","","doctitle=auto|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_sexe"]=new NormalAttribute("an_sexe", "1084","sexe","enum","",false,18,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","M|Masculin,F|Féminin,H|Hermaphrodite","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_photo"]=new NormalAttribute("an_photo", "1084","photo","image","",false,19,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_naissance"]=new NormalAttribute("an_naissance", "1084","date naissance","date","",false,20,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","::validatePastDate(AN_NAISSANCE)","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_entree"]=new NormalAttribute("an_entree", "1084","date entree","date","",false,21,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","::validatePastDate(AN_ENTREE)","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_enfant_t"]=new NormalAttribute("an_enfant_t", "1084","liste enfant","array","",false,22,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_enfant"]=new NormalAttribute("an_enfant", "1084","enfant","docid","ZOO_ANIMAL",true,23,"",
                                                "W",false,false,false,
						$this->attr["an_enfant_t"],"","","","","N","","creation={an_nom:CT,an_espece:an_espece}|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_pere"]=new NormalAttribute("an_pere", "1084","pere","docid","ZOO_ANIMAL",false,27,"",
                                                "R",false,false,true,
						$this->attr["an_identification"],"","::getAscendant(M)","","","N","","doctitle=auto|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_mere"]=new NormalAttribute("an_mere", "1084","mere","docid","ZOO_ANIMAL",false,28,"",
                                                "R",false,false,true,
						$this->attr["an_identification"],"","::getAscendant(F)","","","N","","doctitle=auto|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_classe_title"]=new NormalAttribute("an_classe_title", "1084","classe (titre)","text","",false,18,"",
                                                "H",false,false,false,
						$this->attr["an_identification"],"","::getLastTitle(an_classe,' )","","","A","","autotitle=yes|relativeOrder=an_classe","ZOO_ANIMAL");

     
     $this->attr["an_pere_title"]=new NormalAttribute("an_pere_title", "1084","pere (titre)","text","",false,28,"",
                                                "H",false,false,false,
						$this->attr["an_identification"],"","::getLastTitle(an_pere,' )","","","A","","autotitle=yes|relativeOrder=an_pere","ZOO_ANIMAL");

     
     $this->attr["an_mere_title"]=new NormalAttribute("an_mere_title", "1084","mere (titre)","text","",false,29,"",
                                                "H",false,false,false,
						$this->attr["an_identification"],"","::getLastTitle(an_mere,' )","","","A","","autotitle=yes|relativeOrder=an_mere","ZOO_ANIMAL");

     
		
	 $this->absoluteOrders=["an_identification"=>10,"an_nom"=>20,"an_tatouage"=>30,"an_espece"=>40,"an_espece_title"=>50,"an_ordre"=>60,"an_classe"=>70,"an_classe_title"=>80,"an_sexe"=>90,"an_photo"=>100,"an_naissance"=>110,"an_entree"=>120,"an_enfant_t"=>130,"an_enfant"=>140,"an_carnetsante"=>150,"an_enclos"=>160,"an_parent"=>170,"an_pere"=>180,"an_pere_title"=>190,"an_mere"=>200,"an_mere_title"=>210,"an_folder"=>220];
     $this->fromids[1084]=1084;
     $this->fromname='ZOO_ANIMAL';

    $this->fields["an_nom"]="an_nom";
    $this->fields["an_tatouage"]="an_tatouage";
    $this->fields["an_espece"]="an_espece";
    $this->fields["an_espece_title"]="an_espece_title";
    $this->fields["an_ordre"]="an_ordre";
    $this->fields["an_classe"]="an_classe";
    $this->fields["an_sexe"]="an_sexe";
    $this->fields["an_photo"]="an_photo";
    $this->fields["an_naissance"]="an_naissance";
    $this->fields["an_entree"]="an_entree";
    $this->fields["an_enfant"]="an_enfant";
    $this->fields["an_pere"]="an_pere";
    $this->fields["an_mere"]="an_mere";
    $this->fields["an_classe_title"]="an_classe_title";
    $this->fields["an_pere_title"]="an_pere_title";
    $this->fields["an_mere_title"]="an_mere_title";
   }
}


        }

namespace {

        


}

namespace Dcp\Family {
class Zoo_animal extends \Dcp\Family\Document {
   //  family : Animal

   public $dbtable="doc1084";
   public $dbseq="seq_doc1084";
   public $sqlcreate = array("create table doc1084 (an_nom text,an_tatouage int4,an_espece text,an_espece_title text,an_ordre text,an_classe text,an_sexe text,an_photo text,an_naissance date,an_entree date,an_enfant text,an_pere text,an_mere text,an_classe_title text,an_pere_title text,an_mere_title text) inherits (doc);",
     "create sequence seq_doc1084 start 1;",
     "alter TABLE doc1084 ADD primary key (id);",
     "select setval('seq_doc1084', count(distinct initid)+1, false )  from only doc1084;");
   

     public $fromid=1084;
     public $fromname='ZOO_ANIMAL';
     public $fromtitle="Animal";
     const familyName='ZOO_ANIMAL';

   function __construct ($dbaccess='', $id='',$res='',$dbid=0) {
        if (empty($this->attributes)) {
           $this->attributes = new \ADoc1084();
          if (isset($this->attributes->fields))  $this->fields += $this->attributes->fields;
        }
        parent::__construct($dbaccess, intval($id), $res, $dbid);
        $this->postConstructor();
   }

   function SpecRefreshGen($onlyspec=false) {
       $err = parent::specRefreshGen();

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_espece_title", "::getTitle(an_espece)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_ordre", "::getdocvalue(an_espece,es_ordre)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_classe", "::getdocvalue( an_espece , es_classe)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_pere", "::getAscendant(M)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_mere", "::getAscendant(F)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_espece_title", "::getLastTitle(an_espece,' )");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_classe_title", "::getLastTitle(an_classe,' )");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_pere_title", "::getLastTitle(an_pere,' )");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_mere_title", "::getLastTitle(an_mere,' )");


       return $err;
   }
   


}
}
     
// alias name for the class
namespace {
    class_alias('\Dcp\Family\Zoo_animal','_Zoo_animal');
    class_alias('\Dcp\Family\Zoo_animal' , 'Doc1084');
}

