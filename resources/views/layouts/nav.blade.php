  <div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link" href="/">Home</a>

        @if (Auth::check())

          <a class="nav-link" href="/posts/create">Nieuwe post</a>

          <a class="nav-link ml-auto">{{ Auth::user()->name }}</a>

          <a class="nav-link ml-1" href="/logout">Uitloggen</a>

          @else 

            <a class="nav-link ml-auto" href="/login">Inloggen</a>

        @endif

      </nav>
    </div>
  </div>