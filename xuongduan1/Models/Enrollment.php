<?php
include_once "./Models/Database.php";
class Enrollment
{
  private $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function enroll($user_id, $course_id, $role = 'student', $price = 0)
  {
    $sql = "INSERT INTO enrollments (`user_id`, `course_id`, `role`, `price`) VALUES (?, ?, ?, ?)";
    return $this->db->insert($sql, $user_id, $course_id, $role, $price);
  }
  function getMyCourseByRole($user_id, $role)
  {
     $sql = "SELECT* FROM enrollments e INNER JOIN courses c ON e.course_id =c.id WHERE e.user_id=? AND e.role=?";
    return $this->db->query($sql, $user_id, $role);
  }
}