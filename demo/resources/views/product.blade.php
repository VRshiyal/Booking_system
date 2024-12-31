
@extends('master')

    @section("content")
    <html lang="en">
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="{{asset('css/css.css')}}">

        
             <meta name="Keywords" content="HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website">
            <meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.">
            <meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
            <meta property="og:image:type" content="image/png">
            <meta property="og:image:width" content="436">
            <meta property="og:image:height" content="228">
            <meta property="og:description" content="W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.">
            <link rel="icon" href="https://www.w3schools.com/favicon.ico">
            <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
            <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#04aa6d">
            <meta name="msapplication-TileColor" content="#00a300">
            <meta name="theme-color" content="#ffffff">
            <link rel="preload" href="/lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin> 
            <link rel="preload" href="/lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
            <link rel="preload" href="/lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin> 
            <link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin> 
            <link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="preload" href="/lib/fonts/SourceSansPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
            <link rel="preload" href="/lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin> 
            <link rel="stylesheet" href="/lib/topnav/main.css?v=1.0.28">
            <link rel="stylesheet" href="/lib/w3schools32.css?v=1.0.1">

                    
    </head>
</html>
     
          
     
    
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
        <div class=" custom-product">
             
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                <img  src="https://m.media-amazon.com/images/I/41QpoF10+EL._SY300_SX300_.jpg" alt="Los Angeles">
                 </div>
          
                <div class="item">
                <img src="https://5.imimg.com/data5/SELLER/Default/2021/1/LE/SM/PY/26041408/whirlpool-245-l-2-star-frost-free-double-door-refrigerator-500x500.jpg">
                </div>

                <div class="item">
                <img src="https://assets0.mirraw.com/images/11898397/3170565_long_webp.webp?1695802136">
                </div> 

            </div>


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

            <div class="trending">
        
                <h3>Trending Products</h3>
                    @foreach($products as $item)
                            <div class="trending-item">
                            <a href="detail/{{$item['id']}}">
                                <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="">
                                    <h3>{{$item['name']}}</h3>
                                    <p></p>
                                </div>
                            </a>
                                
                            </div>   
                     @endforeach
             
        </div>

     
</div>

    @endsection

    <!--@foreach($products as $item)
                            <div class="item {{$item['id']==1?'active':''}}">
                                <img src="{{$item['gallery']}}" >
                                <div class="carousel-caption">
                                    <h3>{{$item['name']}}</h3>
                                    <p>{{$item['description']}}</p>
                                </div>
                            @endforeach
