<?php
include_once "./Models/Database.php";
class User
{
  private $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function getAllTeacher()
  {
    $sql = "SELECT * FROM users WHERE role =?";
    return $this->db->query($sql, 'teacher');
  }
  function login($email, $password)
  {
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    return $this->db->queryOne($sql, $email, md5($password));
  }
  function register($name, $email, $password)
  {
    $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES (?, ?, ?)";
    return $this->db->insert($sql, $name, $email, md5($password));
}
function checkEmail($email){
  $sql = "SELECT * FROM users WHERE email = ?";
  return $this->db->queryOne($sql, $email);
}
}