@extends ('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">

  <form method="POST" action="/login">

  {{ csrf_field() }}

    <div class="form-group">
     <label for="email">email</label>
      <input type="text" class="form-control" id="email" name="email" >
    </div>
    <div class="form-group">
     <label for="password">password </label>
      <input type="password"  class="form-control" id="password" name="password" >
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>

    @include ('layouts.errors')

  </form>

</div>

@endsection