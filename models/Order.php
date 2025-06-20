<?php

class Order
{
    private $conn;
    private $table = "orders";

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function getAll()
    {
        $query = "SELECT * FROM $this->table ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function getById($id)
    {
        $query = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($user_id, $product_id, $quantity, $total_price)
    {
        $query = "INSERT INTO $this->table (user_id, product_id, quantity, total_price, created_at)
                  VALUES (:user_id, :product_id, :quantity, :total_price, NOW())";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':total_price', $total_price);

        return $stmt->execute();
    }
    public function update($id, $quantity, $total_price)
    {
        $query = "UPDATE $this->table 
                  SET quantity = :quantity, total_price = :total_price
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':total_price', $total_price);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
