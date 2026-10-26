<?php
//file ini berfungsi untuk pengecekan authentication ulang
class routeVerification extends baseController{

    public function adminDashboard(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user_id'])){
            $this->redirect('cekRoutes/index');
            return;
        }
        if($_SESSION['role'] !== 'admin'){
            $durasi_maksimal = 60;
            if(isset($_SESSION['last_activity'])){
                // time disini settingan udah 1000
                //misal baru scroll 15 detik berarti
                // 1000 - 1015
                $durasi_tidak_aktif = time() - $_SESSION['last_activity'];
                if($durasi_tidak_aktif > $durasi_maksimal){
                    session_unset();
                    session_destroy();   
                    $this->redirect('cekRoutes/index');     
                }
            }else{
                $this->redirect('routeDashboard/dashboardPage');
                return;
            }
            //session ini dibuat biar bisa nyimpen waktu terakhir
            // misal baru scroll 15 detik ini disimpan disini 1015
            $_SESSION['last activity'] = time();
        }
        $this->redirect('routeDashboard/dashboardAdmin');
    }
}






?>
