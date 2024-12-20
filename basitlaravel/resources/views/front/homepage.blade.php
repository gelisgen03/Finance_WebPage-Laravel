@extends('front.layouts..master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<body id="page-top">

    <!-- Sol Wrapper -->
    <div>
        @include('front.leftWrapper')
        @include('front.ustSayfaYazilari')
        
        <div class="main-content">
            
            <!-- Divider -->
            <hr style="border-top: 2px solid #bbb;">
            
            <!-- Navbar -->
            <div class="navbar" style="display: flex; justify-content:left; background-color: #030202; padding: 10px;">
                <button class="btn btn-outline-secondary" onclick="changeContent('ozet')" style="margin: 0 10px; padding: 10px 20px; color: white; cursor: pointer;">Özet Raporlar</button>
                <button class="btn btn-outline-secondary" onclick="changeContent('hisse')" style="margin: 0 10px; padding: 10px 20px; color: white; cursor: pointer;">Hisse Portföyü</button>
                <button class="btn btn-outline-secondary" onclick="changeContent('akis')" style="margin: 0 10px; padding: 10px 20px; color: white;cursor: pointer;">Akış</button>
                <button class="btn btn-outline-secondary" onclick="changeContent('rakip')" style="margin: 0 10px; padding: 10px 20px; color: white;cursor: pointer;">Rakip Analizi</button>
            </div>
            <!-- Divider -->
            <hr style="border-top: 2px solid #bbb;">
            
    
            <!-- Dinamik İçerik Bölgesi -->
            <div class="dynamic-content" id="dynamic-content" style="background-color: #ddd;  height: 90%;margin:1% ">
                <!-- Default -->
                @include('front.ozetRaporlar')
                <script src="js/demo/chart-area-demo.js"></script>
            </div>
        </div>
         <!--Righ Wrapper-->
         @include('front.rightWrapper') 

         
    </div>  
    <div>
        <p><?=$data1?></p>
    </div>   

    <script>
        // Dinamik İçerik Değiştirme Fonksiyonu
        function changeContent(page) {
            const content = document.getElementById('dynamic-content');
                
            
            const pages = {
                'ozet': document.getElementById('ozet-content').innerHTML,
                'hisse': document.getElementById('hisse-content').innerHTML,
                'akis': document.getElementById('akis-content').innerHTML,
                'rakip': document.getElementById('rakip-content').innerHTML
            };
    
            content.innerHTML = pages[page] || 'Sayfa bulunamadı';
        }
    </script>

    
    
   
    
    <!-- Dinamik İçerikler Gizlenmiş -->
    <div id="ozet-content" style="display: none;">
        @include('front.ozetRaporlar')
    </div>
    <div id="hisse-content" style="display: none;">
        @include('front.hissePortfoyu')
    </div>
    <div id="akis-content" style="display: none;">
        @include('front.akis')
    </div>
    <div id="rakip-content" style="display: none;">
        @include('front.rakipAnalizi')
    </div>
    

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