<!-- Add Contact Modal -->
<div id="modalContactAdd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Add Contact</h4>
       </div>
     
       <div class="modal-body">
           <form class="form" method="POST" action="/contact/create/">
               {{ csrf_field() }}
	       <div class="form-group">
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                              placeholder="Enter name" value="{{ old('name') }}">
                   </div>
	       </div>

	       <div class="form-group">
                   <div class="form-group">
                       <label for="surname">Surname</label>
                       <input type="text" class="form-control" id="surname" name="surname" aria-describedby="surname"
                              placeholder="Enter surname" value="{{ old('surname') }}">
                   </div>
	       </div>
	       
	       <div class="form-group">
                   <div class="form-group">
                       <label for="email">Email</label>
                       <input type="text" class="form-control" id="email" name="email" aria-describedby="email"
                              placeholder="Enter email" value="{{ old('email') }}">
                   </div>
	       </div>

	       <div class="form-group">
                   <div class="form-group">
                       <label for="phone">Phone</label>
                       <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone"
                              placeholder="Enter phone" value="{{ old('phone') }}">
                   </div>
	       </div>
	       
               <button type="submit" class="btn btn-primary">Submit</button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
           </form>

       </div>
     
       <div class="modal-footer">
       </div>
    </div>

  </div>
</div>
