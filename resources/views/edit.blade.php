<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <form method="POST" action="/update/{{$users->id}}">
		@csrf
  <div class="mb-3">
    <h1>Update</h1>
    <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="title"  value="{{$users->title}}">
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" name="description"  value="{{$users->description}}">
  </div>
  <div class=col-md-6">
  <label>Banner Image</label><br>
    <input accept="image/jpeg" type ="file" name="myfile"  value="{{$users->myfile}}">
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Body</label>
    <input type="text" class="form-control" name="body" value="{{$users->body}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>