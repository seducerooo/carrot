@extends('layouts.index')
@section('IntegrationsPage')


    <!--   start      Header     -->
    @include('includes.header')
    <!--   end      Header    -->

    <div class="integration">
               <!--   start          Section_One  -->
        @include('includes.IntegrationsPage.Section_One')
               <!--   end          Section_One  -->

               <!--   start          Section_Two  -->
    @include('includes.IntegrationsPage.Section_Two')
               <!--   end          Section_Two  -->

               <!--   start          Section_Third  -->
    @include('includes.IntegrationsPage.Section_Three')
               <!--   end          Section_Third   -->
    </div>

    <!--   start      Footer     -->
    @include('includes.footer')
    <!--   end      Footer    -->

@endsection
