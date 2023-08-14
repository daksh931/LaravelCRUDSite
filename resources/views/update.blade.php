<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WELCOME !</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/show">User Details</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<h2>Update details</h2>
<form style="margin: 3vw 10vw; padding: 0px 25vw;" method="POST" enctype="multipart/form-data"  action="/update/{{$employee->id}}">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="{{old('name',$employee->name)}}" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="work" class="form-label">work</label>
    <input type="text" value="{{old('work',$employee->work)}}"name="work" class="form-control" id="work" aria-describedby="emailHelp">
  </div>

  
  <div class="mb-3">
    <label for="age" class="form-label">age</label>
    <input type="number"value="{{old('age',$employee->age)}}"  name="age" class="form-control" id="age" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="salary" class="form-label">salary</label>
    <input type="number" value="{{old('salary',$employee->salary)}}" name="salary" class="form-control" id="salary" aria-describedby="emailHelp">
  </div>
 
  <div class="mb-3">
    <label for="image" class="form-label">Upload</label>
    <input type="file"  name="image" class="form-control" id="image" aria-describedby="emailHelp">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html> 