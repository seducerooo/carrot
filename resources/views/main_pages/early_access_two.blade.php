@extends('layouts.index')
@section('EarlyAccessTwo')

    <!--   start      Header     -->
    @include('includes.header')
    <!--   end      Header    -->
    <div class="early-access container-fluid">
    @include('includes.EarlyAccessTwoPage.Section_One')
    </div>

    <!--   start      Footer     -->
    @include('includes.footer')
    <!--   end      Footer    -->

@endsection
