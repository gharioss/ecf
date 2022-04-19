<?php

namespace Models;

class User extends Model
{
    protected $table = "users";

    public function insertUser($lname, $fname, $email, $password, $adress, $city, $zip_code)
    {
        $stmt1 = $this->pdo->prepare("INSERT INTO {$this->table} (lname, fname, email, password, adress, city, zip_code, id_role)
                                    VALUES (:lname, :fname, :email, :password, :adress, :city, :zip_code, 2)");
        $stmt1->bindParam(":lname", $lname);
        $stmt1->bindParam(":fname", $fname);
        $stmt1->bindParam(":email", $email);
        $stmt1->bindParam(":password", $password);
        $stmt1->bindParam(":adress", $adress);
        $stmt1->bindParam(":city", $city);
        $stmt1->bindParam(":zip_code", $zip_code);
        $stmt1->execute();
    }

    public function loginUser($email, $password)
    {
        $stmt1 = $this->pdo->prepare("SELECT * from {$this->table} WHERE email = :email");

        $stmt1->bindParam(":email", $email);
        // $stmt1->bindParam(":password", $password);
        $stmt1->execute();

        $user = $stmt1->fetchAll();

        if (isset($user[0]) && $user[0]["password"] == password_verify($password, $user[0]["password"]) && $user[0]["email"] == $email) {
            session_start();
            $_SESSION['is_logged'] = $user[0]['id_user'];
            echo "success";
        } else {
            echo "no";
        }
    }
}
