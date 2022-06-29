<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a href="" class="navbar-brand">SMS</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h6>Insert Data</h6>
                        <form action="{{route('store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>naame</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                    @foreach($students as $std)

                    <tr>
                        <td>{{$std->id}}</td>
                        <td>{{$std->name}}</td>
                        <td>{{$std->contact}}</td>
                        <td>{{$std->email}}</td>
                        <td>
                            <a href="{{route('delete',['id'=>$std->id])}}" class="btn btn-danger">X</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>