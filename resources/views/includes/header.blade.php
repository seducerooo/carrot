<!--Start Header-->

<div class="wrapper">
    <header class="desktop d-none d-lg-block d-md-none">
        <nav class="navbar">
            <div class="container">
                <a  class="navbar-brand" href="#">
                    <img src="../../../public/assets/img/Logo.png" alt="brightinventory">
                </a>
                <ul class="list-unstyled mb-0 d-none d-md-block">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ProductsPage') }}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('IntegrationsPage') }}">Integrations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('LearningSupportPage') }}">Learning and Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('AboutUsPage') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ContactUsPage') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <header class="mobile d-block d-lg-none d-md-block d-inline-block">
        <div class="row">
            <div class="col-10">
                <a  class="logo navbar-brand" href="{{ route('HomePage') }}">
                    <img src="{{asset('/assets/img/Logo.png')}}" alt="brightinventory" >
                </a>
            </div>
            <div class="col-2 text-end" >
                <a onclick="openHeaderMenu()">
                    <img src="{{ asset('/assets/icons/hamburger-menu.svg') }}" alt="hamburger-menu" class="icon">
                </a>
            </div>
        </div>

        <div class="mobile-settings" id="header-mobile-menu">

            <a href="#" class="header-setting-logo">
                <img src="{{ asset('/assets/icons/hamburger-menu.svg') }}" alt="BI Logo"  />
            </a>
            <a onclick="closeHeaderMenu()" class="close-header btn-close" data-bs-dismiss="modal" aria-label="Close"></a>

            <ul class="list-unstyled">
                <li>
                    <a href="{{ asset('ProductsPage') }}">
                        Our Products
                    </a>
                </li>
                <li>
                    <a href="{{ asset('IntegrationsPage') }}">
                        Integrates
                    </a>
                </li>
                <li>
                    <a href="{{ asset('LearningSupportPage') }}">
                        Learning & Support
                    </a>
                </li>
                <li>
                    <a href="{{ route('AboutUsPage') }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('ContactUsPage') }}">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('EarlyAccessOnePage') }}">
                        Early Access
                    </a>
                </li>
                <li>
                    <a href="{{ route('EarlyAccessTwoPage') }}">
                        Early Access <small>(Step2)</small>
                    </a>
                </li>
            </ul>
        </div>
    </header>
</div>
<!--End Header-->
