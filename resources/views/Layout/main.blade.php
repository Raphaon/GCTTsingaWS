<!-- le head pour les fichier css et information d'entete -->
@include('Layout.partials.__head')
<!-- la fin du head-->
<body>

  <!-- ======= Header ======= -->
@include('Layout.partials.__header')
  <!-- End Header -->




<div class="container">



@yield('mainContent')








</div>







  <!-- ======= Footer ======= -->
@include('Layout.partials.__footer')

  <!-- End Footer -->


  @include('Layout.partials.__foot')
