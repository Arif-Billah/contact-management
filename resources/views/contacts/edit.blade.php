@extends('layouts.app')

@section('content')
    <h1>Edit a Contact</h1>
    <form 
	    method="POST"
		action="{{ route('contacts.update', ['id' => $contact->id]) }}"
		enctype="multipart/form-data">
	
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Id</label>
            <input class="form-control" type="text" name="id" value="{{ old('id') ?? $contact->id }}" required>
        </div>
        <div class="form-row">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') ?? $contact->name }}" required>
        </div>
        <div class="form-row">
            <label>Email</label>
            <input class="form-control" type="text"  name="email" value="{{ old('email') ?? $contact->email }}" required>
        </div>
        <div class="form-row">
            <label>Phone</label>
            <input class="form-control" type="text"  name="phone" value="{{ old('phone') ?? $contact->phone }}" required>
        </div>
        <div class="form-row">
            <label>Address</label>
            <input class="form-control" type="text"  name="address" value="{{ old('address') ?? $contact->address }}" required>
        </div>
		
        <div class="form-row">
            <button class="btn btn-primary btn-lg mt-3" type="submit">Update Contact</button>
        </div>
    </form>
@endsection
