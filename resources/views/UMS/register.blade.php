<h4>{{Session::get('msg')}}</h4>
<form action="" method="post" enctype="multipart/form-data">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Dob :<input type="date" name="dob"> </br>
    Password: <input type="password" name="password"></br>
    Confirm Password : <input type="password" name="conf_password"></br>
    @error('conf_password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input type="file" name="pro_pic" >
    @error('pro_pic')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input type="submit" value="Create">
</form>
