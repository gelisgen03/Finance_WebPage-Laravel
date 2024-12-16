@extends('front.layouts..master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<body id="page-top">

    @include('front.leftWrapper')
    @include('front.ustSayfaYazilari')

    <!-- Sekmeler -->
    <nav style="background-color: gray" class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
          <button style="margin: 2px" class="btn btn-success" type="button">Özet Raporlar</button>
          <button style="margin: 2px" class="btn btn-success" type="button">Hisse Portfoyu</button>
          <button style="margin: 2px" class="btn btn-success" type="button">Akış</button>
          <button style="margin: 2px" class="btn btn-success" type="button">Rakip Analizi</button>
          
        </form>

      </nav>
        <!-- Content Wrapper -->
         <!-- Main Content -->
         <div id="content" style="margin:1%;padding-right:1%;display:grid">
            <!-- İçerikler -->
            
                <!-- ozet Raporlar -->
                @include('front.ozetRaporlar')
                <!-- Hisse Portfoyu -->
                @include('front.hissePortfoyu')
                <!-- Akış -->
                @include('front.akis')
                <!-- Rakip Analizi -->
                @include('front.rakipAnalizi')
    
            <br>
        </div>
        <!-- End of Main Content -->
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!--Righ Wrapper-->
    @include('front.rightWrapper')
    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Ana Sayfa sekme değişim js içerik dosyları-->
    <script src="js/anaSayfaSekme.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
@endsection