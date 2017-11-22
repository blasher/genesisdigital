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
                         <button type="button" class="btn" data-toggle="modal" data-target="#modalContactAdd">Add Contact</button>
                     </div>

                    <div class="col-md-6">
                       <form class="form-inline" method="GET" action="">
                           {{ csrf_field() }}

                           <input id="search" type="search" class="form-control" name="search" value="{{ old('search') }}" required autofocus>
                           <button class="btn">Search</button>
                       </form>
                     </div>
                </div>

                @include('partials.errors')

                <div class="panel-body">
                     <table class="table">
                     <thead>
                         <th>Surname</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                     </thead>
                     @foreach($contacts as $contact)
                     <tr>
                         <td>{{ $contact->surname }}</td>
                         <td>{{ $contact->name }}</td>
                         <td>{{ $contact->email }}</td>
                         <td>{{ $contact->phone }}</td>
                     </tr>
                     @endforeach

                     </table>
                </div>
    
                @include('modals.contact-add')
		
            </div>
        </div>
    </div>
</div>
@endsection
