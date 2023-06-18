<?php
error_reporting(E_ALL ^ E_DEPRECATED);
class CSearch{

    public function __construct(){

        $this->model = new MSearch();

    }

    public function index($param){
        $data = $this->model->data($param);
        $this->view = new VSearch();
        $this->view->render("Product Search", $data);
    }

}