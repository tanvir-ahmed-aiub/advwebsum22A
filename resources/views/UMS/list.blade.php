
   
    <table border="1">
        <tr>
            <th>Sl#</th>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
        </tr>
        @foreach($students as $s)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><a href="{{route('student.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
                <td>{{$s->id}}</td>
                <td>{{$s->dob}}</td>
                <td><img src="{{asset($s->pro_pic)}}" ></td>
            </tr>
        @endforeach
    </table>
 
