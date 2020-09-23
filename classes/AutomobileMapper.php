<?php
class AutomobileMapper extends Mapper
{
    public function getAll($format) {
        $fields="id,libelle,logo";
        $sql = "SELECT $fields from ms_marques";
        $stmt = $this->db->query($sql);

        $results = [];
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
        
        if (strtolower($format)==="json") return json_encode($results);
        if (strtolower($format)==="xml")  return Mapper::toxml("Marque",$results);
        if (strtolower($format)==="csv")  return Mapper::tocsv($fields,$results);
    }

    /**
     * Get one ticket by its ID
     *
     * @param int $ticket_id The ID of the ticket
     * @return TicketEntity  The ticket
     */
    public function getTicketById($ticket_id) {
        $sql = "SELECT t.id, t.title, t.description, c.component
            from tickets t
            join components c on (c.id = t.component_id)
            where t.id = :ticket_id";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute(["ticket_id" => $ticket_id]);

        if($result) {
            return new TicketEntity($stmt->fetch());
        }

    }
}