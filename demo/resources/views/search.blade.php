
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
             
         
        <h3>Result for Products</h3>
                    @foreach($product as $item)
                            <div class="search-item">
                            <a href="detail/{{$item['id']}}">
                                <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="">
                                    <h2>{{$item['name']}}</h2>
                                    <h5>{{$item['description']}}</h5>
                                    <p></p>
                                </div>
                            </a>
                                
                            </div>   
                     @endforeach
       

               
            </div>

   
    @endsection

