<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/">Home</a>
          <a class="blog-nav-item" href="/posts/create">Create Post</a>
          <a class="blog-nav-item" href="#"></a>

          @if (Auth::check())
            <a class="blog-nav-item" href="#">{{ Auth::user()->name }}</a>
            <a class="blog-nav-item" href="/logout">Logout</a>
          @else
            <a class="blog-nav-item" href="/login">Login</a>
            <a class="blog-nav-item" href="/register">Register</a>
          @endif

        </nav>
      </div>
    </div>