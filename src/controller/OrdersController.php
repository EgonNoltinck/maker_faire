<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/OrderDAO.php';

class OrdersController extends Controller {

  function __construct() {
    $this->orderDAO = new OrderDAO();
  }

  public function index() {
    $orders = $this->orderDAO->selectAllOrders();
    $this->set('orders', $orders);
  }
}
