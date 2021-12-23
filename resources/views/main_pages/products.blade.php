@extends('layouts.index')
@section('ProductsPage')

<!--   start      Header     -->
@include('includes.header')
<!--   end      Header    -->

           <!--   start      Section_Two     -->
           @include('includes.ProductsPage.Section_Two')
           <!--   end      Section_Two     -->


           <!--   start      Section_Three     -->
           @include('includes.ProductsPage.Section_Three')
           <!--   end      Section_Three     -->


           <!--   start      Section_Four    -->
           @include('includes.ProductsPage.Section_Four')
           <!--   end      Section_Four   -->


           <!--   start      Section_Five     -->
           @include('includes.ProductsPage.Section_Five')
           <!--   end      Section_Five     -->


           <!--   start      Section_Six     -->
           @include('includes.ProductsPage.Section_Six')
           <!--   end      Section_Six     -->

<!--   start      Footer     -->
@include('includes.footer')
<!--   end      Footer    -->

@endsection
