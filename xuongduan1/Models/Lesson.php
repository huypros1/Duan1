<?php
include_once "./Models/Database.php";
class Lesson
{
  private $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function getAllByCourse($course_id)
  {
    $sql = "SELECT * FROM lessons WHERE course_id = ?";
    return $this->db->query($sql, $course_id);
  }
  function getById($id)
  {
    $sql = "SELECT * FROM lessons WHERE id = ?";
    return $this->db->queryOne($sql, $id);
  }
  
}