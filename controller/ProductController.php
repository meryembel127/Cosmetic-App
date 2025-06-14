<?php
require_once './controller/ProductsController.php';

$controller = new ProductsController($pdo);
$controller->index(); 

class ProductsController {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index(): void {
        $productModel = new $product($this->pdo);
        $products = $productModel->getAll();
        include './view/index.php';
    }

    public function store($data): void {
        $productModel = new Product($this->pdo);
        $productModel->create($data);
        header('Location: index.php');
    }

    public function delete($id): void {
        $productModel = new Product($this->pdo);
        $productModel->delete($id);
        header('Location: index.php');
    }

    public function update($id, $data): void {
        $productModel = new Product($this->pdo);
        $productModel->update($id, $data);
        header('Location: index.php');
    }

    public function edit($id): void {
        $productModel = new Product($this->pdo);
        $product = $productModel->find($id);
        include './view/edit.php';
    }
}
?>