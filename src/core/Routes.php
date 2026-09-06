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
        $router->get('routeDashboard/dasboardPage', ['routeDashboard','dashboardPage']);
        

        // ROUTE POST (proses data / submit form)
        $router->post('loginConfiguration/login', ['loginConfiguration','login']);
        $router->post('routeAddUser/addUser', ['routeAddUser','addUser']);
        $router->post('routeVerification/adminDashboard', ['routeDashboard','adminDashboard']);

        $router->run();
    }
}
?>