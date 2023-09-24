<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel", "admin");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {

        $data = array(
            "about" => $this->admin->getAbout(),
            "address" => $this->admin->getAddress(),
            "header" => $this->admin->getHeader(),
            "streaming" => $this->admin->getStreaming(),
            "social" => $this->admin->getSocial(),
            "solution" => $this->admin->getSolution(),
            "client" => $this->admin->getClient(),
            "emails" => $this->admin->getEmails(),
            "countries" => $this->admin->getCountries(),
        );

        $this->load->view('template/header', array("admin" => true));
        $this->load->view('admin', $data);
        $this->load->view('template/footer', array("admin" => true));
    }

    public function editcontent()
    {
        $content = $this->input->post("content");

        $this->admin->editAbout($content);

        redirect("admin");
    }
    public function alterAddress()
    {
        $address = $this->input->post("address");
        $email = $this->input->post("email");
        $phone = $this->input->post("phone");

        $this->admin->editAddress($address, $email, $phone);

        redirect("admin");
    }

    public function editHeader()
    {
        $mission = $this->input->post("mission");
        $objectif = $this->input->post("objectif");
        $culture = $this->input->post("culture");

        $this->admin->alterHeader($mission, $objectif, $culture);

        redirect("admin");
    }

    public function editStreaming()
    {
        $yt = $this->input->post("yt");

        $this->admin->alterStreaming($yt);

        redirect("admin");
    }

    public function editSocial()
    {
        $fb = $this->input->post("fb");
        $twitter = $this->input->post("twitter");
        $yt = $this->input->post("yt");

        $this->admin->alterSocial($fb, $twitter, $yt);

        redirect("admin");
    }

    public function editSolution()
    {
        $content = $this->input->post("content");
        $oaf = $this->input->post("oaf");
        $ed = $this->input->post("ed");
        $ocr = $this->input->post("ocr");
        $ocd = $this->input->post("ocd");
        $rd = $this->input->post("rd");
        $ic = $this->input->post("ic");

        $this->admin->alterSolution($content,$oaf,$ed,$ocr,$ocd,$rd,$ic);

        redirect("admin");
    }
    public function deleteMember($id) {
        $this->admin->delete_member($id) ;
        redirect("admin") ;
    }

    public function deleteEmail($id) {
        $this->admin->delete_email($id) ;
        redirect("admin") ;
    }

    public function deleteCountry($id) {
        $this->admin->delete_country($id) ;
        redirect("admin") ;
    }
    public function addCountry() {
        $destination = "uploads/" ;
        $country_name = $this->input->post("country_name") ;
        $country_slug = $this->input->post("slug_country") ;
        $description = $this->input->post("description") ;
        $econimic = $this->input->post("economic") ;
        $politic = $this->input->post("politic") ;
        $historic = $this->input->post("historic") ;
        $culture_description = $this->input->post("culture_description") ;
        $flag_country = $_FILES['flag_country'] ;
        $photo_culture = $_FILES['photo_culture'] ;
        $biography = $this->input->post("biography") ;

        move_uploaded_file($flag_country["tmp_name"],"public/".$destination.$flag_country["name"]) ;
        move_uploaded_file($photo_culture["tmp_name"],"public/".$destination.$photo_culture["name"]) ;

        $this->admin->add_country($country_name,$country_slug,$description,$econimic,$politic,$historic,$culture_description,"uploads/".$flag_country["name"],"uploads/".$photo_culture["name"],$biography) ;
        redirect("admin") ;

    }
}
