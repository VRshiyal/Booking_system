<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\models\user;
use App\models\order;

use App\models\cart;
use App\models\product;
use Illuminate\support\Facades\DB;

use Illuminate\support\Facades\Hash;


class productcontroller extends Controller
{

    public function id($id)
    {
        $data= user::find($id);
        return view('product',['user'=>$data]);
    }

    public function adminproduct()
    {

     $data = product::all();
    return view('adminproduct',['products'=>$data]);

    }


   public function index()
    {
        
            // $data= usersmodel::find($id);
            // return view('product',['product'=>$data]);
        
        $data = product::all();
        return view('product',['products'=>$data]);

       
   }
   public function demov()
   { 
    
    $data = product::all();
    return view('index',['product'=>$data]);

   }

    public function salse()
    {
        $data=product::all();
        return view('index',['indexs'=>$data]);
    }

    function detail($id)
    {
        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function admin(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'category'=>'required',
            'description'=>'required',
            'gallery'=>'required',
        ]);
        
        $data= new product();
            
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $data->description=$req->description;
        $data->gallery=$req->gallery;
        
        
        $data->save();
        return redirect('product');
    }

    public function search(Request $req)
    {
       // return $req->input();
        $data= product::where('category', 'like', '%'. $req->input('query') .'%')->
     orwhere('name', 'like', '%'. $req->input('query').'%')->
     orwhere('price', 'like', '%'. $req->input('query') .'%')->get();
     return view('search',['product'=>$data]);

    //    // Get search query from request
    //    $search = $request->input('search');
        
    //    // Start building the query
    //    $query = User::query();

    //    // Check if there's any search term
    //    if ($search) {
    //        $query->where(function ($query) use ($search) {
    //            $query->where('name', 'like', '%' . $search . '%')
    //                  ->orWhere('category', 'like', '%' . $search . '%')
    //                  ->orWhere('created_at', 'like', '%' . $search . '%');
    //        });
    //    }

    //    // Execute the query and get results
    //    $users = $query->get();

    //    // Return the view or data
    //    return view('search', compact('users'));

    }



    public function addcart(Request $req)
     {

       

        if($req->session()->has('email'))
         {
    
            // echo"</pre>";
            $cart=new cart();
            $cart->user_id=$req->session()->get('email');
            $cart->product_id=$req->product_id;
            $cart->save();
       
            return redirect('product');
        }
        else
         {// echo"<pre>";
        //     print_r($req);
        //     echo"</pre>";
            return redirect('home');
            
        }
  
    }

    static function cart()
    {
        $userid=session::get('email');
        return cart::where('user_id',$userid)->count();
        
    }
//join
    public function cartlink()
    {
        $userid=session::get('email');
        $product= DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$userid)
        ->select('product.*','cart.id as cart_id')
        ->get();

           // return $product;
       return view('cartlink',['product'=>$product]);
    }
//=============== delete recorde ===============
    public function remove($id)
    {
            cart::destroy($id);
            return redirect('/cartlink');
    }

    public function userdelete($id)
    {
        
        user::destroy($id);
        return redirect('/adminuser');
    }
    public function admindelete($id)
    {
        
        product::destroy($id);
        return redirect('/adminproduct');
    }

    public function adminupdate($id)
    {
      $data=  product::find($id);
      return view('/adminupdate',['data'=>$data]);
      
      echo"<pre>";
      print_r($data );
      echo"</pre>";
      
    }

    
    public function admin_user_u($id)
    {
      $data=  user::find($id);
      return view('/admin_user_u',['data'=>$data]);
      
    }

    public function edit(Request $req)
    {
       // return $req->input();
        
      $data=  product::find($req->id);

      $data->name=$req->name;
      $data->price=$req->price;
      $data->category=$req->category;
      $data->description=$req->description;
      $data->gallery=$req->gallery;
      
      
      $data->save();
      return redirect('adminproduct');
      

    }


    public function order()
    {
        $userid=session::get('email');
      $total=   $product= DB::table('cart')
        ->join('product','cart.product_id','=','product.id')
        ->where('cart.user_id',$userid)
        ->sum('product.price');

        
       return view('order',['order'=>$total]);
    }
//============ order table =================
    public function orderplace(Request $req)
    {
        $req->validate([
            'address'=>'required',
            'phone'=>'digits:10',
        ]);
        
        $userid=session::get('email');
         $order= cart::where('user_id',$userid)->get();

         foreach($order as $item)
         {
                $order=new order();
                $order->product_id=$item['product_id'];
                $order->user_id=$item['user_id'];
                $order->status="pending";
                $order->payment_method=$req->payment;
                $order->payment_status="pending";
                $order->address=$req->address;
                $order->phone=$req->phone;
                $order->save();
                cart::where('user_id',$userid)->delete();

         }
         $req->input();
         return redirect('/product');
    }

    public function myorder()
    {
        
        $userid=session::get('email');
       $myorder= DB::table('order')
        ->join('product','order.product_id','=','product.id')
        ->where('order.user_id',$userid)
        ->get();

        
       return view('myorder',['myorder'=>$myorder]);

    }

    public function demo(Request $req)
    {
     
        $email= $req->get('email');
       $pass=$req->get('password');

        $data= user::where('email',$email)->first();
       
      
       
       if(Hash::check($pass,$data->password))
        {
           echo $data->email;
           echo $data->id;
           return redirect('product');
       }
       else
       {
           echo ('not');
       }
    }
}
