@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  @yield('title') </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="container d-flex flex-row justify-content-between align-items-center">
                        <button type="button" class="btn btn-info btn-lg">
                            <a href="/me" class="text-decoration-none text-white">My Personal Informations </a>
                        </button>
                        <button type="button" class="btn btn-secondary btn-lg">
                            <a href="/my-labriry" class="text-decoration-none text-white">Manage BUSINESS CARDS</a>
                        </button>
                        
                   </div>
                   <div class="container d-flex flex-row justify-content-center align-items-center mt-4">
                        <button type="button" class="btn btn-secondary btn-lg">
                                    <a href="/card-excgange" class="text-decoration-none text-white">BUSINESS CARD EXCHANGE</a>
                        </button> 
                   </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
