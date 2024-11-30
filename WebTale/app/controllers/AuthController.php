<?php
class AuthController extends Controller {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $userModel = new UserModel();
            if ($userModel->register($email, $password)) {
                echo "Registration successful!";
            } else {
                echo "Registration failed!";
            }
        }
        
        $this->view('register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $userModel = new UserModel();
            $user = $userModel->login($email, $password);
    
            if ($user) {
                $_SESSION['user_id'] = $user['id']; // store user session
                header('Location: /homepage');
                exit();
            } else {
                echo "Invalid login credentials.";
            }
        }
        $this->view('login');
    }    


    public function logout() {
        
        // Destroy all session data
        session_unset();
        session_destroy();
        
        // Redirect to the homepage or login page
        header('Location: /login'); // or your desired redirect path
        exit();
    }
}