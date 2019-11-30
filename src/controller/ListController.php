<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ListController extends Controller {
  private $productDAO;

  public function  __construct() {
    $this->productDAO = new ProductDAO();
  }

  public function list(){
    $this->set('products',$this->productDAO->selectProducts());
    $this->set('title', 'List');
    $this->set('currentPage', 'list');
  }
}
