@extends('layout')
@section('content')
<h1>List</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Dept</th>
    </tr>
    @foreach($students as $s)
        <tr>
            <td><a href="/details/{{$s->id}}/{{$s->name}}">{{$s->name}}</td>
            <td>{{$s->id}}</td>
            <td>{{$s->dept}}</td>
        </tr>
    @endforeach
</table>
@endsection
