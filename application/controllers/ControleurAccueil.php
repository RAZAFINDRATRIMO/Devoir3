<?php
class ControleurAccueil extends CI_Controller {

    public function index (){
        $this->load->model("ModelAccueil");
        $this->load->view("ViewAccueil");
    }

    function Connexion(){
        $this->load->model("ModelAccueil");
        $data['lesRegions']= $this->ModelAccueil->getLesRegions($nom);
        $this->load->view("ViewAccueil", $data);
    } 

    function AfficherVille(){
        $idRegion = $_GET['idRegion'];
        $this->load->model("ModelVilles");
        $data['lesVilles'] = $this->ModelVilles->getVillesByRegions($idRegion);
        $this->load->view("AfficherVilles", $data);
    }
}
?>