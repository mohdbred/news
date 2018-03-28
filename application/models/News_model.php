<<<<<<< HEAD
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

=======
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

>>>>>>> ef4f084b76015ba93f1f4cb080fcae08f9a4afc5
?>