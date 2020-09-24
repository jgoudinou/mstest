<?php

abstract class Mapper {
    protected $db;

    public function __construct($db) {
        $this->db = $db;
    }
    
    public static function toxml($rootnode,$data) {
      $s="<".$rootnode."s>\n"; //todo gérer le vide
        foreach($data as $r){
          $s.="  <".$rootnode.">\n    "; //todo gérer le vide
          foreach($r as $k=>$v)
            $s.="<".$k."><![CDATA[".$v."]]></".$k.">";
          $s.="\n  </".$rootnode.">\n"; //todo gérer le vide
        }
      $s.="</".$rootnode."s>\n"; //todo gérer le vide      
      return $s;    
    } 

    public static function tocsv($fields,$data) {
      $flds=$fields;
      if(is_string($fields)) $flds=explode(",",$fields);
        
      $s= '"'.implode('","',$flds).'"'."\n";
      
      foreach($data as $d) //TODO prudence avec l'ordre des colonnes
        $s.= '"'.implode('","',$d).'"'."\n";
      return $s;    
    } 
}