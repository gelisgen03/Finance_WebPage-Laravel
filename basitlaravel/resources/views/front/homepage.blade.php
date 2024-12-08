@extends('front.layouts..master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body id="page-top">
    
    
    <!--Sol Page Wrapper -->
    <div id="wrapper" style="background-color: rgb(8, 8, 8);display:flex">

        <!-- Left Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(0, 0, 0); " >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="">
                    <img alt="Fintables Logo" loading="lazy" width="24" height="24" decoding="async" data-nimg="1" style="color:transparent" src="/img/fintableslogo.svg">
                </div>
                <div class="sidebar-brand-text mx-3">Fintables</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item" >
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-search"></i>
                    <span>Ara</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Bugün</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hisseler</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Fonlar</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-cubes"></i>
                    <span>Aracı Kurumlar</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Sektörler</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    
                        <a class="collapse-item" href="buttons.html">Dayanıklı Tüketim Ürünleri</a>
                        <a class="collapse-item" href="cards.html">Gayrimenkul</a>
                        <a class="collapse-item" href="cards.html">Otomativ</a>
                        <a class="collapse-item" href="cards.html">Ulaştırma</a>
                        <a class="collapse-item" href="cards.html">Bankacılık</a>
                        <a class="collapse-item" href="cards.html">Factoring</a>
                        <a class="collapse-item" href="cards.html">Finansal Kiralama</a>
                        <a class="collapse-item" href="cards.html">Sigorta</a>
                        <a class="collapse-item" href="cards.html">Tümü(44)</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnalizler"
                    aria-expanded="true" aria-controls="collapseAnalizler">
                    <i class="fa fa-tasks"></i>
                    <span>Analizler</span>
                </a>
                <div id="collapseAnalizler" class="collapse" aria-labelledby="headingAnalizler" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="buttons.html">Son Bilançolar</a>
                        <a class="collapse-item" href="buttons.html">Geri Alımlar</a>
                        <a class="collapse-item" href="buttons.html">Yeni İş İlişkileri</a>
                        <a class="collapse-item" href="buttons.html">Tedbirli Hisseler</a>
                        <a class="collapse-item" href="buttons.html">Halka Arzlar</a>
                        <a class="collapse-item" href="buttons.html">Çalışan Sayıları</a>
                        <a class="collapse-item" href="buttons.html">Aracı Kurum Beklentileri</a>
                        <a class="collapse-item" href="buttons.html">Şirket Beklentileri</a>
                        <a class="collapse-item" href="buttons.html">Endeksi Etkileyenler</a>
                        <a class="collapse-item" href="buttons.html">Yatırım Planları</a>
                        <a class="collapse-item" href="buttons.html">Veri Havuzu</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-cog"></i>
                    <span>İşlem Ekranı</span></a>
            </li>
           
            <br>
          
            <div class="sidebar-heading">
                Araştırma
            </div>

           
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-clone"></i>
                    <span>Bültenler </span></a> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-file"></i>
                    <span>Yazılar</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-file-video"></i>
                    <span>Webinarlar</span></a> 
            </li>

            <br>
            <!-- Heading -->
            <div class="sidebar-heading" >
                Akademi
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Eğitimler</span></a> 
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        
        <!-- Content Wrapper -->
         <!-- Main Content -->
         <div id="content" style="margin-right:1%;padding-right:1%">

            
            <!-- Topbar -->
            <div>
                <!-- Topbar Navigasyon (bulunulann sayfa)-->
                <div style="background-color: rgb(0, 0, 0)">
                    <div style="display:flex; flex-direction: column; margin: 1% ">
                    <!--Sayfa Yer bildirimi -->
                        <div style="float:inline-start">
                            <a class="nav-link" href="index.html">
                                <i style="color:gray" class="fas fa-fw fa-Home"></i>
                                <span style="color:gray">Fonlar</span></a>
                </div>  
                    <br>
                          
                    <!--FON ADI -->
                    <div class="text-2xl font-semibold">
                        <div style="" class="sidebar-brand-text mx-3">
                            <!-- Resim + FonAdı + Diğer bilgiler için tablo -->
                            <table border="0">
                                <tr>
                                    <!-- Resim Sütünu-->
                                    <td rowspan="2"  >
                                        <div style="float:inline-start;display:flex" class="">
                                            <img  alt="Fintables Logo" loading="lazy" width="65" height="65" data-nimg="1" style="color:transparent" src="/img/fintableslogo.svg">
                                        </div>
                                    </td>
                                    <!-- Resmin Yanındaki yazının sütünu -->
                                    <td style="width: 65%">  
                                            <span style="font-weight: bold;font-size:200%">IPB</span>
                                            <br>
                                            <span>Birinci Değişken Fonu</span>
                                    </td>
                                    <!--Tarih Sütünu -->
                                    <td style="width: 10%" >
                                        <span  style="font-size:100%; font-family:Arial, Helvetica, sans-serif  ">6 Aralık 2024</span>
                                        <br>
                                        <span style="color:white;font-size:150%">0,6488 </span>
                                    </td>
                                     <!--1 Aylık Getiti Sütünu -->
                                    <td style="text-align: center;width: 10%">
                                        <span style="font-size:100%">1 Aylık Getiri</span>
                                        <br>
                                        <span style="font-size:110%">%18,59</span>
                                        
                                    </td>
                                     <!--3 Aylık getiti sütünu -->
                                    <td style="text-align: center;width:10%">
                                        
                                        <span style="font-size:100%">3 Aylık Getiri</span>
                                        <br>
                                        <span style="font-size:110%">%3,88</span>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>  
                    </div>
                </div>
            </div>

            </div>
            
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Earnings (Monthly)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Earnings (Annual)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pending Requests</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> Direct
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-success"></i> Social
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-info"></i> Referral
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">Server Migration <span
                                        class="float-right">20%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Sales Tracking <span
                                        class="float-right">40%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Customer Database <span
                                        class="float-right">60%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Payout Details <span
                                        class="float-right">80%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Account Setup <span
                                        class="float-right">Complete!</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Color System -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        Primary
                                        <div class="text-white-50 small">#4e73df</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-success text-white shadow">
                                    <div class="card-body">
                                        Success
                                        <div class="text-white-50 small">#1cc88a</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-info text-white shadow">
                                    <div class="card-body">
                                        Info
                                        <div class="text-white-50 small">#36b9cc</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-warning text-white shadow">
                                    <div class="card-body">
                                        Warning
                                        <div class="text-white-50 small">#f6c23e</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-danger text-white shadow">
                                    <div class="card-body">
                                        Danger
                                        <div class="text-white-50 small">#e74a3b</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-secondary text-white shadow">
                                    <div class="card-body">
                                        Secondary
                                        <div class="text-white-50 small">#858796</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        Light
                                        <div class="text-black-50 small">#f8f9fc</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-dark text-white shadow">
                                    <div class="card-body">
                                        Dark
                                        <div class="text-white-50 small">#5a5c69</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                        src="img/undraw_posting_photo.svg" alt="...">
                                </div>
                                <p>Add some quality, svg illustrations to your project courtesy of <a
                                        target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                    constantly updated collection of beautiful svg images that you can use
                                    completely free and without attribution!</p>
                                <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                    unDraw &rarr;</a>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                            </div>
                            <div class="card-body">
                                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                    CSS bloat and poor page performance. Custom CSS classes are used to create
                                    custom components and custom utility classes.</p>
                                <p class="mb-0">Before working with this theme, you should become familiar with the
                                    Bootstrap framework, especially the utility classes.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!--Righ Wrapper-->
    <div id="content-wrapper" class="d-flex flex-column" >

        <div id="righWrapper" style="position: fixed; top: 0; right: 0; width: 3%; height: 100vh; display: flex; flex-direction: column; background-color: rgb(0, 0, 0); margin-left:2%">
            <div class="">
                 <!--Favoriler icon -->
                <br>
                <center>
                    <div >
                        <a class="nav-item" href="index.html">
                            <i title="Favoriler" style="color:gray;" class="fa fa-list-alt"></i>
                    </div>
                </center>
                <br>
                <!--Piyasalar icon -->
                <center>
                    <div>
                        <a class="nav-item" href="index.html">
                            <i title="Piyasalar" style="color:gray" class="fa fa-signal"></i>
                    </div>
                </center>
                <br>
                <!--Notlar icon -->
                <center>
                <div>
                        <a class="nav-item" href="index.html">
                            <i title="Notlar" style="color:gray" class="fa fa-file"></i>
                </div>
                </center>
                <br>
                <!--Alarmlar icon -->
                <center>
                <div>
                    <a class="nav-item" href="index.html">
                        <i title="Alarmlar" style="color:gray" class="fa fa-clock"></i>
                </div>
                </center>
                <br>
                <!-- Cüzdan icon -->
                <center>
                <div>
                    <a class="nav-item" href="index.html">
                        <i style="color:gray" class="fa fa-credit-card"></i>
                </div>
                </center> 
                </div>
        </div>
    </div>
    <!-- End of Righ Wrapper -->

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