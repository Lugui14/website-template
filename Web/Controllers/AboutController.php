<?php

  namespace Web\Controllers;

  class AboutController {

    public function index() {
      \Web\Views\MainView::render('about');
    }

  }

?>