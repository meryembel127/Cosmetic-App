<?php

require_once 'models/User.php';

class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new User($db);
    }
    public function index()
    {
        $users = $this->userModel->getAll();
        echo json_encode($users);
    }
    public function show($id)
    {
        $user = $this->userModel->getById($id);
        echo json_encode($user);
    }
    public function store($data)
    {
        if (isset($data['name'], $data['email'], $data['password'])) {
            $result = $this->userModel->create($data['name'], $data['email'], $data['password']);
            echo json_encode(['success' => $result]);
        } else {
            echo json_encode(['error' => 'Missing required fields']);
        }
    }
    public function update($id, $data)
    {
        if (isset($data['name'], $data['email'])) {
            $result = $this->userModel->update($id, $data['name'], $data['email']);
            echo json_encode(['success' => $result]);
        } else {
            echo json_encode(['error' => 'Missing required fields']);
        }
    }
    public function destroy($id)
    {
        $result = $this->userModel->delete($id);
        echo json_encode(['success' => $result]);
    }
    public function login($data)
    {
        if (isset($data['email'], $data['password'])) {
            $user = $this->userModel->getByEmail($data['email']);
            if ($user && password_verify($data['password'], $user['password'])) {
                unset($user['password']);
                echo json_encode(['success' => true, 'user' => $user]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
            }
        } else {
            echo json_encode(['error' => 'Email and password are required']);
        }
    }
}
