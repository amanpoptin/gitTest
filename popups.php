<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin popups</title>
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
    
    <!-- partial:partials/_sidebar.html -->
    <?php include('includes/sidebar.php');?>
    
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="container">
          <div class="row dashboard-head mb-1">
            <div class="col-md-12 col-lg-12">
              <h3>mypoptin.com</h3>
            </div>
          </div>
          <!-- page filter heads-->
          <div class="row dashboard-head mb-3">
            <div class="col-md-9 col-lg-9 select-elem-holder">
              <div class="poptin-form-elem elem-inline">
                <select class="first-select filter popTinSelect" name="selectDate" id="selectDate"  data-search="false">
                  <option value="1">Today 2018-10-31</option>
                  <option value="2">Yesterday</option>
                  <option value="3">This week</option>
                  <option value="4">Last 7 days</option>
                  <option value="5">This month</option>
                  <option value="6">Last 30 days</option>
                  <option value="7">All time</option>
                  <option value="8" id="customDate">Custom</option>
                </select>
              </div>
              <div class="poptin-form-elem elem-inline">
                <select class="first-select filter popTinSelect" name="selectDate2" id="selectDate2" data-search="false" data-selectType="colorDots">
                  <option value="1" class="option-success">Active</option>
                  <option value="2" class="option-danger">Inactive</option>
                  <option value="3" class="option-primary">Option 3</option>
                  <option value="4" class="option-warning">Option 4</option>
                  <option value="5" class="option-info">Option 5</option>
                </select>
              </div>
              <div class="poptin-form-elem elem-inline">
                <button class="btn btn-default btn-advanced btn-circle btn-shadow btn-md" >Advanced</button>
              </div>
              <div class="poptin-form-elem elem-inline">
                <div class="poptin-input-container input-circle input-search"> <i class="icon icon-search"></i>
                  <input class="poptinInput" type="text" placeholder="Search" id="SearchTablepopups" name="usrnm" onkeyup="searchPoptinTable('SearchTablepopups','popupsTable');">
                </div>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 button-elem-holder pull-right text-right">
              <div class="poptin-form-elem">
                <button class="btn btn-info btn-circle btn-shadow btn-md btn-uppercase" onClick="poptinRedirect('create-popup-step.php');">+ New Popup</button>
              </div>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-tables mb-3">
            <div class="col-md-12 col-lg-12">
              <table class="table table-striped table-radius tbw180" id="popupsTable" data-sortTable="true">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">Poptin</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Views</th>
                    <th scope="col">Conversions</th>
                    <th scope="col">Conv %</th>
                    <th scope="col" data-nosort="true">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox" checked>
                        <span class="slider round"></span> <span class="hdntxt">Active</span> </label></td>
                    <td class="text-center">My new poptin is the best in the world 12 <span class="form-sample-block"></span> <span class="form-icon icon-info"></span></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox">
                        <span class="slider round"></span> <span class="hdntxt">Inactive</span> </label></td>
                    <td class="text-center">My new poptin is the best in the world 123
                      
                    <span class="form-sample-block"></span> <span class="form-icon icon-danger"></span> </td>
                    <td><span class="table-data-count advanced-mode advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr>
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox" checked>
                        <span class="slider round"></span> <span class="hdntxt">Active</span> </label></td>
                    <td class="text-center">My new poptin is the best in the world 1234<span class="form-sample-block"></span> <span class="form-icon icon-info"></span></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr class="abo_test_row warrow">
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox">
                        <span class="slider round"></span> <span class="hdntxt">Inactive</span> </label></td>
                    <td class="text-center">My new poptin is the best in the world 1234<span class="form-sample-block"></span> <span class="form-icon icon-danger"></span></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr class="abo_test_row">
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox">
                        <span class="slider round"></span> <span class="hdntxt">Inactive</span></label></td>
                    <td class="text-center"><p>My new poptin is the best in the world 123
                      
                      <p> <span class="form-sample-block"></span> <span class="form-icon icon-danger"></span> </td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  <tr >
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox" checked>
                        <span class="slider round"></span> <span class="hdntxt">Active</span></label></td>
                    <td class="text-center">My new poptin is the best in the world 1234<span class="form-sample-block"></span> <span class="form-icon icon-info"></span></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td class="text-center"><div class="poptin-action dropdown">
                        <button class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown"><i class="icon icon-options"></i> Options <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-edit"></i> <span>Edit</span></a></li>
                          <li><a href="#"><i class="icon icon-a-b"></i> <span>Change name</span></a></li>
                          <li><a href="#"><i class="icon icon-copy"></i> <span>Sent logs</span></a></li>
                          <li><a href="#"><i class="icon icon-vision"></i> <span>Delete</span></a></li>
                        </ul>
                      </div></td>
                  </tr>
                  
                </tbody>
                  </thead>
                
              </table>
              <!--table-sum-->
              <table class="table table-sum table-radius tbw180 mt-3">
                <tbody>
                  <tr>
                    <td class="text-center">Sum</td>
                    <td class="text-center">5 popups </td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-warning">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-danger">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">32</span> <span class="table-data-count advanced-mode desktop-icon">5,55555451</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-info">6,745,154</span> </div></td>
                    <td><span class="table-data-count advanced-mode mobile-icon">6%</span> <span class="table-data-count advanced-mode desktop-icon">22%</span>
                      <div class="text-center counter-holder mt-2"> <span class="counter-text counter-bg-primary">11%</span> </div></td>
                    <td></td>
                  </tr>
                </tbody>
                  </thead>
                
              </table>
              <!--table-sum end-->
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