@extends('layouts.app')

@section('content')
    <h1>List of Contact id {{$contact->id}}</h1>

    @empty ($contact)
        <div class="alert alert-warning">
            The list of contact is empty
        </div>
    @else
	<div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </thead>
                <tbody>
           
                        <tr>
                        	
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->address }}</td>
                           
                            <td>
							<a class="btn btn-link" href="{{ route('contacts.edit', ['id' => $contact->id]) }}">Edit</a>
							
                                <form class="d-inline" method="POST" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                        </tr>
                  
                </tbody>
            </table>
        </div>
		
		
    @endif
@endsection

