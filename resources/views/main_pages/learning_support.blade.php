@extends('layouts.index')
@section('LearningSupportPage')


    <!--   start      Header     -->
    @include('includes.header')
    <!--   end      Header    -->


    <div class="learning-support">

                                  <!-- start Section_One -->
                                  @include('includes.LearningSupportPage.Section_One')
                                  <!-- end Section_One -->

                                  <!-- start Section_Two -->
                                  @include('includes.LearningSupportPage.Section_Two')
                                  <!-- end Section_Two -->

                                  <!-- start Section_Three -->
                                  @include('includes.LearningSupportPage.Section_Three')
                                  <!-- end Section_Three -->
    </div>
    <!--   start      Footer     -->
    @include('includes.footer')
    <!--   end      Footer    -->
@endsection
