<?php

    class Admin_model extends CI_Model {
        public $id_barang;
        public $nama_barang;
        public $deskripsi;
        public $harga;
        public $stok;
        public $jenis_barang;
        public $foto;
        public $rows;
        public $row;
        public $labels = [];

        public function __construct() {
            parent::__construct();
            $this->labels = $this->_attributeLabels();
            $this->load->database();
        }

        public function get_row($id_barang) {
            $sql = sprintf("SELECT * FROM barang WHERE id_barang='%s'", $id_barang);
            $query = $this->db->query($sql);
            $this->row = $query->row();
        }

        public function get_rows() {
            $sql = "SELECT * FROM barang ORDER BY id_barang";
            $query = $this->db->query($sql);
            $rows = array();
                foreach($query->result() as $row) {
                    $rows[] = $row;
                }
            $this->rows = $rows;
        }

        public function insert() {
            $sql = sprintf("INSERT INTO barang VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s')",
            $this->id_barang,
            $this->nama_barang,
            $this->deskripsi,
            $this->harga,
            $this->stok,
            $this->jenis_barang,
            $this->foto
            );
            $this->db->query($sql);
        }

        public function update() {
            $sql = sprintf(
            "UPDATE barang SET nama_barang='%s', deskripsi='%s', harga='%s',stok='%s', jenis_barang='%s', foto='%s' WHERE id_barang='%s' ",
                $this->nama_barang,
                $this->deskripsi,
                $this->harga,
                $this->stok,
                $this->jenis_barang,
           		$this->foto,
                $this->id_barang
            );
            #echo $sql; exit;	
            $this->db->query($sql);
        }

        public function delete($id_barang) {

            $sql = sprintf("DELETE FROM barang WHERE id_barang='%s'", $id_barang);
            $this->db->query($sql);
        }

        public function _attributeLabels() {
            return [
                'id_barang' => 'id_barang: ',
                'nama_barang' => 'nama_barang: ',
                'deskripsi' => 'deskripsi: ',
                'harga' => 'harga: ',
                'stok' => 'stok: ',
                'jenis_barang' => 'jenis_barang:',
                'foto' => 'foto:',
                'id_barang' => 'id_barang: '
            ];
        }
    }

?>