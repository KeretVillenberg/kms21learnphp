<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function loginForm()
    {
        //var_dump(time());
        //setcookie('mycookie', 'some value here', time()+60*60*24*30,'','',true, true);
        //var_dump($_COOKIE);
        //session_start();
        //$_SESSION['secret']='shh its a secret';
        //var_dump($_SESSION);

        view('auth/login');
    }
    public function registerForm()
    {
        view('auth/register');
    }

    public function register()
    {
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        header('Location: /login');
    }
    public function login()
    {
        $user = User::where('email', $_POST['email']);
        if (isset($user[0])) {
            $user = $user[0];
            if (password_verify($_POST['password'], $user->password)) {
                $_SESSION['userid'] = $user->id;
                header('Location: /');
            } else {
                header('Location: /login');
            }
        } else {
            header('Location: /login');
        }
       
    }
}
