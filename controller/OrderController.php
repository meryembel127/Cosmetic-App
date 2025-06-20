<?php
class OrderController {
    private $orderModel;

    public function __construct($orderModel) {
        $this->orderModel = $orderModel;
    }
    public function index() {
        $orders = $this->orderModel->getAllOrders();
        require 'views/orders/index.php';
    }
    public function show($id) {
        $order = $this->orderModel->getOrderById($id);
        if (!$order) {
            echo "Order not found!";
            return;
        }
        require 'views/orders/show.php';
    }
    public function create() {
        require 'views/orders/create.php';
    }
    public function store($data) {
        if (empty($data['customer_name']) || empty($data['product_id'])) {
            echo "Please fill all required fields";
            return;
        }

        $this->orderModel->createOrder($data);
        header('Location: /orders');
        exit;
    }
    public function edit($id) {
        $order = $this->orderModel->getOrderById($id);
        if (!$order) {
            echo "Order not found!";
            return;
        }
        require 'views/orders/edit.php';
    }
    public function update($id, $data) {
        $order = $this->orderModel->getOrderById($id);
        if (!$order) {
            echo "Order not found!";
            return;
        }
        $this->orderModel->updateOrder($id, $data);
        header('Location: /orders');
        exit;
    }
    public function delete($id) {
        $this->orderModel->deleteOrder($id);
        header('Location: /orders');
        exit;
    }
}
