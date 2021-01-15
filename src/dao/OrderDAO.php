<?php

require_once( __DIR__ . '/DAO.php');

class OrderDAO extends DAO {
  public function selectAllOrders()
  {
    $sql = 'SELECT * FROM `orders`';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
