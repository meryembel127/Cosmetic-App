<?php

class User
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($name, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$name, $email, $hashedPassword]);
    }
    public function getById($id)
    {
        $query = "SELECT id, name, email FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getByEmail($email)
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $email)
    {
        $query = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$name, $email, $id]);
    }
    public function delete($id)
    {
        $query = "DELETE FROM users WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
    public function getAll()
    {
        $query = "SELECT id, name, email FROM users";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

