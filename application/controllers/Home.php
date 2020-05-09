<?php

/**
 * Home short summary.
 *
 * Home description.
 *
 * @version 1.0
 * @author User
 */
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home.phtml');
    }
}
