<?php

class Home extends Controller {
    protected function index() {
        $viewModel = new HomeModel();
        $this->returnView($viewModel->index(), true);
    }
}