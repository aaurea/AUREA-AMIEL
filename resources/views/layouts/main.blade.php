<!DOCTYPE html>
<html lang="en">
   <head>
@include('layouts.style')
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            @include('layouts.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               @include('layouts.topbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               @yield('content')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
     @include('layouts.script')