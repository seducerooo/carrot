@extends('layouts.index')
@section('AboutUsPage')



                        <!--   start      Header     -->
                        @include('includes.header')
                        <!--   end      Header    -->

                        <div class="about-us">
                                  <!--   start      Section_One     -->
                                  @include('includes.AboutUsPage.Section_One')
                                  <!--   end      Section_One     -->


                                  <!--   start      Section_Two     -->
                                  @include('includes.AboutUsPage.Section_Two')
                                  <!--   end      Section_Two     -->


                                  <!--   start      Section_Three     -->
                                  @include('includes.AboutUsPage.Section_Three')
                                  <!--   end      Section_Three     -->
                        </div>

                        <!--   start      Footer     -->
                        @include('includes.footer')
                        <!--   end      Footer    -->

@endsection
