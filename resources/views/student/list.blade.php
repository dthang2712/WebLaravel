<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student manage</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  
  <h1>List student</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Fullname</th>
        <th scope="col">Birthday</th>
        <th scope="col">Address</th>
        
        <th scope="col">Action edit</th>
        <th scope="col">Action detail</th>

      </tr>
    </thead>
    
    <tbody>
      @if (count($students) <= 0)
      @else
          @foreach($students as $student)
              <tr>
                  <th>{{$student->id}}</th>
                  <th>{{$student->fullname}}</th>
                  <th>{{$student->birthday}}</th>
                  <th>{{$student->address}}</th>

                  <th><button ><a href="/edit-student/{{$student->id}}">edit</a></button></th></button></th>
                  <th><button>
                  <a href="/student/{{$student->id}}">detail</a></button></th>
              </tr> 
             
          @endforeach  
      @endif
      </tbody>
  </table>
</body>
</html>
