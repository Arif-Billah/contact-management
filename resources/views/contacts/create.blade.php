@extends('layouts.app')
@section('content')

    <h1>Create contact</h1>
    <a class="btn btn-success mb-3" href="{{ route('contacts.index') }}">Contact List</a>
    <form 
	   method="POST" 
	   action="{{route('contact.store')}}"
	   enctype="multipart/form-data"
	   >
	 
        @csrf
        <div class="form-row">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" >
        </div>
        <div class="form-row">
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="{{ old('email') }}" >
        </div>
        <div class="form-row">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" >
        </div>
        <div class="form-row">
            <label>Address</label>
            <input class="form-control" type="text" name="address" value="{{ old('address') }}" >
        </div>
      
        <div class="form-row">
            <button class="btn btn-primary btn-lg mt-3" type="submit">Create Contact</button>
        </div>
    </form>

@endsection