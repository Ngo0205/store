<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{


    public function index()
    {
        return view('login.login');
    }

    public function register()
    {

        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = array();
        }
        if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
            $_SESSION['user']['name'] = $_POST['name'];
            $_SESSION['user']['username'] = $_POST['username'];
            $_SESSION['user']['email'] = $_POST['email'];
            $_SESSION['user']['phone'] = $_POST['phone'];
            $_SESSION['user']['password'] = $_POST['password'];
            Login::create([
                'user_name' => $_SESSION['user']['username'],
                'phone' => $_SESSION['user']['phone'],
                'email' => $_SESSION['user']['email'],
                'password' => $_SESSION['user']['password'],
            ]);
            return redirect('login');

        }


    }

    public function postLogin()
    {
        $name = trim($_POST['username']);
        $password = trim($_POST['password']);
        if (isset($_SESSION['user']) && !isEmpty($_SESSION['user'])) {
            if ($name === $_SESSION['user']['username'] && $password === $_SESSION['user']['password']) {
                return redirect('/');
            }
        } else {
            $inforUser = Login::where('user_name', $name)->first();
            if (strcmp($password, $inforUser->password) === 0) {
                return redirect('/');
            } else {
                return redirect('/login');
            }
        }
    }
}
