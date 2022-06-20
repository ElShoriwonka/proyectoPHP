<?php 

    class Conexion extends CI_Model{

        public function __construct(){
            //llamo al constructor del modelo
            parent::__construct();
        }

        public function getAll(){
            $query = $this->db->get('EDITORIAL');
            return $query->result();
        }
    }

?>