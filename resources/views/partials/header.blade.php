<header class="header--main menu">
    <section class="bg--secondary header__info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <ul class="company-info list-inline">
                        <li class="m-r-10"><a href="tel:+977 9841568568" class="call-to-action"><i class="oa-call"></i>+977 9841568568</a></li>
                        <li class="hidden-sm hidden-xs"><a href="mailto:info@onlineaushadhi.com"><i class="oa-mail"></i>info@onlineaushadhi.com</a></li>
                        <li class="social-icons hidden-xs">
                            <a href="https://www.facebook.com/Online-Aushadhi-1677716842458286" target="_blank"><i class="oa-facebook"></i></a>
                            <a href="https://twitter.com/online_aushadhi" target="_blank"><i class="oa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UC7fvHXVAmAxM7LJIBXgw6IQ" target="_blank"><i class="oa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5">
                    <div class="nav navbar-nav navbar-right dropdown">
                        <ul class="list-inline">
                            @if (Auth::guest())
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#login">Login</a></li>
                            <li>|</li>
                            <li><a href="/register">Register and Order</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/home">Account Information</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <li>
                                <a href="/cart" class="cart-block">
                                    <i class="oa-cart"></i>
                                    <span class="badge">{{ Cart::count() }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg--alternative header__brand-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar">
                        <a href="/" class="navbar-brand"><img src="{{ asset('img/logo-oa.png') }}" alt=""></a>
                        <div class="collapse-icon visible-sm visible-xs">
                            <a href="#" class="nav-toggle"><i class="oa-menu"></i></a>
                        </div>
                        <!--/.collapse-icon-->
                        <ul class="nav nav-pills navbar-nav navbar-right text-uppercase hidden-sm hidden-xs">
                            <li role="presentation"{{ classActivePath('/') }}><a href="/">Home</a></li>
                            <li role="presentation"{{ classActivePath('about') }}><a href="/about">About</a></li>
                            <li role="presentation"{{ classActivePath('products') }}><a href="/products">Our Products</a></li>
                            <li role="presentation"><a href="http://healthtips.onlineaushadhi.com" target="_blank">Blogs and Health Tips</a></li>
                            <li role="presentation"{{ classActivePath('contact') }}><a href="#contact" class="navigate">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>
