
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

                <div class="col-sm-6">
                
                @foreach($product as $item)
                    <div class="cart" style="width:100px; margin-left:30%">
                    <br><br>
                         <img class="detail-img"  src="{{$item->gallery}}" alt="">
                        
                    </div>
                   
                @endforeach
                </div>  

                <div class="col-sm-6 ">
                   @foreach($product as $item)
           
                        <div class="cart">
                            <h2>{{$item->name}}</h2>
                            <h3 class="text-danger">Date: {{$item->price}}</h3>
                            <h4 class="text-primary">Address: {{$item->description}}</h4>
                            <h4>Location: {{$item->category}}</h4>
                            <a href="/remove/{{$item->cart_id}}" type="submit" class="btn btn-warning" name="remove">Remove_Booking</a>
                            <br><br>
                            <a href="/order" type="submit" class="btn btn-primary" name="order">Booking</a>
                          
                         </div>
                        @endforeach
                                          
           </div>
         
        </div>
   
    @endsection

   