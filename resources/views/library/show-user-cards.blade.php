@extends('layouts.app')


@section('content')


<div class="container">
<div class="comumn justify-content-center align-items-center " style="width:1200px">
        <div class="">
            <div class="card">
                <div class="card-header"> {{$user-> name }} Cards</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($libraries) === 0)
                         the selected user has no cards yet !
                    
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Campany Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone number</th>
                                <th scope="col">add to my cards</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($libraries as $library)
                            <tr>
                                <th scope="row">{{ $library->id }}</th>
                                <td>{{ $library->name }}</td>
                                <td>{{ $library->company_name }}</td>
                                <td>{{ $library->emails }}</td>
                                <td>{{ $library->phone_number }}</td>       
                                <td><button type="button" class="btn btn-info">Add</button></td>                             
                            </tr>
                        @endforeach
                            
                            
                        </tbody>
                        </table>
                    @endif
                </div>
            </div>
            <button type="button" class="btn btn-primary float-center mt-2 mr-auto">
                <a href="/create-card" class="text-decoration-none text-white">Create A Busines Card</a>
            </button>

        </div>

    </div>

</div>
@endsection
