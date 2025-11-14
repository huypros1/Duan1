<?php
include_once "./Models/Database.php";
class Course
{
  private $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function getAll()
  {
    $sql = "SELECT * FROM courses";
    return $this->db->query($sql);
  }
  function getById($id)
  {
    $sql = "SELECT  c.*, u.name AS teacher_name FROM courses c INNER JOIN users u On c. teacher_id = u.id WHERE c.id = ?";
    return $this->db->queryOne($sql, $id);
  }
  function fillter($keyword, $teacher, $category, $sort){
    $sql = "SELECT * FROM courses WHERE title LIKE ?";
    if (count($teacher) > 0) {
      $sql .= " AND teacher_id IN (" . implode(",", $teacher) .")";
    }
    if (count($category) > 0) {
      $sql .= " AND category_id IN (" . implode(",", $category) .")";
    }
    $sql .= " ORDER BY $sort";
    return $this->db->query($sql, "%$keyword%");
  }
  function create($teacher_id, $title, $category_id, $price, $description, $image)
  {
    $sql = "INSERT INTO courses (`teacher_id`, `title`, `category_id`, `price`, `description`, `image`) VALUES (?, ?, ?, ?, ?, ?)";
    return $this->db->insert($sql, $teacher_id, $title, $category_id, $price, $description, $image);
  }
  function update($id, $title, $category_id, $price, $description, $image)
  {
    $sql = "UPDATE courses SET title = ?, description = ?, category = ?, price = ?";
    if($image !=""){
      $sql .= ", image = ? WHERE id = ?";
      return $this->db->update($sql, $title, $description, $category_id, $price, $image, $id);
    }else{
      $sql .= " WHERE id = ?";
      return $this->db->update($sql, $title, $description, $category_id, $price, $id);
    }
    
  }
}