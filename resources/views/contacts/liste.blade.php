<div class="container">
<div class="row justify-content-center ">
<div class="col-8 sm lg  "><h1>Liste des contacts</h1></div>
 <div class="col-10 align-items-center">
 <table class="table table-striped">
       <tr class=" bg-success">
           <th>#</th>          <th>id</th>  <th>NOM</th>    
           
                  <th>EMAIL</th> <th>object</th> <th>Message</th>
       </tr>
       
       @foreach($Contacts as $contact)
   <tr>
       <td>#</td>
       <td>{{$contact->id ?? ''}}</td>
       <td>{{$contact->name ?? ''}}</td>
       <td>{{$contact->email ??''}} </td>
       <td>{{$contact->object ?? ''}} </td>
       <td>{{$contact->message ?? ''}} </td>
       
    </tr>   
      @endforeach 
      
        
   </table>    
</div>        
</div>        
</div>        