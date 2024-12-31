
@extends('master')

    @section("content")
 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail</title>
        <link rel="stylesheet" href="{{asset('css/css.css')}}">
    </head>
    <body>
        
    </body>
    </html>
        <div class="container">
           <div class="row">
    <h4>My Orders</h4>
                <div class="col-sm-6">
                
                @foreach($myorder as $item)
                    <div class="cart" style="width:100px; margin-left:30%">
                    <br><br>
                         <img class="detail-img"  src="{{$item->gallery}}" alt="">
                        
                    </div>
                   
                @endforeach
                </div>  

                <div class="col-sm-6 ">
                   @foreach($myorder as $item)
           
                        <div class="cart">
                            <h2>Name : {{$item->name}}</h2>
                            <h5>Delivery Status :--> {{$item->status}}</h5>
                            <h5>Address :--> {{$item->address}}</h5>
                            <h5>Payment Status :--> {{$item->payment_status}}</h5>
                            <h5>Payment Method :--> {{$item->payment_method}}</h5>
                            <h5 class="text-danger">Price: {{$item->price}}</h5>
                            <br><br>
                        
                         </div>
                        @endforeach
                                          
           </div>
         
        </div>
   
    @endsection

   