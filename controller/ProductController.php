<?php
require_once './models/Product.php'; 

class ProductsController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index(): void {
        $productModel = new Product($this->pdo);
        $products = $productModel->getAll();
        include './view/home.php';
    }

    public function products(): void {
        include './view/products.php';
    }

    public function contact(): void {
        include './view/contact.php';
    }

    public function store($data): void {
        $productModel = new Product($this->pdo);
        $productModel->create($data);
        header('Location: index.php');
        exit;
    }

    public function delete($id): void {
        $productModel = new Product($this->pdo);
        $productModel->delete($id);
        header('Location: index.php');
        exit;
    }

    public function update($id, $data): void {
        $productModel = new Product($this->pdo);
        $productModel->update($id, $data);
        header('Location: index.php');
        exit;
    }

    public function edit($id): void {
        $productModel = new Product($this->pdo);
        $product = $productModel->find($id);
        include './view/edit.php';
    }
}
?>

