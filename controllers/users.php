<?php

class Users extends Controller {

    public function register() {
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }

    public function login() {
        $viewModel = new UserModel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout() {
        unset($_SESSION['user_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        header('Location: ' . ROOT_URL);
    }

}