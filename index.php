<?php
require_once './models/config/conn.php'; 
require_once './controller/ProductsController.php';

$controller = new ProductsController($pdo);
$controller->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $controller->store($_POST);
    } elseif (isset($_POST['update'])) {
        $controller->update($_POST['id'], $_POST);
    }
} elseif (isset($_GET['delete'])) {
    $controller->delete($_GET['delete']);
} elseif (isset($_GET['edit'])) {
    $controller->edit($_GET['edit']);
} else {
    $controller->index();
}
?>
