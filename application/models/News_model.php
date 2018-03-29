
<?php

class News_model extends CI_Model {

    function get_records() {

        $this->db->select("data");
        $this->db->from('general');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }



    function get_catg($catg) {

        $this->db->select("data");
        $this->db->from($catg);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }



}

?>