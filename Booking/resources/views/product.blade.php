
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

         


       

            <div class="trending">
        
                    @foreach($products as $item)
                            <div class="trending-item">
                            <a href="detail/{{$item['id']}}">
                                <img class="trending-img" src="{{$item['gallery']}}">
                                <div class="">
                                    <h3>{{$item['name']}}</h3>
                                    <p></p>
                                </div>
                           
                           
                                <div class="">
                                    <h3>{{$item['category']}}</h3>
                                    <p></p>
                                </div>

                                <div class="">
                                    <h3>{{$item['price']}}</h3>
                                    <p></p>
                                </div>

                                

                            </a>
                                
                            </div>   
                     @endforeach
             
        </div>



        
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Contact </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/admin.css')}}">


<meta name="robots" content="noindex, follow">
<script nonce="ee6ded15-38e6-454e-a203-2fe995ba8f3e">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="container-contact100">
<div class="wrap-contact100">

<form action="admindata" methode="POST" class="contact100-form validate-form">
@csrf
<span class="contact100-form-title">
Booking_System!
</span>

<div class="wrap-input100 validate-input" data-validate="Name is required">
	<span class=" name">Your Name</span>
	<input class="input100" type="text" name="name" placeholder="Enter your name">
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
	<span class="email">Date</span>
	<input class="input100" type="date" name="price" placeholder="Enter your Date">
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 input100-select">
	<span class="need">Location</span>
	<div>
	<input class="input100" type="text" name="category" placeholder="Enter your Location">
	</div>
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 input100-select">
	<span class="need">Curent_Address</span>
	<div>
	<input class="input100" type="text" name="description" placeholder="Enter your Curent_address">
	</div>
	<span class="focus-input100"></span>
</div>

	<div class="wrap-input100 validate-input" data-validate="Message is required">
	<span class="need">Photos</span>
	<textarea class="input100" name="gallery" placeholder=" Enter Your image Url"></textarea>
	<span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
<div class="wrap-contact100-form-btn">
<div class="contact100-form-bgbtn"></div>
<button class="contact100-form-btn">
<span>
Submit

</span>
</button>
</div>
</div>
</form>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8425446a5c92f30f","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html> 


     
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
