<html>
    <head></head>
    <body>
        <div>
        <a href="/">Home</a>
        <a href="/welcome">Welcome</a>
        <a href="{{route('student.list')}}">List</a>

        </div>
        @yield('content')
    </body>
</html>