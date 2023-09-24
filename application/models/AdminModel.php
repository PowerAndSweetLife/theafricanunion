<?php 

    class AdminModel extends CI_Model {
        public function getAbout() {
            return $this->db->query("SELECT * FROM about WHERE 1")->result() ;
        }
        public function getAddress() {
            return $this->db->query("SELECT * FROM address WHERE 1")->result() ;
        }
        public function getHeader() {
            return $this->db->query("SELECT * FROM header WHERE 1")->result() ;
        }
        public function getStreaming() {
            return $this->db->query("SELECT * FROM streaming WHERE 1")->result() ;
        }
        public function getSocial() {
            return $this->db->query("SELECT * FROM social WHERE 1")->result() ;
        }
        public function getSolution() {
            return $this->db->query("SELECT * FROM solution WHERE 1")->result() ;
        }
        public function getClient() {
            return $this->db->query("SELECT * FROM clients WHERE 1")->result() ;
        }
        public function getEmails() {
            return $this->db->query("SELECT * FROM emails WHERE 1")->result() ;
        }
        public function editAbout($content) {
            $this->db->query("UPDATE about SET content='{$content}' WHERE id_about='1'") ;
        }
        
        public function editAddress($address,$email,$phone) {
            $this->db->query("UPDATE address SET address='{$address}',email='{$email}',phone='{$phone}' WHERE id_address='1'") ;
        }
        public function alterHeader($mission,$objectif,$culture) {
            $this->db->query("UPDATE header SET mission='{$mission}',objectif='{$objectif}',culture='{$culture}' WHERE id_header='1'") ; 
        }
        public function alterStreaming($yt) {
            $this->db->query("UPDATE streaming SET link='{$yt}' WHERE id_streaming='1'") ;
        }

        public function alterSocial($fb,$twitter,$yt) {
            $this->db->query("UPDATE social SET facebook='{$fb}',twitter='{$twitter}',youtube='{$yt}' WHERE id_social='1'") ; 
        }


        public function alterSolution($content,$oaf,$ed,$ocr,$ocd,$rd,$ic) {
            $this->db->query("UPDATE solution SET content='{$content}',developpement_economique='{$ed}',organisation_et_fonction='{$oaf}',organisation_des_comites_regionaux='{$ocr}',organisation_des_comites_district='{$ocd}',resolution_des_differents='{$rd}',interpretation_constitutionnelle='{$ic}' WHERE id_solution='1'") ; 
        }
        public function delete_member($id) {
            $this->db->query("DELETE FROM clients WHERE id_clients='$id'") ;
        }
        public function delete_email($id) {
            $this->db->query("DELETE FROM emails WHERE id_emails='$id'") ;
        }
        public function getCountries() {
            return $this->db->query("SELECT * FROM countries WHERE 1")->result() ;
        }
        public function delete_country($id) {
            $this->db->query("DELETE FROM countries WHERE id_countries='$id'") ;
        }

        public function add_country($country_name,$country_slug,$description,$econimic,$politic,$historic,$culture_description,$flag_country,$photo_culture,$biography) {
            $this->db->query('INSERT INTO countries(country_name,description,slug_country,biography,economic,historic,politic,flag_country,culture_description,photo_culture) VALUES("'.addslashes($country_name).'","'.addslashes($description).'","'.addslashes($country_slug).'","'.addslashes($biography).'","'.addslashes($econimic).'","'.addslashes($politic).'","'.addslashes($historic).'","'.addslashes($flag_country).'","'.addslashes($culture_description).'","'.addslashes($photo_culture).'")') ;
        }
    }