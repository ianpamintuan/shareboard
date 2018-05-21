<?php

class Messages {

    public static function setMessage($message, $type) {
        if($type == 'Error') {
            $_SESSION['error_message'] = $message;
        } else {
            $_SESSION['success_message'] = $message;
        }
    }

    public static function display() {
        if(isset($_SESSION['error_message'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
            unset($_SESSION['error_message']);
        } elseif(isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']);
        }
    }

}