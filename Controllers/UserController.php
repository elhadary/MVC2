<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Models\User;

class UserController extends Controller
{
    public User $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }



    public function dashboard()
    {
        if($this->user->Auth()['rank'] !== 1)
        {

            $this->render->view('User.index');
        }else
        {
            $users = $this->user->select()->fetchAll();
            $count = $this->user->fetchCount;
            $this->render->view('Admin.index',['count' => $count]);
        }

    }
}