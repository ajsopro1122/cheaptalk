@extends('base')

@section('content')

<div class="py-5 container">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header bg-black">
                <h3 class=" text-white title text-center">User Registration</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3" id="input-container">
                        <i class="fa fa-user icon"></i>
                        <input type="text" name="name" id="name" class="form-control text-black input-field" placeholder="Username">
                    </div>
    
                    <div class="mb-3 text-black" id="input-container">
                        <i class="fa fa-user icon"></i>
                        <select name="gender" id="gender" class="form-select text-black input-field">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3 text-black" id="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" name="email" id="email" class="form-control text-black input-field" placeholder="Email">
                    </div>
    
                    <div class="mb-3 text-black" id="input-container">
                        <i class="fa fa-key icon"></i>
                        <input type="password" name="password" id="password" class="form-control text-black input-field" placeholder="Password">
                    </div>
    
                    <button class="btn btn-success form-control" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop