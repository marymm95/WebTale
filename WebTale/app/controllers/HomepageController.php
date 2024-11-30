<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class HomepageController extends Controller {
    public function index() {
        // Load the homepage view
        $this->view('homepage');
    }
}

