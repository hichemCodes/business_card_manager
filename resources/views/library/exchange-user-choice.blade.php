@extends('layouts.app')


@section('content')

@section('title', 'BUSINESS CARD EXCHANGE')

<div class="container">
<div class="comumn justify-content-center align-items-center " style="width:1200px">
        <div class="">
            <div class="card">
                <div class="card-header">  @yield('title') </div>

                <div class="card-body">
                    <div class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 100%;padding: 7px;">
                        <option selected>Select a user to see all his cards </option>
                        @foreach ($users as $user)
                            @if($user->id != Auth::user()->id) 
                               <a href="{{ route('show-user-cards',[$user->id]) }}">  {{$user->name}}</a>
                            @endif
                        @endforeach
                    </div>

                    

                </div>           
        </div>

    </div>

</div>
@endsection
