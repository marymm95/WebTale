<?php

class UserModel extends Model {
    
    public function register($email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $this->db->table('users')->insert(['email' => $email, 'password' => $hashedPassword]);
    }

    public function login($email, $password) {
        $user = $this->db->table('users')->where('email', $email)->get();
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
