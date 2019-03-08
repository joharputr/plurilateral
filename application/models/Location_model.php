<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Location_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCountry() {
        $sql = "SELECT * FROM md_loc0_country order by country_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getProv($id) {
        $sql = "SELECT * FROM md_loc1_province where country_id = {$id} order by prov_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getDistrict($id) {
        $sql = "SELECT * FROM md_loc2_district WHERE prov_id={$id} ORDER BY district_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getArea($id) {
        $sql = "SELECT * FROM md_loc3_area WHERE district_id={$id} ORDER BY area_name ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
