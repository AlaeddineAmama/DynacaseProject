<?php


namespace {



class ADoc1086 extends ADoc {
    // for familly : AnimalTest

   function __construct () {
      ADoc::__construct();

     
     
     $this->attr["an_carnetsante"]=new MenuAttribute("an_carnetsante", "1086","Carnet Santé",24,"%S%app=GENERIC&action=GENERIC_ISEARCH&id=%I%&famid=ZOO_CARNETSANTE&viewone=Y","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_enclos"]=new MenuAttribute("an_enclos", "1086","Enclos",25,"%S%app=GENERIC&action=GENERIC_ISEARCH&id=%I%&famid=ZOO_ENCLOS&viewone=Y","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_parent"]=new MenuAttribute("an_parent", "1086","Parents",26,"%S%app=GENERIC&action=GENERIC_ISEARCH&generic=Y&id=%I%&famid=ZOO_ANIMAL","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     $this->attr["an_folder"]=new MenuAttribute("an_folder", "1086","Dossier",29,"%S%app=ZOO&action=ZOO_ANIMALFOLDER&id=%I%","W","","relativeOrder=::auto","ZOO_ANIMAL");    
     
     
     $this->attr["an_identification"]=new FieldSetAttribute("an_identification", "1086","Identification","W","N","frame",$this->attr["FIELD_HIDDENS"],"relativeOrder=::auto","ZOO_ANIMAL");
     
     
     $this->attr["an_nom"]=new NormalAttribute("an_nom", "1086","nom","text","",false,12,"",
                                                "W",true,true,false,
						$this->attr["an_identification"],"","","","","N","","edittemplate=ZOO:ANIMALNAME:U|viewtemplate=ZOO:ANIMALNAME|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_tatouage"]=new NormalAttribute("an_tatouage", "1086","tatouage","int","",false,13,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","::isInteger(an_tatouage)","N","","edittemplate=ZOO:ANIMALTATOO:S|viewtemplate=ZOO:ANIMALTATOO:S|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_espece"]=new NormalAttribute("an_espece", "1086","espèce","docid","ZOO_ESPECE",false,14,"",
                                                "W",true,false,false,
						$this->attr["an_identification"],"","","","","N","","creation={es_nom:CT}|doctitle=an_espece_title|relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_espece_title"]=new NormalAttribute("an_espece_title", "1086","espèce (titre)","text","",false,15,"",
                                                "H",false,false,false,
						$this->attr["an_identification"],"","::getLastTitle(an_espece,' )","","","A","","autotitle=yes|relativeOrder=an_espece","ZOO_ANIMAL");

     
     $this->attr["an_photo"]=new NormalAttribute("an_photo", "1086","photo","image","",false,19,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_enfant_t"]=new NormalAttribute("an_enfant_t", "1086","liste enfant","array","",false,22,"",
                                                "W",false,false,false,
						$this->attr["an_identification"],"","","","","N","","relativeOrder=::auto","ZOO_ANIMAL");

     
     $this->attr["an_enfant"]=new NormalAttribute("an_enfant", "1086","enfant","docid","ZOO_ANIMAL",true,23,"",
                                                "W",false,false,false,
						$this->attr["an_enfant_t"],"","","","","N","","creation={an_nom:CT,an_espece:an_espece}|relativeOrder=::auto","ZOO_ANIMAL");

     
		
	 $this->absoluteOrders=["an_identification"=>10,"an_nom"=>20,"an_tatouage"=>30,"an_espece"=>40,"an_espece_title"=>50,"an_photo"=>60,"an_enfant_t"=>70,"an_enfant"=>80,"an_carnetsante"=>90,"an_enclos"=>100,"an_parent"=>110,"an_folder"=>120];
     $this->fromids[1086]=1086;
     $this->fromname='ZOO_ANIMAL';

    $this->fields["an_nom"]="an_nom";
    $this->fields["an_tatouage"]="an_tatouage";
    $this->fields["an_espece"]="an_espece";
    $this->fields["an_espece_title"]="an_espece_title";
    $this->fields["an_photo"]="an_photo";
    $this->fields["an_enfant"]="an_enfant";
   }
}


        }

namespace {

        


}

namespace Dcp\Family {
class Zoo_animal extends \ZOO_ANIMAL {
   //  family : AnimalTest

   public $dbtable="doc1086";
   public $dbseq="seq_doc1086";
   public $sqlcreate = array("create table doc1086 (an_nom text,an_tatouage int4,an_espece text,an_espece_title text,an_photo text,an_enfant text) inherits (doc);",
     "create sequence seq_doc1086 start 1;",
     "alter TABLE doc1086 ADD primary key (id);",
     "select setval('seq_doc1086', count(distinct initid)+1, false )  from only doc1086;");
   

     public $fromid=1086;
     public $fromname='ZOO_ANIMAL';
     public $fromtitle="AnimalTest";
     const familyName='ZOO_ANIMAL';

   function __construct ($dbaccess='', $id='',$res='',$dbid=0) {
        if (empty($this->attributes)) {
           $this->attributes = new \ADoc1086();
          if (isset($this->attributes->fields))  $this->fields += $this->attributes->fields;
        }
        parent::__construct($dbaccess, intval($id), $res, $dbid);
        $this->postConstructor();
   }

   function SpecRefreshGen($onlyspec=false) {
       $err = parent::specRefreshGen();

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_espece_title", "::getTitle(an_espece)");

       $err .= ($err!=''?"\n":'') . $this->specRefreshGenAttribute("an_espece_title", "::getLastTitle(an_espece,' )");


       return $err;
   }
   


}
}
     
// alias name for the class
namespace {
    class_alias('\Dcp\Family\Zoo_animal','_Zoo_animal');
    class_alias('\Dcp\Family\Zoo_animal' , 'Doc1086');
}

