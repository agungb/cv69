<?php
/**
 * Biodata model
 */
class Biodata_model
{
    private $table = 'biodata';
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function getAllBiodata()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();

    }

    public function getBiodataById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

      $this->db->bind('id', $id);

      return $this->db->single();

    }

}
