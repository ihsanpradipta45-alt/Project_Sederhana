<?php
class logOut{

public function logout(){
    session_start();

    session_destroy();
}
}



?>