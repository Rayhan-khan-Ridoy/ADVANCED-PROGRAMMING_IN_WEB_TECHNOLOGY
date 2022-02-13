@extends('layout')
@section('content')
<p id="name">RAYHAN KHAN RIDOY</p>
<a href="KREDOY416@gmail.com" target="_blank"><p id="email">KREDOY416@gmail.com</p></a>
</div>
<div class="left">
</div>
<div class="right">
       <img style="height:150px;width:130px;"  src="/css/ocean.png" alt="propic">


       <p>
         <table border="1">
             <tr>
                 <th>id</th>
                 <th>name</th>
                 <th>dept</th>
             </tr>
             @foreach($myprofile as $p)
                  <tr>
                      <td>{{$p->id}}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->dept}}</td>
                  </tr>
              @endforeach

         </table>
       </p>
       @endsection
