<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <!-- font family -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,400;1,900&family=Square+Peg&display=swap" rel="stylesheet">
<style>


.navbar{background: #00cd8a;

}
 .nav-link{
    color:white;
}

 .nav-item a:hover {
  background-color: #555;
  color: white;
}

.nav-link {font-family: 'Playfair Display', serif;
}

.card{

display: inline-flex;
}

    </style>

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Back</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/userblog') }}">userblog</a>
        </li>
       
      </ul>
</nav>
</div>

@foreach($users as $blog)  
 
<div class="card" style="width: 18rem;">
  <img src="./images/{{ $blog->bannerimage }}" style="width: 18rem;  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$blog->title}}</h5>
    <h5 class="card-title">{{$blog->description}}</h5>
    <h5 class="card-title">{{$blog->body}}</h5>
    <h5 class="card-title"> created by: {{Auth::user()->name}}</h5>

    

  </div>
</div>



        <!-- <tr border="none">  
            <td> {{ Auth::user()->name }}</td>
            <td>{{$blog->id}} </td>  
            <td>{{$blog->title}}</td>  
            <td>{{$blog->description}}</td>  
            <td><img src="./images/{{ $blog->bannerimage }}" style="width: 49px;"> </td>  
            <td>{{$blog->body}}</td>  
            <td><a href="/delete/{{$blog->id}}" class="btn btn-danger">delete</a></td>
			<td><a href="/edit/{{$blog->id}}" class="btn btn-success">edit</a></td>
         </tr>   -->
@endforeach  
</body>
</html>