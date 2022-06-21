{{Session::get('msg')}}
<form action="" method="post">
    {{@csrf_field()}}
    <input type="text" name="uname" placeholder="username"></br>
    @error('uname')
        {{$message}} <br>
    @enderror
    <input type="password" name="pass" placeholder="Password"></br>
    <input type="submit" value="login">
</form>