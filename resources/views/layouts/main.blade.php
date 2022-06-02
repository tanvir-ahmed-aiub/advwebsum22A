<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div>
        <a href="/">Home</a>
        <a href="/welcome">Welcome</a>
        <a href="{{route('student.list')}}">List</a>
        <a href="{{route('student.create')}}">Create Student</a>

        </div>
        @yield('content')
    </body>
</html>