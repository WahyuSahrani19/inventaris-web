@extends('part.main')
@section('content')
<div class="dropdown-menu">
    <form class="px-4 py-3">
      <div class="mb-3">
        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
      </div>
      <div class="mb-3">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">New around here? Sign up</a>
    <a class="dropdown-item" href="#">Forgot password?</a>
  </div>
@endsection