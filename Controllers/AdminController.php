<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Models\User;

class AdminController extends Controller
{

    public function showUsers()
    {
        $users = new User();
        $users = $users->select()->fetchAll();
        $this->render->view('Admin.users',['users' => $users]);
    }

}