<?php
//file ini bertugas untuk memberikan hasil routing dari app
//dan untuk menghasilkan output pada index.php di src

class Routes{
    public function run(){
        $router = new App();
        $router->defaultController('cekRoutes');

        // ROUTE GET (nampilin halaman)
        $router->get('cekRoutes/index', ['cekRoutes','index']);
        $router->get('dashboardController/dashboard', ['dashboardController','dashboard']);
        $router->get('routeAddUser/loginPage', ['routeAddUser','loginPage']);
        $router->get('routeAddUser/addUser', ['routeAddUser','addUser']); //Menambahkan route get untuk ke halaman regis
        $router->get('routeDashboard/dashboardPage', ['routeDashboard','dashboardPage']);
        $router->get('routeDashboard/dashboardAddUser', ['routeDashboard','dashboardAddUser']);
        $router->get('routeVerification/adminDashboard', ['routeVerification','adminDashboard']);
        $router->get('routeDashboard/dashboardAdmin', ['routeDashboard','dashboardAdmin']);


        // ROUTE POST (proses data / submit form jika menggunakan method POST
        $router->post('loginAddUser/addUser', ['loginAddUser','addUser']);
        $router->post('loginConfiguration/login', ['loginConfiguration','login']);
        $router->post('routeAddUser/addUser', ['routeAddUser','addUser']);
        //$router->post('routeVerification/adminDashboard', ['routeDashboard','adminDashboard']);

        $router->run();
    }
}
?>