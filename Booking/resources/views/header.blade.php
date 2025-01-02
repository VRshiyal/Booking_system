<?php 
  
use App\Http\Controllers\productcontroller;

use Illuminate\Support\Facades\Session;
//$total=productcontroller::cart();
$total=0;
{{
   if(session('email'))
{
    $total=productcontroller::cart();
}  
}}

?>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="margin-top:15px" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/product"><img width="50" height="50" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/external-home-finance-kiranshastry-gradient-kiranshastry.png" alt="external-home-finance-kiranshastry-gradient-kiranshastry"/> <span class="sr-only">(current)</span></a></li>
        <li><a href="/myorder" style="margin-top:13px" class="bold">Booking</a></li>
        <li class="dropdown">
         
          <ul class="dropdown-menu">
            <li><a href="#">LOGIN</a></li>
            <li><a href="#">REGISTER </a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

      <form action="search" class="navbar-form navbar-left " style="margin-top:20px">
        <div class="form-group">
          <input type="text"  name="query" class="form-control"style="width:500px" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="/logout" style="margin-top:10px"> Logout</a></li>-->
       <li>
      <a href="/cartlink" class="text-dark"  style="margin-top:12px">Order({{$total}})</a>
      </li>
 

      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <h5 style="margin-top:15px" class="text-primary" >{{session::get('email')}}</h5>
            </a>
          <ul class="dropdown-menu">
            <li><a href="/logout">logout</a></li>
          </ul>
        </li>
  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
