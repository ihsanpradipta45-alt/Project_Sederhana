<?php
//kalo mau buat objek harus di reuire dulu karena php ga bisa kenal class nya
require_once __DIR__.'/../../config/loadConnection.php';
class  modelLogin{
    private $koneksi;
    // disini butuh koneksi karena di mysqli prepare butuh koneksi
    public function __construct(){
        $db = new LoadConnection();
        $this->koneksi= $db->connect();

    }
    public function login($email){
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($this->koneksi, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
        return $user;

        


    }
      
}




?>

