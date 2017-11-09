<?php

class User extends CI_Controller
{

   public function gallery()
    {
        $this->load->view('home/gallery.php');
    }

    public function index()
    {
        $this->load->view('home/index.php');
    }

}
