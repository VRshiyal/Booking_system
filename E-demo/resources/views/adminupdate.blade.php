<meta name="robots" content="noindex, follow">
<script nonce="ee6ded15-38e6-454e-a203-2fe995ba8f3e">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="container-contact100">
<div class="wrap-contact100">

<form action="/edit" methode="POST" class="contact100-form validate-form">
@csrf
<span class="contact100-form-title">
Booking_System!
</span>
@extends('adminmaster')

    @section("content")
  
   
 <!DOCTYPE html>
<html lang="en">
<head>
<title>Contact </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/admin.css')}}">




<div class="wrap-input100 validate-input" data-validate="Name is required">
	<span class=" name">Your Name</span>
	<input type="hidden" name="id" value="{{$data['id']}}" id="">
	<input class="input100" type="text" value="{{$data['name']}}" name="name" placeholder="Enter your name">
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
	<span class="email">Date</span>
	<input class="input100" type="text" value="{{$data['price']}}"  name="price" placeholder="Enter your Date">
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 input100-select">
	<span class="need">Location</span>
	<div>
	<input class="input100" type="text" value="{{$data['category']}}"  name="category" placeholder="Enter your Location">
	</div>
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 input100-select">
	<span class="need">Curent_Address</span>
	<div>
	<input class="input100" type="text" value="{{$data['description']}}"  name="description" placeholder="Enter your Address">
	</div>
	<span class="focus-input100"></span>
</div>

	<div class="wrap-input100 validate-input" data-validate="Message is required">
	<span class="need">gallery</span>
	<input type="text" class="input100" value="{{$data['gallery']}}"  name="gallery" placeholder="Your image Url Enter..">
	<span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
<div class="wrap-contact100-form-btn">
<div class="contact100-form-bgbtn"></div>
<button class="contact100-form-btn">
<span>
Update_Record

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

    
    @endsection

