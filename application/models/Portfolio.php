<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();                //load the database
    }

    public function getContent()
    {
        $query=$this->db->get('project');               //geting the data of table from the database
        
        $data=array();

        if($query->num_rows()>0)                //checking the empty row of table using num_row() function          
        {
            foreach($query->result() as $row)               //looping the data of table as row
            {
                foreach($row as $key=>$value)
                {
                    $row->$key=htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
                $data[]=$row;                   //storing the rows in array
            }
        }
        return $data;
    }
}
