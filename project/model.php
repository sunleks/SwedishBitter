<?php
// global $link;
// class Model {

//     public $db;

//     public function __construct($db) {
//         $this->db = $db;
//         $db = [
//             'host' => 'localhost',
//             'root' => 'root',
//             'password' => '',
//             'name' => 'parshin'
//         ];
//         $this->link  = mysqli_connect($db['host'], $db['root'], $db['password'], $db['name']); 
//         mysqli_query($this->link, "SET NAMES UTF8");
//     }

//     public function getUsers() {
//         $sql = "SELECT * FROM users u INNER JOIN cities c ON u.id_country = c.id";
//         $result = mysqli_query($this->link, $sql);
//         $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
//         return $users;
//     }

//     public function getCities() {
//         $resultCities = mysqli_query($this->link, "SELECT * FROM cities");
//         $cities = mysqli_fetch_all($resultCities, MYSQLI_ASSOC);
//         return $cities;
//     }
// }

/**
 * 
 */
class Model {
    public $db;
    public $error = null;
    
    public function __construct($login, $password, $host, $db) {
        $this->db = mysqli_connect($host, $login, $password, $db);

        if (!$this->db) {
            $this->error = mysqli_connect_error();
        }
    }

    public function getError () {
        return $this->error;
    }

    public function getUsers() {
        $sql = "SELECT * FROM users u INNER JOIN cities c ON u.id_country = c.id";
        $result = mysqli_query($this->db, $sql);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $users;
    }

    public function getCities() {
        $resultCities = mysqli_query($this->db, "SELECT * FROM cities");
        $cities = mysqli_fetch_all($resultCities, MYSQLI_ASSOC);
        return $cities;
    }
}
