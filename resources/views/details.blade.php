<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body >
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


<div class="table" style="padding:5vw ; display:flex; justify-content: center;">
<table class="table table-sm w-50"  style=" margin-top-12vw">
  <thead>
    <tr>
      <th scope="col">S No</th>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Age</th>
      <th scope="col">Salary</th>
      <th scope="col">Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <td> {{$loop->index+1}}</td>
      <td> {{$employee->name}}</td>
      <td> {{$employee->work}}</td>
      <td> {{$employee->age}}</td>
      <td> {{$employee->salary}}</td>
      <td> 
        <img src="images/{{$employee->image}}" class="rounded-circle" width="30" height="30" />
      </td>
      <td style="display:flex;"> 
         <a href="update/{{$employee->id}}"><button type="button"  class="btn btn-primary btn-sm" style=" margin-right: 10px;">EDIT</button></a>
    
      <form method="POST" action="delete/{{$employee->id}}" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-secondary btn-sm"> Delete</button>
        </form>
        <!-- <a href="edit/{{$loop->index+1}}"><button type="button" class="btn btn-secondary btn-sm">Delete</button></a> -->
    
        </td>

    </tr>
   @endforeach
  </tbody>
</table>
</div>




</body>
</html> 