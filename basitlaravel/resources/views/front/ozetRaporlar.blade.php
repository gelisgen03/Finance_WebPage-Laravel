
<body>
    
</body>
<!-- özel Raporlar -->
<div  id="ozel-raporlar" class="container-fluid content" style="display:grid">    
    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="card shadow mb-4" style="display: flex; ;width:73%;margin-right:1% ">
            <div class="card shadow mb-4">
                <!-- Degisken Grafik -->
                <div class="navbar" style="display: flex; justify-content:left; background-color: #333;">
                    <button class="btn btn-outline-secondary" onclick="changeContent1('7g')" style="margin: 0 3px; padding: 10px 20px; color: white; cursor: pointer;">7G</button>
                    <button class="btn btn-outline-secondary" onclick="changeContent1('1a')" style="margin: 0 3px; padding: 10px 20px; color: white; cursor: pointer;">1A</button>
                    <button class="btn btn-outline-secondary" onclick="changeContent1('3a')" style="margin: 0 3px; padding: 10px 20px; color: white;cursor: pointer;">3A</button>
                    <button class="btn btn-outline-secondary" onclick="changeContent1('1y')" style="margin: 0 3px; padding: 10px 20px; color: white;cursor: pointer;">1Y</button>
                    <button class="btn btn-outline-secondary" onclick="changeContent1('3y')" style="margin: 0 3px; padding: 10px 20px; color: white;cursor: pointer;">3Y</button>
                </div>
        
                <div  >
                    <!-- Navbar --> 
                    <!-- Dinamik İçerik Bölgesi -->
                        <div  id="dynamic-content-1" style="background-color:#020202; padding:1%; height: 60%; overflow-y: auto;">
                        <!-- Default -->
                            @include('front.layouts.Grafikler.7g')
                           </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                </div>
            </div>
                
        </div>

            <!-- FON BİLGİLENDİRME -->  
        <div class="card shadow mb-4" style="background-color: #000000;width:25%; padding:1%" >

            <div style="border:border: 5px solid black">
                <div class="alert alert-warning" role="alert">
                        <i class="fas fa-fw fa-clock"></i>
                        <span></span>
                        <!-- Divider -->
                <hr style="border-top: 1px dotted#bbb;">
                        <i class="fas fa-fw fa-table"></i>
                        <span></span>
                </div>
            </div>
            <div style="border:border: 5px solid black">
                <h4>Fon Bilgileri</h1>
                <!-- Divider -->
                <hr style="border-top: 2px solid #bbb;">
                    <span >{{ $fonbilgisidata->gelnelAciklama}}</span> 
            </div>
            <div style="margin-top:15%">
                <span >Fon Kodu<span style="float:right ">{{ $fonbilgisidata->fonKodu}}</span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted#bbb;">
                <span >Kurucu<span style="float:right ">{{ $fonbilgisidata->fonKurucu}}</span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted  #bbb;">
                <span >Yıllık Yönetim Ücreti<span style="float:right">{{ $fonbilgisidata->yillikYonetimUcreti}} </span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted #bbb;">
                <span >Risk Değeri<span style="float:right">{{ $fonbilgisidata->riskDegeri}}</span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted #bbb;">
                <span >Alış Valörü<span style="float:right">{{ $fonbilgisidata->alisValoru}}</span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted #bbb;">
                <span >Satış Valörü<span style="float:right">{{ $fonbilgisidata->satisValoru}}</span></span>
                <!-- Divider -->
                <hr style="border-top: 1px dotted #bbb;">
                <div style="float:initial" class="alert alert-info" role="alert">
                    <center>
                    <i class="fa fa-check-circle"></i>
                    <span>TEFAS'ta İşleme Açık</span></a>
                    </center>
                    
                    
                  </div>
            </div>
        </div>  

        </div>
        

        <script>
            
            
            // Dinamik İçerik Değiştirme Fonksiyonu - 2
            function changeContent1(page) {
                const content = document.getElementById('dynamic-content-1');
                
                const pages = {
                    '7g': document.getElementById('7g-content').innerHTML,
                    '1a': document.getElementById('1a-content').innerHTML,
                    '3a': document.getElementById('3a-content').innerHTML,
                    '1y': document.getElementById('1y-content').innerHTML,
                    '3y': document.getElementById('3y-content').innerHTML
                };
        
                content.innerHTML = pages[page] || 'Sayfa bulunamadı';
            }
        </script>
        
             <div id="7g-content" style="display: none;">
                 <!-- Area Chart -->
 <div  >
    <div  class="card shadow mb-4" >
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" >
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

            </div>
            <div id="1a-content" style="display: none;">
                @include('front.layouts.Grafikler.1a')
            </div>
            <div id="3a-content" style="display: none;">
                @include('front.layouts.Grafikler.3a')
            </div>
            <div id="1y-content" style="display: none;">
                @include('front.layouts.Grafikler.1y')
            </div>
            <div id="3y-content" style="display: none;">
                @include('front.layouts.Grafikler.3y')
            </div>
        
            
            <div class="row">
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
