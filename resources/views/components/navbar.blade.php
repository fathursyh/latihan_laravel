<nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-5">
        <div class="container">
          <a class="navbar-brand" href="/">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('authors') ? 'active' : '' }}" href="/authors">Authors</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
            @auth
             <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle {{ Request::is('*/posts') ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->username }}
              </a>
              <ul class="dropdown-menu">
                <li><a href="/{{ auth()->user()->username }}/posts" class="dropdown-item">My Posts</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
             </li>  
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                  </svg> Login
                </a>
              </li>
              @endauth
            </ul>  
        
          </div>
        </div>
      </nav>