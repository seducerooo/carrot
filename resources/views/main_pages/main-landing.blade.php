@extends('layouts.index')
@section('HomePage')


    <!--   start      Header     -->
    @include('includes.header')
    <!--   end      Header    -->




    <div class="main-landing">

    <!--   start      Section_One     -->
    @include('includes.HomePage.Section_One')
    <!--   end      Section_One     -->


    <!--   start      Section_Two     -->
    @include('includes.HomePage.Section_Two')
    <!--   end      Section_Two     -->


    <!--   start      Section_Three     -->
    @include('includes.HomePage.Section_Three')
    <!--   end      Section_Three     -->


    <!--   start      Section_Four    -->
    @include('includes.HomePage.Section_Four')
    <!--   end      Section_Four   -->


    <!--   start      Section_Five     -->
    @include('includes.HomePage.Section_Five')
    <!--   end      Section_Five     -->


    <!--   start      Section_Six     -->
    @include('includes.HomePage.Section_Six')
    <!--   end      Section_Six     -->


    <!--   start      Section_Seven     -->
    @include('includes.HomePage.Section_Seven')
    <!--   end      Section_Seven     -->
    </div>





    <!--   start      Footer     -->
    @include('includes.footer')
    <!--   end      Footer    -->




@endsection
