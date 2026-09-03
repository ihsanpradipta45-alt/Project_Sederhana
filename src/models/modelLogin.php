<?php
require_once __DIR__.'../config/loadConnection.php';
class  modelLogin{
    private $db;
    // disini butuh koneksi karena di mysqli prepare butuh koneksi
    public function __construct(){
        $this->db = new LoadConnection();
        $this->db->connect();

    }
    public function login($email, $password){
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($this->db->connect(), $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        return $user;

        


    }
      
}




?>

