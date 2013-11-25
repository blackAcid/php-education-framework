<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 25.11.13
 * Time: 12:37
 */
class DataBase {
    public $host='localhost';
    public $user='root';
    public $password='anna';
    public $database='u_student_mems';
    protected $db;
    public function __construct()
    {
        $dsn = 'mysql:dbname='.$this->database.';host='.$this->host;
        $this->db = new PDO($dsn,$this->user, $this->password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    public function setPdo(){
        return $this->db;
    }
    public function fetchAll()
    {
        $sql='select * from `roles`';
        $result=$this->db->query($sql);
        $result=$result->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
       }
    public function insert(){

    }
}