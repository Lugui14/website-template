<?php

  namespace Web\Controllers;

  class ServicesController {

    public function index() {
      \Web\Views\MainView::render('services');
    }

  }

?>