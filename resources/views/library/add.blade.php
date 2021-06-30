@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form style = "width :300px"  method="POST"   action="{{ route('store-card') }}">
             {{ method_field('POST') }}
             {{ csrf_field() }}
            <h3 class="text-center mb-5 mt-4">Create A New Card</h3>
            <!-- 2 column grid layout with text inputs for the first and last names -->
        
            <div class="form-outline  mb-4">
                <label class="form-label" for="form6Example1">Name </label>
                <input type="text" id="form6Example1"   name = "name" class="form-control"  />
            </div>


            <!-- Text input -->
            <div class="form-outline mb-4">
                 <label class="form-label" for="form6Example3" name="company_name" >Company name</label>
                <input type="text" id="form6Example3" class="form-control" name="company_name" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
               
                <label class="form-label" for="form6Example5" >Email *</label>
                <input type="text" id="form6Example5" name="emails" class="form-control" required/>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Phone</label>
                <input type="text" id="form6Example6" class="form-control" name="phone_number" />
            </div>
        
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Save
            </button>
        </form>
    </div>
</div>
@endsection
