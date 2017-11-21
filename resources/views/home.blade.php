@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                       Contacts
		</div>

                <div class="panel-body">
                     <div class="col-md-6">
                         <a href="/contacts/create/">Add Contact</a>
                     </div>
		     
                     <div class="col-md-6">
                       <form class="form-inline" method="GET" action="">
                           {{ csrf_field() }}

                           <input id="search" type="search" class="form-control" name="search" value="{{ old('search') }}" required autofocus>
                           <button class="btn">Search</button>
                       </form>
                     </div>
                </div>
		
            </div>
        </div>
    </div>
</div>
@endsection
