<?php

class FrontModel extends CI_Model
{
    public function getAddress()
    {
        return $this->db->query("SELECT * FROM address WHERE 1")->result();
    }
    public function getAbout()
    {
        return $this->db->query("SELECT * FROM about WHERE 1")->result();
    }
    public function getSocial()
    {
        return $this->db->query("SELECT * FROM social WHERE 1")->result();
    }

    public function send_email($email, $objet, $content)
    {
        $this->db->query("INSERT INTO emails(email,objet,content) VALUES('{$email}','{$objet}','{$content}')");
    }

    public function getHeader()
    {
        return $this->db->query("SELECT * FROM header WHERE 1")->result();
    }

    public function getSolution()
    {
        return $this->db->query("SELECT * FROM solution WHERE 1")->result();
    }

    public function getCountries()
    {
        return $this->db->query("SELECT * FROM countries WHERE 1 ORDER BY country_name ASC")->result();
    }

    public function getCountriesByID($id) {
        return $this->db->query("SELECT * FROM countries WHERE slug_country='{$id}'")->result() ;
    }

    public function signup($fn,$mn,$sn,$address,$snumb,$sop,$country,$zp,$occupation,$el,$tn,$cc,$ln) {
        $this->db->query("INSERT INTO clients(first_name,middle_name,surname,address,street_number,state,country,zipcode,occupation,highest,telephone,country_code,local_number) VALUES('{$fn}','{$mn}','{$sn}','{$address}','{$snumb}','{$sop}','{$country}','{$zp}','{$occupation}','{$el}','{$tn}','{$cc}','{$ln}')") ;
    }
    public function getStreaming() {
        return $this->db->query("SELECT * FROM streaming WHERE 1")->result() ;
    }
}
