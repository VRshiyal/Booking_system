
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
                    <img class="detail-img"  src="{{$product['gallery']}}" alt="">
                </div>   
                <div class="col-sm-6">
                    <a href="/product">Go Back</a>
                    <h2>{{$product['name']}}</h2>
                    <h3>Date: {{$product['price']}}</h3>
                    <h4>Address: {{$product['description']}}</h4>
                    <h4>Location: {{$product['category']}}</h4> 
                    <br><br>
                    <form action="/cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}" id="">
                        <button class="btn btn-primary">Booking</button>
                    </form>
                   
                    <br><br>
                </div>
           </div>
         
        </div>
   
    @endsection

   