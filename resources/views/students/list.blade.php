@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
        </tr>
        @foreach($students as $s)
            <tr>
                <td><a href="{{route('student.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
                <td>{{$s->id}}</td>
                <td>{{$s->dob}}</td>
            </tr>
        @endforeach
    </table>
@endsection