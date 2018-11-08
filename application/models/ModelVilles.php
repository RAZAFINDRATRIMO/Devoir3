<?php

class ModelVilles extends CI_Model
{
    public function getVillesByRegions($idRegion)
    {
        $sql = $this->db->select('*')->from('ville')->where('numRegion',$idRegion);
        return $sql->result();
    }
}
?>