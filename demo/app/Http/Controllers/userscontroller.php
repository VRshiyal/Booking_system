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


class userscontroller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function user()
    {
        return view('adminindex');
    }

    public function usershow()
    {
        return view('admin');
    }

//     public function product()
//      {
//        // return"product";
//            $data= product::all();
//           return view('product',['products'=>$data]);
//    }

    public function sigdata(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
           // 'phone' => 'required|numeric|min:8|max:11',
            'password'=>'required|required',
        ]);
        $data= new user();
            
        $data->name=$req->name;
        $data->email=$req->email;
       // $data->mobile=$req->mobile;
        $data->password=Hash::make($req->password);
        
        
        $data->save();
      
        return redirect('home');
    }

    public function logindata(Request $req)
     {
        
        $data=$req->input('email');
        
            $email= $req->get('email');
            $pass=$req->get('password');

        if($data)
        {
            
                $req->session()->put('email',$data);
                echo session('email');
                return redirect('/product');
          
        }
        else
        {
            
            echo"<script>alert('UserName OR Password Dos Not Match')</script>";
        }
      
         
    //  $data=$req->all();
        //  $email= $req->get('email');
        // $pass=$req->get('password');
    //     $data=$req->input('email');
        
    //         $email= $req->get('email');
    //         $pass=$req->get('password');

    //      $data= user::where('email','=',$req->email)->first();
        
    //    if($data)
    //    {
        
    //     if(Hash::check($req->password,$data->password))
    //      {
    //       // $req->session()->get('email',$data['email']);
    //      //  $req->session()->get('id');
         
    //             $req->session()->put('email',$data);
    //           //  echo session('email');

    //       //  $req->session()->get('email',$data);

    //       // echo $data->email;
    //     //    echo $data->id;
           
    //         // echo"<pre>";
    //         // print_r($data);
    //         // echo"</pre>";
    //       return redirect('/product');
    //      }
    //   else
    //     {
    //              echo"<script>alert('UserName OR Password Dos Not Match')</script>";
    //     }
            
        
    // }
    // else
    // {
    //         echo"<script>alert('UserName OR Password Dos Not Match && Place Registration ')</script>";
    // }
       
}

public function adminlogin(Request $req)
{
    return view('/adminlogin');
    
    

}

    

    public function logout()
    {
        if(session()->has('email'))
        {
            session()->pull('email');
        }
        
       return redirect('home');
    //     if(session::has('loginid'))
    //     {
    //         session::pull('loginid');
    //         return redirect('/home');
    //     }
     }
     public function adminuser()
     {
      
         $data = user::all();
         return view('adminuser',['adminuser'=>$data]);
 
        
    }
  
}
