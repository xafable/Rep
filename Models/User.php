<?php
namespace onlineeditor\Models;
require_once _ROOT.'/Db/DBapp.php';

class User
{
 private  $logged ;
 private $login;
 private $password;
 private $id;
 private $db;

 public function __construct()
 {
     $this->logged=0;
     $this->db  = \DBapp::Get();

 }
 public function GetStatus()
 {
     return $this->logged;
 }
 public function GetId()
 {
     return $this->id;
 }
 public function Login($login,$pass)
 {
     $stmt= $this->db->prepare("select * from users where login = :login and password = md5(:password)");
     $stmt->execute(['login' => $login, 'password' => $pass]);
     $array = $stmt->fetch(\PDO::FETCH_ASSOC);
     if($array != null) {
         $this->logged = 1;
         $this->id = $array['id'];
         return true;
     }
     else return false;
 }

 public function Logout()
 {
     setcookie("login", "", time()-3600);
     setcookie("pass", "", time()-3600);

 }
 public function Register($login,$password)
 {
     $stmt = $this->db->prepare("INSERT INTO users(login, password) VALUES(:login, md5(:password))");
     $ret = $stmt->execute(['login' => $login, 'password' => $password]);
     return $ret;
 }

}