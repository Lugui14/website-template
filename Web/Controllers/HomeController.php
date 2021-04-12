<?php

  namespace Web\Controllers;

  class HomeController {

    public function index() {
      \Web\Views\MainView::render('home');
    }

  }

?>