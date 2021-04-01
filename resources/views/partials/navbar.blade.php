<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img id="logo" src="{{asset('storage/'.$logo[0]->img)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="/service">Services</a></li>
            <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="/blog">Blog</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->