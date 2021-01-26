<?php

require_once( __DIR__ . '/DAO.php');

class OrdersDAO extends DAO {
  
  public function selectAllOrders()
  {
    $sql = 'SELECT * FROM `orders`';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addOrder($data) 
  {
    $sql = "INSERT INTO `orders` (`plank`, `vijzen`, `wielen`, `motor`, `controller`, `flysky`, `wire`, `versterkingshoek`, `user_id`) VALUES (:plank, :vijzen, :wielen, :motor, :controller, :flysky, :wire, :versterkingshoek, :user_id)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':plank', $data['plank']);
    $stmt->bindValue(':vijzen', $data['vijzen']);
    $stmt->bindValue(':wielen', $data['wielen']);
    $stmt->bindValue(':motor', $data['motor']);
    $stmt->bindValue(':controller', $data['controller']);
    $stmt->bindValue(':flysky', $data['flysky']);
    $stmt->bindValue(':wire', $data['wire']);
    $stmt->bindValue(':versterkingshoek', $data['versterkingshoek']);

    $stmt->bindValue(':user_id', $data['userId']);
    $stmt->execute();
  }



}
