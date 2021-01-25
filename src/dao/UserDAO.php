<?php

require_once( __DIR__ . '/DAO.php');

class UserDAO extends DAO {
  public function addUser($data) {
    $sql = "INSERT INTO `users` (`name`, `email`, `zipcode`, `street`, `number`, `adress_box`, `phone`) VALUES (:name, :email, :zipcode, :street, :number, :adress_box, :phone)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':name', $data['name']);
    $stmt->bindValue(':email', $data['email']);
    $stmt->bindValue(':zipcode', $data['zipcode']);
    $stmt->bindValue(':street', $data['adress_street']);
    $stmt->bindValue(':number', $data['adress_number']);
    $stmt->bindValue(':adress_box', $data['adress_bus']);
    $stmt->bindValue(':phone', $data['phone']);
    if($stmt->execute()) {
      $insertedId = $this->pdo->lastInsertId();
      return $insertedId;
    }
  }
}
