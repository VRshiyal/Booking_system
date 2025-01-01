
@extends('master')

    @section("content")
   
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>search</title>
        <link rel="stylesheet" href="{{asset('css/css.css')}}">
    </head>
    <body>
        
    </body>
    </html>
        <div class=" custom-product">
             
         
                    @foreach($product as $item)
                            <div class="search-item">
                            <a href="detail/{{$item['name']}}">
                                <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="">
                                    <h2>Name:-{{$item['name']}}</h2>
                                    <h2>Address:-{{$item['description']}}</h2>
                                    <h2>Date:-{{$item['price']}}</h2>
                                    <h2>Location:-{{$item['category']}}</h2>
                                    <p></p>
                                </div>
                            </a>
                                
                            

                            </div>   
                     @endforeach
       

               
            </div>

   
    @endsection

