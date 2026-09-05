<?php
//kalo mau buat databse harus di reuire buat koneksi
require_once __DIR__ .'/../config/loadConnection.php';
class addUser{
    private $koneksi;
    public function __construct(){
        $db = new loadConnection();
        $this->koneksi = $db->connect();
    }
    public function addUser($email,$password,$firstName,$lastName,$role){
        $email = htmlspecialchars($email);
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($this->koneksi, $sql);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) > 0){
            return false;
        }else{
            $passwordHash = password_hash($password,PASSWORD_DEFAULT);
            $insertsql = 'INSERT INTO user (email,password,firstName,lastName,role)';
            $insertStmt = mysqli_prepare($this->koneksi, $insertsql);
            mysqli_stmt_bind_param($insertStmt,'sssss', $email, $passwordHash, $firstName, $lastName, $role);
            mysqli_stmt_execute($insertStmt);
            return true;


        }
        
    }

}












?>