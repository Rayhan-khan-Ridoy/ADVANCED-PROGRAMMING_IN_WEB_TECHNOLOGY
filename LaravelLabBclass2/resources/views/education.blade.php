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

               <th>year</th>
               <th>degree</th>
              <th>result</th>

             </tr>
             @foreach($education as $p)
                  <tr>
                      <td>{{$p->year}}</td>
                      <td>{{$p->degree}}</td>
                      <td>{{$p->grade}}</td>

                  </tr>
              @endforeach

         </table>
       </p>
       @endsection
