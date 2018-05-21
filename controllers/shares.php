<?php

class Shares extends Controller {

    public function index() {
        $viewModel = new ShareModel();
        $this->returnView($viewModel->index(), true);
    }

    public function add() {
        if(!isset($_SESSION['user_logged_in'])) {
            header('Location: ' . ROOT_URL);
            exit();
        }
        $viewModel = new ShareModel();
        $this->returnView($viewModel->add(), true);
    }

}