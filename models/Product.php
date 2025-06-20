<?php
class Product  {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");
        $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['price']
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE products SET name = :name, price = :price WHERE id = :id");
        $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['price'],
            ':id' => $id
        ]);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>