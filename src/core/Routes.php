<?php
//file ini bertugas untuk memberikan hasil routing dari app
//dan untuk menghasilkan output pada index.php di src

class Routes{
    public function run(){
        // disini tidak membuat new objek dikarenakan sudah terload di autoload
        $router = new App();
        $router->defaultController('cekRoutes');

        // ROUTE GET (berfungsi sebagai sistem untuk menampilkan halaman)
        $router->get('cekRoutes/index', ['cekRoutes','index']);
        $router->get('routeAddUser/loginPage', ['routeAddUser','loginPage']);
        //$router->get('routeAddUser/addUser', ['routeAddUser','addUser']); //Menambahkan route get untuk ke halaman regis
        $router->get('routeDashboard/dashboardPage', ['routeDashboard','dashboardPage']);
        $router->get('routeDashboard/dashboardAddUser', ['routeDashboard','dashboardAddUser']);
        $router->get('routeVerification/adminDashboard', ['routeVerification','adminDashboard']);
        $router->get('routeDashboard/dashboardAdmin', ['routeDashboard','dashboardAdmin']);
        $router->get('routeDashboard/addProduct',['routeDashboard','addProduct']);
        $router->get('routeDashboard/product',['routeDashboard','product']);
        $router->get('tampilBarang/produk',['tampilBarang','produk']);
        //$router->get('addBarang/logicAddBarang',['addBarang','logicAddBarang']);



        // ROUTE POST (proses data / submit form jika menggunakan method POST)
        $router->post('loginAddUser/addUser', ['loginAddUser','addUser']);
        $router->post('loginConfiguration/login', ['loginConfiguration','login']);
        $router->post('addBarang/logicAddBarang', ['addBarang','logicAddBarang']);
        $router->post('routeVerification/adminDashboard', ['routeDashboard','adminDashboard']);
        $router->post('deleteItem/hapus',['deleteItem','hapus']);
        $router->run();
    }
}
?>