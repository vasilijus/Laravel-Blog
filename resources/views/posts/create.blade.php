@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">

  <form method="POST" action="/posts/create">

  {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>
    <div class="form-group">
     <label for="body">Post</label>
      <textarea class="form-control" id="body" name="body" ></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include ('layouts.errors')

  </form>

  

</div>
@endsection