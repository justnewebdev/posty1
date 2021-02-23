<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Posty</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/secondary.css') }}" rel="stylesheet">

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="{{ asset('js/secondary.js') }}"></script>
  </head>
  <body class="bg-gray-200 text-gray-800">
    <nav class="p-6 bg-white flex justify-between mb-6">
      <ul class="flex items-center">
        <li>
          <a href="{{ route('home') }}" class="p-3">Home</a>
        </li>
        @auth
        <li>
          <a href="{{ route('users.posts', auth()->user()) }}" class="p-3">Dashboard</a>
        </li>
        @endauth
        <li>
          <a href="{{ route('posts') }}" class="p-3">Post</a>
        </li>
      </ul>
      <ul class="flex items-center">
        @auth
          <li>
            <a href="#" class="p-3">{{ auth()->user()->username }}</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST" class="inline p-3">
              @csrf
              <button>Logout</button>
            </form>
          </li>
        @endauth

        @guest
          <li>
            <a href="{{ route('login') }}" class="p-3">Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="p-3">Register</a>
          </li>
        @endguest


      </ul>
    </nav>
    @yield("content")

    <footer>
      By Benyamin Kelaudius Sembiring
    </footer>
  </body>
</html>
