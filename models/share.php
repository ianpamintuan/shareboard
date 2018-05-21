<?php

class ShareModel extends Model {

    public function index() {
        $this->query('SELECT * FROM tblshares');
        $shares = $this->resultSet();
        return $shares;
    }

    public function add() {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']) {

            if(trim($post['title']) == '' || trim($post['body']) == '' || trim($post['link']) == '') {
                Messages::setMessage('Please complete all fields.', 'Error');
                return;
            }

            $user_id = $_SESSION['user_data']['id'];

            $this->query('INSERT INTO tblshares(user_id, title, body, link) VALUES(:user_id, :title, :body, :link)');
            $this->bind(':user_id', $user_id);
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->execute();

            if($this->lastInsertId()) {
                header('Location: ' . ROOT_URL . 'shares');
            }

        }

        return;

    }


}