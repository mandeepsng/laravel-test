@extends('layout.mainlayout_admin')

@section('content')

      <!--Pageheader start-->      
      @include('homepage.banner')
      <!--Pageheader end-->
      
      <!--Subscription section start-->
      @include('homepage.subscribtion')
      <!--Subscription section end-->

      <!--Trusted worldwide start-->
      @include('homepage.collaborate')
      <!--Trusted worldwide end-->


      <!--Features start-->
      @include('homepage.features')
      <!--Features end-->

      @include('homepage.subscribtion-package')

      <!--Visualize & plan start-->
      @include('homepage.visualize')
      <!--Visualize & plan end-->

      <!--Testimonial start-->
      @include('homepage.testimonial')
      <!--Testimonial end-->

      <!--Integrate apps start-->
      @include('homepage.integrate')
      <!--Integrate apps end-->

      <!--Call to action start-->
      @include('homepage.newsletter')
      <!--Call to action end-->

@endsection
