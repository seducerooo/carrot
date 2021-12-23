@extends('layouts.index')
@section('AllPages')

    @include('layouts.styles.IndexPage_Styles')

    <!-- start header -->

    @include('layouts.styles.HeaderStyles')
    @include('includes.header')


    <!-- end header -->

    <div style="min-height: calc(100vh - 640px)">

        <h1 class="text-center">Bright Inventory Landing</h1>

        <div class="card">
            <div class="card-body">
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('HomePage') }}">
                            HomePage
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ProductsPage') }}">
                            Our Products
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('IntegrationsPage') }}">
                            Integrates
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('LearningSupportPage') }}">
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
        </div>
    </div>

    <!-- start footer -->
    @include('layouts.styles.FooterStyles')
    @include('includes.footer')
    <!-- end footer -->

@endsection
