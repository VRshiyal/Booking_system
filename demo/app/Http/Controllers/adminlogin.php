<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
 //use App\models\usersmodel;
use App\models\User;
//use usersmodel;
use App\models\product;

use App\models\admin;
use session;
use Illuminate\support\Facades\Hash;


class adminlogin extends Controller
{
       
    public function admin_login(Request $req)
    {     
          $data=$req->all();
            //  $email= $req->get('email');
            // $pass=$req->get('password');
    
             $data= admin::where('email','=',$req->email)->first();
            
           if($data)
           {
            
            if(Hash::check($req->password,$data->password))
             {
               //$req->session()->get('email',$data['email']);
             //  $req->session()->get('id');
                $req->session()->get('email',$data);

             
          $req->session()->put('email');
         
                // echo"<pre>";
                // print_r($data);
                // echo"</pre>";
             return redirect('/admin');
             }
            else
            {
                echo"<script>alert('UserName OR Password Dos Not Match')</script>";
            }
                
            
        }
        else
        { 
            echo"<script>alert('only_Admin_Is_Login')</script>";
        }
           
    }
}
