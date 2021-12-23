@extends('layouts.index')
@section('EarlyAccessOne')



    <!--   start      Header     -->
    @include('includes.header')
    <!--   end      Header    -->

    <div class="early-access">
                                 <!--   start      Section_One page     -->
                                  @include('includes.EarlyAccessOnePage.Section_One')
                                 <!--   end      Section_One page     -->
    </div>

    <!--   start      Footer     -->
    @include('includes.footer')
    <!--   end      Footer    -->
@endsection
