<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        echo view('common/header');
        return view('home');
    }
   public function user_data()
{
    $userModel = new \App\Models\UserModel();  
    $users = $userModel->findAll();

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
          </tr>";

    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['id']}</td>
                <td>{$user['name']}</td>
                <td>{$user['email']}</td>
                <td>{$user['created_at']}</td>
                <td>{$user['updated_at']}</td>
                <td>{$user['deleted_at']}</td>
              </tr>";
    }

    echo "</table>";
}


    public function insert(){
        $userModel = new \App\Models\UserModel();
        $data = [
            'name'=>'Anushka',
            'email'=>'anuria@gmail.com'
        ];
        $r=$userModel->insert($data);

        if($r){
            echo "result inserted";
        } else
            echo "error";
    } 

    public function update(){
    $userModel = new \App\Models\UserModel();

    $data = [
        'name'  => 'Anushka',
        'email' => 'anuria44@gmail.com'
    ];

    $r = $userModel->set($data)->where('id', 1)->update();

    if ($r) {
        echo "result updated";
    } else {
        echo "error";
    }
}

public function delete(){
    $userModel = new \App\Models\UserModel();

       $r = $userModel->delete(1); 

     if ($r) {
        echo "User deleted successfully.";
    } else {
        echo "Failed to delete user.";
    }

}


}
