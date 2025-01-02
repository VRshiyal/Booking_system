

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script>
	$(document).ready(function(){
		$("login").click(function()
		{
			alert("Your Data Is Registration In open Login click");
		})
	})
</script>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="sigdata" method="POST">
					@csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name"  placeholder="User Name" >
					<input type="email" name="email"  placeholder="Enter Your Email" >
					<input type="password" name="password" placeholder="Enter Your Password" >
					<button>Sign up</button>
					
					<a href="/adminlogin">Admin_Login</a>
					
				</form>
			</div>

			<div class="login">
				<form action="/logindata" method="POST">
					 @csrf
					<label for="chk" aria-hidden="true">Login</label>
					
					<input type="email" name="email" placeholder="UserNames" value="{{old('email')}}">
					<input type="password" name="password" value="{{old('password')}}" placeholder="Enter Password" >
					<button type="submit" name="login">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
