<?php

#modelo que verifica usu�rio e senha e loga o usu�rio no sistema, criando as sess�es necess�rias

defined('BASEPATH') OR exit('No direct script access allowed');

class Tipodespesa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('basico');
    }

    public function set_tipodespesa($data) {

        $query = $this->db->insert('Tab_TipoDespesa', $data);

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            #return TRUE;
            return $this->db->insert_id();
        }
    }

    public function get_tipodespesa($data) {
        $query = $this->db->query('SELECT * FROM Tab_TipoDespesa WHERE idTab_TipoDespesa = ' . $data);
        $query = $query->result_array();

        return $query[0];
    }

    public function update_tipodespesa($data, $id) {

        unset($data['Id']);
        $query = $this->db->update('Tab_TipoDespesa', $data, array('idTab_TipoDespesa' => $id));
        /*
          echo $this->db->last_query();
          echo '<br>';
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit ();
         */
        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	public function delete_tipodespesa($data) {        
		$query = $this->db->delete('Tab_TipoDespesa', array('idTab_TipoDespesa' => $data));

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
	
	public function delete_tipoconsumo($data) {        
		$query = $this->db->delete('Tab_TipoConsumo', array('idTab_TipoConsumo' => $data));

        if ($this->db->affected_rows() === 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function lista_tipodespesa($x) {

        $query = $this->db->query('SELECT * '
                . 'FROM Tab_TipoDespesa '
                . 'WHERE '
                . 'Empresa = ' . $_SESSION['log']['Empresa'] . ' AND '
                . 'idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . ' '
                . 'ORDER BY TipoDespesa ASC ');

        /*
          echo $this->db->last_query();
          $query = $query->result_array();
          echo "<pre>";
          print_r($query);
          echo "</pre>";
          exit();
        */
        if ($query->num_rows() === 0) {
            return FALSE;
        } else {
            if ($x === FALSE) {
                return TRUE;
            } else {
                #foreach ($query->result_array() as $row) {
                #    $row->idApp_Profissional = $row->idApp_Profissional;
                #    $row->NomeProfissional = $row->NomeProfissional;
                #}
                $query = $query->result_array();
                return $query;
            }
        }
    }

    public function select_tipodespesa2($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query(
                'SELECT '
                    . 'idTab_TipoDespesa, '
                    . 'TipoDespesa '
                    . 'FROM '
                    . 'Tab_TipoDespesa '
					. 'WHERE '
                    . 'Empresa = ' . $_SESSION['log']['Empresa'] . ' AND '
                    . 'idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] );				   
        } else {
            $query = $this->db->query(
                'SELECT '
                    . 'idTab_TipoDespesa, '
                    . 'TipoDespesa '
                    . 'FROM '
                    . 'Tab_TipoDespesa '
					. 'WHERE '
                    . 'Empresa = ' . $_SESSION['log']['Empresa'] . ' AND '
                    . 'idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] );

            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_TipoDespesa] = $row->TipoDespesa;
            }
        }

        return $array;
    }
	
    public function select_tipodespesa($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query('
                SELECT 
                    idTab_TipoDespesa, 
                    TipoDespesa 
				FROM 
                    Tab_TipoDespesa
				WHERE 
                    Empresa = ' . $_SESSION['log']['Empresa'] . ' AND 
                    idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . '
				ORDER BY
					TipoDespesa
				');
				   
        } 
		else {
            $query = $this->db->query('
                SELECT 
                    idTab_TipoDespesa, 
                    TipoDespesa 
				FROM 
                    Tab_TipoDespesa
				WHERE 
                    Empresa = ' . $_SESSION['log']['Empresa'] . ' AND 
                    idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] . '
				ORDER BY
					TipoDespesa
				');

            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_TipoDespesa] = $row->TipoDespesa;
            }
        }

        return $array;
    }	
	
	public function select_tipoconsumo($data = FALSE) {

        if ($data === TRUE) {
            $array = $this->db->query(
                'SELECT '
                    . 'idTab_TipoConsumo, '
                    . 'TipoConsumo, '
                    #. 'ValorVenda '
                    . 'FROM '
                    . 'Tab_TipoConsumo '
                    . 'ORDER BY TipoConsumo ASC ');
					#. 'WHERE '
                    #. 'idSis_Usuario = ' . $_SESSION['log']['id'] . ' AND '
                   # . 'idTab_Modulo = ' . $_SESSION['log']['idTab_Modulo'] );
        } else {
            #$query = $this->db->query('SELECT idTab_TipoConsumo, TipoConsumo FROM Tab_TipoConsumo WHERE idSis_Usuario = ' . $_SESSION['log']['id']);
			$query = $this->db->query('SELECT idTab_TipoConsumo, TipoConsumo FROM Tab_TipoConsumo ORDER BY TipoConsumo ASC ');

            $array = array();
            foreach ($query->result() as $row) {
                $array[$row->idTab_TipoConsumo] = $row->TipoConsumo;
            }
        }

        return $array;
    }

}
