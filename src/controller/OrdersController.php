<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/OrderDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class OrdersController extends Controller {

  function __construct() {
    $this->orderDAO = new OrderDAO();
    $this->userDAO = new UserDAO();
  }

  public function index() {
    $orders = $this->orderDAO->selectAllOrders();
    $this->set('orders', $orders);
  }

  public function about() {

  }

  public function shop() {
    if (!empty($_POST)) {
      $_SESSION['shoppingCart'] = $_POST;

      header('Location: index.php?page=payment');
      exit();
    }
  }

  public function tutorial() {

  }
    public function tutorial2() {

  }
    
  public function payment() {
    if (!empty($_POST)) {
      $errors = array();
      if (empty($_POST['name'])) {
        $errors['name'] = 'Please enter your name';
      }
      if (empty($_POST['email'])) {
        $errors['email'] = 'Please enter a name';
      }
      if (empty($_POST['zipcode'])) {
        $errors['zipcode'] = 'Please enter a zipcode';
      }
      if (empty($_POST['adress_street'])) {
        $errors['adress_street'] = 'Please enter a street';
      }
      if (empty($_POST['adress_number'])) {
        $errors['adress_number'] = 'Please enter a number';
      }
      if (empty($_POST['phone'])) {
        $errors['phone'] = 'Please enter a phone number';
      }

      if (empty($errors)) {
        $userId = $this->userDAO->addUser($_POST);

        $order = array();
        if (!empty($_SESSION['shoppingCart'])) {
          $cart = $_SESSION['shoppingCart'];
          
          $order['plank'] = !empty($cart['plank']);
          $order['vijzen'] = !empty($cart['vijzen']);
          $order['wielen'] = !empty($cart['wielen']);
          $order['motor'] = !empty($cart['motor']);
          $order['controller'] = !empty($cart['controller']);
          $order['flysky'] = !empty($cart['flysky']);
          $order['wire'] = !empty($cart['wire']);
          $order['versterkingshoek'] = !empty($cart['versterkingshoek']);
       

          $order["userId"] = $userId;
          $this->orderDAO->addOrder($order);
        }
      
      }
      $_SESSION['error'] = 'Registration Failed!';
      $this->set('errors', $errors);
    }
  }
}


