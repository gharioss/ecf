<?php

namespace Controllers;

class User extends Controller
{

    public function insert()
    {
        $userClass = new \Models\User();

        $lname = null;
        $fname = null;
        $email = null;
        $pwd = null;
        $password = null;
        $adress = null;
        $city = null;
        $zip_code = null;

        if (!empty($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['adress']) && !empty($_POST['city']) && !empty($_POST['zip_code'])) {

            $lname = $_POST['lname'];
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $pwd = $_POST['password'];
            $password = password_hash($pwd, PASSWORD_DEFAULT);
            $adress = $_POST['adress'];
            $city = $_POST['city'];
            $zip_code = $_POST['zip_code'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $userClass->insertUser($lname, $fname, $email, $password, $adress, $city, $zip_code);

                $this->redirect('index.php');
            } else {
                echo "L'email : $email, n'est pas un email valide.";
            }
        } else {
            echo "Vous devez remplir toutes les données.";
        }
    }

    public function login()
    {
        $userClass = new \Models\User();

        $email = null;
        $password = null;

        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $userClass->loginUser($email, $password);

                $this->redirect('index.php');
            } else {
                echo "L'email : $email, n'est pas un email valide.";
            }
        } else {
            echo "Vous devez remplir toutes les données.";
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->redirect('index.php');
    }
}
