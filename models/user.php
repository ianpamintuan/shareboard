<?php

class UserModel extends Model {

    public function register() {

        $user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($user) {

            if(trim($user['first_name']) == '' || trim($user['last_name']) == '' || trim($user['email']) == '' || trim($user['username']) == '' || trim($user['password']) == '') {
                Messages::setMessage('Please complete all fields.', 'Error');
                return;
            }

            $password = password_hash($user['password'], PASSWORD_DEFAULT);

            $this->query('INSERT INTO tblusers(first_name, last_name, email, username, password) VALUES(:first_name, :last_name, :email, :username, :password)');
            $this->bind(':first_name', $user['first_name']);
            $this->bind(':last_name', $user['last_name']);
            $this->bind(':email', $user['email']);
            $this->bind(':username', $user['username']);
            $this->bind(':password', $password);
            $this->execute();

            if($this->lastInsertId()) {
                header('Location: ' . ROOT_URL);
            }

        }

        return;

    }

    public function login() {

        $user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($user) {

            if(trim($user['username']) == '' || trim($user['password']) == '') {
                Messages::setMessage('Please complete all fields.', 'Error');
                return;
            }

            $this->query('SELECT * FROM tblusers WHERE BINARY username = :username');
            $this->bind(':username', $user['username']);
            $result = $this->singleResult();

            if($result) {

                if(password_verify($user['password'], $result->password)) {
                    $_SESSION['user_logged_in'] = true;
                    $_SESSION['user_data'] = array(
                        'id'        =>  $result->id,
                        'first_name'=>  $result->first_name,
                        'last_name' =>  $result->last_name,
                        'email'     =>  $result->email,
                        'username'  =>  $result->username
                    );
                    header('Location: ' . ROOT_URL . 'shares');
                } else {
                    Messages::setMessage('Incorrect password.', 'Error');
                }

            } else {
                Messages::setMessage('This user is not yet registered.', 'Error');
            }

        }

        return;

    }
}