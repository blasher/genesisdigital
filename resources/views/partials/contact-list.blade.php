<div class="panel-body">
     <table class="table">
     <thead>
         <th>Surname</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Actions</th>
     </thead>
     @foreach($contacts as $contact)
     <tr>
         <td>{{ $contact->surname }}</td>
         <td>{{ $contact->name }}</td>
         <td>{{ $contact->email }}</td>
         <td>{{ $contact->phone }}</td>
         <td>
            <a href="#edit">Edit</a>
            <a href="#delete">Delete</a>
         </td>
     </tr>
     @endforeach

     </table>
</div>
