<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
        {{ $page_title }}
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">STUDENT MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.create') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Enrollments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row gx-2">
            <div class="col-sm-8 mx-auto bg-secondary">
                <div class="row">
                    <div class="col-sm-12 my-3">
                        <h3 class="h3">Add student</h3>
                        <h5 class="text-success bg-light">
                            @if(session()->has('success'))
                            {{session('success')}}
                            @endif
                        </h5>
                        <h5 class="text-danger bg-light">
                            @if(session()->has('error'))
                            {{session('error')}}
                            @endif
                        </h5>
                    </div>
                </div>
                <form action="{{route('student.store')}}" method="POST" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <div class="input-group my-3">
                                <label for="name" class="label">Student name</label>
                                <input class="form-control form-control-lg" type="text" name="name" placeholder="eg. John Doe">
                            </div>
                            <div class="input-group my-3">
                                <label for="age" class="label">Age</label>
                                <input class="form-control form-control-lg" type="number" name="age" placeholder="eg. John Doe">
                            </div>
                            <div class="input-group my-3">
                                <label for="name" class="label">Gender</label>
                                <select name="gender" id="gender" class="form-select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="input-group my-3">
                                <label for="number" class="label">Student Number</label>
                                <input class="form-control form-control-lg" type="text" name="number" placeholder="NIT/BIT/2019/001">
                            </div>
                            <div class="input-group my-3">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
