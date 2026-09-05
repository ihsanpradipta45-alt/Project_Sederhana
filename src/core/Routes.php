<?php
//file ini bertugas untuk memberikan hasil routing dari app
//dan untuk menghasilkan output pada index.php di src

class Routes{
    public function run(){
        $router = new App();
        $router->defaultController('cekRoutes');
        $router->get('cekRoutes/index', ['cekRoutes','index']);
        $router->post('dashboardController/dashboard', ['dashboardController','dashboard']);
        $router->post('routeAddUser/loginPage', ['routeAddUser','loginPage']);
        $router->post('routerAddUser/addUser', ['routerAddUser','addUser']);

        $router->run();
    }
}


?>