<?php
class ModeleMapper extends Mapper
{
    public function getAllByBrand($brand,$format) {
        $fields="id,libelle,logo";
        $sql = "select mo.* 
                  from ms_modeles mo
                  join ms_marques ma on ma.id=mo.id_marque
                 where lower(ma.libelle)=:brand"; //TODO C'est pour la démo mais c'est pas très beau, c'est du texte non indexé qui passe dans une fonction. En temps normal, je fais mieux que ça
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["brand" => $brand]);

        if(!$result) return "Can't fetch data";
        
        $results = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        
        if (strtolower($format)==="json") return json_encode($results);
        if (strtolower($format)==="xml")  return Mapper::toxml("Modele",$results);
        if (strtolower($format)==="csv")  return Mapper::tocsv($fields,$results);
    }
}