<?php

  namespace Web\Controllers;

  class CostumersController {

    public function index() {
      \Web\Views\MainView::render('costumers');
    }

  }

?>