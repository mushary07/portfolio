<footer class="footer-area">
  <div class="container">
    <div class="footer-content text-center">
      <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
      </a>
      <ul class="footer-menu">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/works') }}">Works</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>
      </ul>
      <p class="copyright">
        &copy; {{ date('Y') }} Mushary. All rights reserved.
      </p>
    </div>
  </div>
</footer>
