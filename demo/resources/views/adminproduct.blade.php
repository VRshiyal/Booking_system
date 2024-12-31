
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
   
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">category</th>
      <th scope="col">description</th>
     
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($products as $item) 
    <tr>      
                <div class="item {{$item['id']==1?'active':''}}">
                    
                  <div class="carousel-caption slider-text">
                       
                        <td>{{$item['name']}}</td>
                        <td>{{$item['price']}}</td>
                        <td>{{$item['category']}}</td>
                        <td>{{$item['description']}}</td>
                        
                      <td>  <a href="adminupdate/{{$item->id}}">Update</a>
                     <button type="submit" name="delete" class="btn btn-danger"><a href="/admindelete/{{$item->id}}">Delete</a></button> </td>
                  </div>
                </div>
                </tr>
                 
                 @endforeach
 
  </tbody>
</table>

 </html> 
   
    @endsection

