@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Contacts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('success'))
                                    <div class=" alert alert-success form-group" role="alert">
                                       {{Session::get('success')}} 
                                    </div>

                                    @endif


                    @if($contacts->count() > 0)
                            <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone No</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Action</th>

                                                </tr>
                                            </thead>

                                            @foreach($contacts as $contact)
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">{{ $contact->id}}</th>
                                                    <td>{{ $contact->name}}</td>
                                                    <td>{{ $contact->email}}</td>
                                                    <td>{{ $contact->phone}}</td>
                                                    <td>{{ $contact->message}}</td>
                                                    <td><a href="{{ url('/deletecontact', $contact->id) }}" class="btn btn-primary">Delete</a></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            @endforeach
                                        </table>

                            </div>
                    @endif

                        
                            
                            

                   
                </div>
                
            </div>
            {{ $contacts->links() }}
        </div>
       
    </div>
    
</div>
@endsection
