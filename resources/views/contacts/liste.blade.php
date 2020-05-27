@extends('layouts.layout')
@section('pag_contactliste')  

<div class="container">
<div class="row justify-content-center ">
<div class="col-8 sm lg  "><h1>Liste des Contacts</h1></div>
 <div class="col-10 align-items-center">

 
 <table class="table table-bordered">

       <tr class=" bg-success">
           <th>#</th>          <th>id</th>  <th>NOM</th>    
           
                  <th>EMAIL</th> <th>object</th> <th>Message</th>
       </tr>
       
       @foreach($contacts as $Contact)
   <tr>
       <td>#</td>
       <td>{{$Contact->id ?? ''}}</td>
       <td>{{$Contact->name ?? ''}}</td>
       <td>{{$Contact->email ??''}} </td>
       <td>{{$Contact->subject ?? ''}} </td>
       <td>{{$Contact->message ?? ''}} </td>
       
    </tr>   
      @endforeach 
      
        
   </table>    
</div>        
</div>        
</div>  
 
@endsection     