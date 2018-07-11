<?php


namespace {



class ADoc1054 extends ADoc {
    // for familly : famille2018

   function __construct () {
      ADoc::__construct();

     
     
     
     
		
     $this->fromids[1054]=1054;
     $this->fromname='famille2018';

   }
}


        }

namespace {

        


}

namespace Dcp\Family {
class Famille2018 extends \Dcp\Family\Document {
   //  family : famille2018

   public $dbtable="doc1054";
   public $dbseq="seq_doc1054";
   public $sqlcreate = array("create table doc1054 () inherits (doc);",
     "create sequence seq_doc1054 start 1;",
     "alter TABLE doc1054 ADD primary key (id);",
     "select setval('seq_doc1054', count(distinct initid)+1, false )  from only doc1054;");
   

     public $fromid=1054;
     public $fromname='famille2018';
     public $fromtitle="famille2018";
     const familyName='famille2018';

   function __construct ($dbaccess='', $id='',$res='',$dbid=0) {
        if (empty($this->attributes)) {
           $this->attributes = new \ADoc1054();
          if (isset($this->attributes->fields))  $this->fields += $this->attributes->fields;
        }
        parent::__construct($dbaccess, intval($id), $res, $dbid);
        $this->postConstructor();
   }

   function SpecRefreshGen($onlyspec=false) {
       $err = parent::specRefreshGen();


       return $err;
   }
   


}
}
     
// alias name for the class
namespace {
    class_alias('\Dcp\Family\Famille2018','_Famille2018');
    class_alias('\Dcp\Family\Famille2018' , 'Doc1054');
}

