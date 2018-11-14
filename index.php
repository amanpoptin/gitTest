<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Dashboard</title>
<!-- plugins:css -->
<?php include('includes/header.php');?>

<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
<div class="container-scroller"> 
  <!-- partial:partials/_navbar.html -->
<?php include('includes/top-nav.php');?>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper"> 
    <p>testing</p>
    <p>testing 123</p>
    <p>testing 1234 branch</p>
    <!-- partial:partials/_sidebar.html -->
    <?php include('includes/sidebar.php');?>
    
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="container">
          <div class="row dashboard-head mb-3">
            <div class="col-md-6 col-lg-6 select-elem-holder">
              <div class="poptin-form-elem">
                <select class="first-select filter popTinSelect" name="selectDate" id="selectDate" data-search="false">
                  <option value="1" class="current-date">Today 2018-10-31</option>
                  <option value="2">Yesterday</option>
                  <option value="3">This week</option>
                  <option value="4">Last 7 days</option>
                  <option value="5">This month</option>
                  <option value="6">Last 30 days</option>
                  <option value="7">All time</option>
                  <option value="8" id="customDate">Custom</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 button-elem-holder pull-right text-right">
              <div class="poptin-form-elem">
                <button class="btn btn-info btn-circle btn-shadow btn-md btn-uppercase" >+ NEW POPTIN</button>
              </div>
            </div>
          </div>
          <div class="row dashboard-cards">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card text-white text-center card-warning">
                <div class="card-body"> <i class="icon icon-visitors"></i> <span class="card-top-caption">Visitors <span class="card-caption-help"></span></span>
                  <h2 class="mb-0">100,342</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card text-white text-center card-danger">
                <div class="card-body"> <i class="icon icon-vision"></i> <span class="card-top-caption">Views <span class="card-caption-help"></span></span>
                  <h2 class="mb-0">85,342</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card text-white text-center card-info">
                <div class="card-body"> <i class="icon icon-conversion"></i> <span class="card-top-caption">Conversions <span class="card-caption-help"></span></span>
                  <h2 class="mb-0">2,342</h2>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card text-white text-center card-primary">
                <div class="card-body"> <i class="icon icon-leads-2"></i> <span class="card-top-caption">Conversion rate <span class="card-caption-help"></span></span>
                  <h2 class="mb-0">16.54%</h2>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Stats-->
          
          <div class="row dashboard-cards stats-row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Stats</h4>
                  <div id="js-legend" class="chartjs-legend card-chart-legend analytics-legend"></div>
                </div>
                <div class="card-body">
                  <div class="demo-chart chart-holder">
                    <canvas id="dashboard-monthly-analytics"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row dashboard-cards circular-stat-row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 col-lg-4 circular-card">
                      <div class="circluar-card-head">
                        <h3>Autoresponders</h3>
                      </div>
                      <div id="circle-1"  class="draw-circle" data-percentage="38"  data-color1="#FFC163"  data-color2="#fff9ef" data-text1="415" data-text2="5,536"></div>
                    </div>
                    <div class="col-md-4 col-lg-4 circular-card">
                      <div class="circluar-card-head">
                        <h3>Views</h3>
                        <p>(Next reset date: 11/03/2018)</span> 
                      </div>
                      <div id="circle-2"  class="draw-circle" data-percentage="60"  data-color1="#FF6376"  data-color2="#ffeff1"  data-text1="541" data-text2="85,342"></div>
                    </div>
                    <div class="col-md-4 col-lg-4 circular-card">
                      <div class="circluar-card-head">
                        <h3>Domains</h3>
                      </div>
                      <div id="circle-3"  class="draw-circle" data-percentage="15" data-color1="#7761DF" data-color2="#f1effc" data-text1="1" data-text2="10"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends --> 
      <!-- partial:partials/_footer.html -->
      <footer class="footer"> </footer>
      <!-- partial --> 
    </div>
    <!-- main-panel ends --> 
  </div>
  <!-- page-body-wrapper ends --> 
</div>
<!-- container-scroller -->
<?php include('includes/footer.php');?>
</body>
</html>