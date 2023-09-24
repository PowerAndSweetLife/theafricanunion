<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("FrontModel", "front");
    }

    public function index()
    {
        $countries = $this->front->getCountries();
        $content = [];
        $nbre_page = 1;
        if (count($countries) <= 4) {
            array_push($content, $countries);
        } else if (count($countries) > 4) {
            if (count($countries) % 4 == 0) {
                $nbre_page = intval(count($countries)) / 4;
            } else {
                $reste = count($countries) % 4;
                $nbre_page = intval(floor(count($countries) / 4)) + 1;
            }
            $debut = 0;
            $fin = 4;
            for ($i = 1; $i <= $nbre_page; $i++) {
                $data_tab = [];
                if ($fin > count($countries)) {
                    $fin = count($countries);
                } else {
                    if ($i == 1) {
                        $debut = 0;
                        $fin = 4;
                    } else {
                        $debut += 4;
                        $fin += 4;
                    }
                }
                if ($fin >= count($countries)) {
                    $fin = count($countries);
                }
                for ($k = $debut; $k < $fin; $k++) {
                    array_push($data_tab, $countries[$k]);
                }
                array_push($content, $data_tab);
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('index', array(
            "address" => $this->front->getAddress(),
            "about" => $this->front->getAbout(),
            "social" => $this->front->getSocial(),
            "header" => $this->front->getHeader(),
            "solution" => $this->front->getSolution(),
            "countries" => $content,
            "nbre_carousel" => $nbre_page,
            "streaming" => $this->front->getStreaming(),
        ));
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function email()
    {
        $this->front->send_email($this->input->post('email'), $this->input->post('objet'), $this->input->post('content'));
        $countries = $this->front->getCountries();
        $content = [];
        $nbre_page = 1;
        if (count($countries) <= 4) {
            array_push($content, $countries);
        } else if (count($countries) > 4) {
            if (count($countries) % 4 == 0) {
                $nbre_page = intval(count($countries)) / 4;
            } else {
                $reste = count($countries) % 4;
                $nbre_page = intval(floor(count($countries) / 4)) + 1;
            }
            $debut = 0;
            $fin = 4;
            for ($i = 1; $i <= $nbre_page; $i++) {
                $data_tab = [];
                if ($fin > count($countries)) {
                    $fin = count($countries);
                } else {
                    if ($i == 1) {
                        $debut = 0;
                        $fin = 4;
                    } else {
                        $debut += 4;
                        $fin += 4;
                    }
                }
                if ($fin >= count($countries)) {
                    $fin = count($countries);
                }
                for ($k = $debut; $k < $fin; $k++) {
                    array_push($data_tab, $countries[$k]);
                }
                array_push($content, $data_tab);
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('index', array(
            "address" => $this->front->getAddress(),
            "about" => $this->front->getAbout(),
            "social" => $this->front->getSocial(),
            "header" => $this->front->getHeader(),
            "solution" => $this->front->getSolution(),
            "countries" => $content,
            "nbre_carousel" => $nbre_page,
            "streaming" => $this->front->getStreaming(),
        ));
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function show_more($id)
    {
        $this->load->view('template/header');
        $this->load->view('template/navbar_pays');

        $this->load->view('pays', array(
            "address" => $this->front->getAddress(),
            "about" => $this->front->getAbout(),
            "social" => $this->front->getSocial(),
            "header" => $this->front->getHeader(),
            "solution" => $this->front->getSolution(),
            "countries" => $this->front->getCountriesByID($id),
        ));
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function signup()
    {
        $this->front->signup($this->input->post('fn'), $this->input->post('mn'), $this->input->post('sn'), $this->input->post('address'), $this->input->post('snumb'), $this->input->post('sop'), $this->input->post('country'), $this->input->post('zp'), $this->input->post('occupation'), $this->input->post('el'), $this->input->post('tn'), $this->input->post('cc'), $this->input->post('ln'));


        $countries = $this->front->getCountries();
        $content = [];
        $nbre_page = 1;
        if (count($countries) <= 4) {
            array_push($content, $countries);
        } else if (count($countries) > 4) {
            if (count($countries) % 4 == 0) {
                $nbre_page = intval(count($countries)) / 4;
            } else {
                $reste = count($countries) % 4;
                $nbre_page = intval(floor(count($countries) / 4)) + 1;
            }
            $debut = 0;
            $fin = 4;
            for ($i = 1; $i <= $nbre_page; $i++) {
                $data_tab = [];
                if ($fin > count($countries)) {
                    $fin = count($countries);
                } else {
                    if ($i == 1) {
                        $debut = 0;
                        $fin = 4;
                    } else {
                        $debut += 4;
                        $fin += 4;
                    }
                }
                if ($fin >= count($countries)) {
                    $fin = count($countries);
                }
                for ($k = $debut; $k < $fin; $k++) {
                    array_push($data_tab, $countries[$k]);
                }
                array_push($content, $data_tab);
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('index', array(
            "address" => $this->front->getAddress(),
            "about" => $this->front->getAbout(),
            "social" => $this->front->getSocial(),
            "header" => $this->front->getHeader(),
            "solution" => $this->front->getSolution(),
            "countries" => $content,
            "nbre_carousel" => $nbre_page,
            "streaming" => $this->front->getStreaming(),
        ));
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
}
