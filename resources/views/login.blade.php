@extends('master')

@section('content')
<div class="container  custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1" >Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>

@endsection
