
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
 
<table class="table">

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>${{$order}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Text</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td> $ 10</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total Amount</td>
      <td> $ {{$order + 10}}</td>
    </tr>
  </tbody>
</table>

<br><br>

<div>
    <form action="/orderplace" method="POST">

    @csrf
    <div class="form-group">
       <textarea class="form-control" type="text" name="address" id="" placeholder="Enter Your Address"></textarea>
       <input type="number" name="phone"  placeholder="enter your Phone_Nomber" class="form-control">
    </div> <br>
    <div class="form-group">
        <label for="exampleInputPassword1">payment Method</label> <br> <br>
            <input type="radio" value="cash" name="payment" id=""> <span>online payment</span> <br><br>
            <input type="radio"  value="cash" name="payment" id=""> <span>EMI payment</span> <br><br>
           <input type="radio"  value="cash" name="payment" id=""> <span>payment on Delivery</span> <br><br>
    </div>

    <button type="submit" class="btn btn-primary border border-warning">Order Now</button> <br><br>
    </form>
</div>
    </body>
    </html>
        
    @endsection

   