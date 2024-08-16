
    @extends('layouts.app')

     @section('content')
    <h1>List of Contacts</h1>
   

    <a class="btn btn-success mb-3" href="{{ route('contacts.create') }}">Create</a>

    @empty ($contacts)
        <div class="alert alert-warning">
            The list of contact is empty
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date</th>

                </thead>
                <tbody>
                     @foreach ($contacts as $contact) 
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->address }}</td>
                            <td>{{ $contact->created_at }}</td>
                            
                            <td>
                                <a class="btn btn-link" href="{{ route('contacts.show', ['id' => $contact->id]) }}">Show</a>
                                <a class="btn btn-link" href="{{ route('contacts.edit', ['id' => $contact->id]) }}">Edit</a>
                                <form class="d-inline" method="POST" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
				
