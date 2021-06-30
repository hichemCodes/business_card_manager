@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form style = "width :300px"  method="POST"   action="{{ route('edit-profile',[$profile->id]) }}">
             {{ method_field('PUT') }}
             {{ csrf_field() }}
            <h3 class="text-center mb-5 mt-4">My Informations</h3>
            <!-- 2 column grid layout with text inputs for the first and last names -->
        
            <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example1">Name *</label>
                <input type="text" id="form6Example1"   name = "name" class="form-control" value="{{ $profile->name }}" required />
            </div>


            <!-- Text input -->
            <div class="form-outline mb-4">
                 <label class="form-label" for="form6Example3" name="company_name" >Company name</label>
                <input type="text" id="form6Example3" class="form-control" name="company_name" value="{{ $profile->company_name }}"/>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
               
                <label class="form-label" for="form6Example5" >Email</label>
                <input type="text" id="form6Example5" name="emails" class="form-control" value="{{ $profile->emails }}" />
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Phone</label>
                <input type="text" id="form6Example6" class="form-control" name="phone_number" value="{{ $profile->phone_number }}"/>
            </div>
        
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Save
            </button>
        </form>
    </div>
</div>
@endsection
