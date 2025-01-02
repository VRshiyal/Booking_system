
@extends('adminmaster')

    @section("content")
    <html lang="en">
    <head>
        <title>user</title>
        
<!-- css files  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
    

    </head>
   
    <table class="table">
  <thead class="thead-dark">

    <tr class="bg-danger text-white">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($adminuser as $item) 
    <tr>      
                <div class="item {{$item['id']==1?'active':''}}">
                    
                    <div class="carousel-caption slider-text">
                          <td>{{$item['id']}}</td>
                          <td>{{$item['name']}}</td>
                          <td>{{$item['email']}}</td>
                          <td>{{$item['password']}}</td>
                        <td><button type="submit" name="update" class="btn btn-sucess"><a  href="/admin_user_u/{{$item->id}}">Update</a> </button>
                      <a href="/userdelete/{{$item->id}}" class="btn bg-danger">delete</a>
                    </td>
                  </div>
                </div>
                </tr>
                 
                 @endforeach
 
  </tbody>
</table>

 </html> 
   
    @endsection

