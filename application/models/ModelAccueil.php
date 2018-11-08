<?php
class ModelAccueil extends CI_Model
 {
    /*function getLesRegions()
    {
        $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region");
        return $sql->result(); 
    }
    */

    function getLesRegions ($nom)
    {
        $sql = $this->db->query("select statutUser from user where nom =".$nom);
        if ($sql->result()[0]->statutUser=='admin')
        {
            $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region");
        }
        else
        {
            $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region where nomRegion='Bourgogne'");
        }

        return $sql->result();
    }
}
?>