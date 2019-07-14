<?php
require_once 'model.php';
// class Controller {
    
//     // function __construct() {
//     //     $this->Model = new Model();
//     //     // $this->loadModel();
//     // }

//     // private function loadModel() {
//     //     require 'controllers/model.php';
//     //     $this->model = new Model($this->db);
//     // }
//     function index() {
//         // var_dump(1); exit;
//         // var_dump($Model); exit;
//         $users = $this->Model->getUsers();
//         // var_dump($users); exit;
//         $cities = $this->Model->getCities();
//         var_dump($cities); exit;
//         //require_once 'controller.php';
//     }
// }

 // $db_date = [
 //            'host' => 'localhost',
 //            'root' => 'root',
 //            'password' => '',
 //            'name' => 'parshin'
 //        ];

$model = new Model("root", "", "localhost", "parshin");

$users = $model->getUsers();
$cities = $model->getCities();