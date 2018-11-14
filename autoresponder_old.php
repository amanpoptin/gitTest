<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Autoresponder</title>
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
                  <input class="poptinInput" type="text" placeholder="Search" id="SearchTableAutoresponder" name="usrnm" onkeyup="searchPoptinTable('SearchTableAutoresponder','autoresponderTable');">
                </div>
              </div>
            </div>
            <div class="col-md-3 col-lg-3 button-elem-holder pull-right text-right">
              <div class="poptin-form-elem">
                <button class="btn btn-info btn-circle btn-shadow btn-md btn-uppercase" onClick="window.location.href='autoresponder-edit.php'">+ NEW AUTORESPONDER</button>
              </div>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-tables mb-3">
            <div class="col-md-12 col-lg-12">
              <table class="table table-striped table-radius " id="autoresponderTable" data-sortTable="true">
                <thead>
                  <tr>
                    <th scope="col">Status</th>
                    <th scope="col">name</th>
                    <th scope="col">Sent</th>
                    <th scope="col">Opened</th>
                    <th scope="col">Clicked</th>
                    <th scope="col">Connected popups</th>
                    <th scope="col" data-nosort="true">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center"><label class="switch switch-sm switch-info">
                        <input type="checkbox" checked>
                        <span class="slider round"></span> <span class="hdntxt">Active</span></label></td>
                    <td class="text-center">My new poptin is the best in the world 123</td>
                    <td>6,745,154</td>
                    <td class="text-center"><span>9.54%</span><br>
                      <span>6,745,154</span></td>
                    <td class="text-center"><span>10.17%</span><br>
                      <span>6,745,154</span></td>
                    <td><button class="btn btn-ins-table btn-primary-light btn-radius" onclick="connectPopups('ModalconnectPopups');">Popup #1, Popup #2, Po...</button></td>
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
                        <span class="slider round"></span> <span class="hdntxt">Inactive</span></label></td>
                    <td class="text-center">My new poptin is the best in the world</td>
                    <td>6,745,154</td>
                    <td class="text-center"><span>9.54%</span><br>
                      <span>6,745,154</span></td>
                    <td class="text-center"><span>10.17%</span><br>
                      <span>6,745,154</span></td>
                    <td><button class="btn btn-ins-table btn-primary-light btn-radius" onclick="connectPopups('ModalconnectPopups');">Popup #1, Popup #2, Po...</button></td>
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
                        <span class="slider round"></span> <span class="hdntxt">Active</span></label></td>
                    <td class="text-center">My new poptin is the best in the world 34</td>
                    <td>6,745,154</td>
                    <td class="text-center"><span>9.54%</span><br>
                      <span>6,745,154</span></td>
                    <td class="text-center"><span>10.17%</span><br>
                      <span>6,745,154</span></td>
                    <td><button class="btn btn-ins-table btn-primary-light btn-radius" onclick="connectPopups('ModalconnectPopups');">Popup #1, Popup #2, Po...</button></td>
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
                        <span class="slider round"></span> <span class="hdntxt">Inactive</span></label></td>
                    <td class="text-center">My new poptin is the best in the world 23</td>
                    <td >6,745,154</td>
                    <td class="text-center"><span>9.54%</span><br>
                      <span>6,745,154</span></td>
                    <td class="text-center"><span>10.17%</span><br>
                      <span>6,745,154</span></td>
                    <td><button class="btn btn-ins-table btn-primary-light btn-radius" onclick="connectPopups('ModalconnectPopups');">Popup #1, Popup #2, Po...</button></td>
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
                        <span class="slider round"></span> <span class="hdntxt">Active</span></label></td>
                    <td class="text-center">My new poptin is the best in the world 12</td>
                    <td>6,745,154</td>
                    <td class="text-center"><span>9.54%</span><br>
                      <span>6,745,154</span></td>
                    <td class="text-center"><span>10.17%</span><br>
                      <span>6,745,154</span></td>
                    <td><button class="btn btn-ins-table btn-primary-light btn-radius" onclick="connectPopups('ModalconnectPopups');">Popup #1, Popup #2, Po...</button></td>
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

<!---Form Popups-->
<div id="ModalconnectPopups" class="modal fade poptin-modal-theme modal-md" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <form class="poptin-general-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connect Popups</h4>
        </div>
        <div class="modal-body">
          <div class="connect-popups-block">
            <div class="scroll-pane">
              <ul class="connect-popups-items">
                <li>
                  <label class="custom-checkbox-item" for="popup1">
                    <input type="checkbox" value="" required id="popup1"  checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 1">
                    <span class="custom-checkbox-mark"></span>Popup #1</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup2">
                    <input type="checkbox" value="" required id="popup2" checked  class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 2">
                    <span class="custom-checkbox-mark"></span>Popup #2</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup3">
                    <input type="checkbox" value="" required id="popup3" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 3">
                    <span class="custom-checkbox-mark"></span>Popup #3</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup4">
                    <input type="checkbox" value="" required id="popup4" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 4">
                    <span class="custom-checkbox-mark"></span>Popup #4</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup5">
                    <input type="checkbox" value="" required id="popup5" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 5">
                    <span class="custom-checkbox-mark"></span>Popup #5</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup6">
                    <input type="checkbox" value="" required id="popup6" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 6">
                    <span class="custom-checkbox-mark"></span>Popup #6</label>
                </li>
                <li>
                  <hr>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup7">
                    <input type="checkbox" value="" required id="popup7" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 7">
                    <span class="custom-checkbox-mark"></span>Popup #7</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup8">
                    <input type="checkbox" value="" required id="popup8" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 8">
                    <span class="custom-checkbox-mark"></span>Popup #8</label>
                </li>
                <li>
                  <label class="custom-checkbox-item" for="popup9">
                    <input type="checkbox" value="" required id="popup9" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 9">
                    <span class="custom-checkbox-mark"></span>Popup #9</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class="btn btn-primary-light btn-sm btn-radius" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-info btn-sm btn-radius" data-dismiss="modal">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Form Popups--> 

<!-- container-scroller -->
<?php include('includes/footer.php');?>
<script src="https://unpkg.com/marked@0.3.6"></script> 
<script src="https://unpkg.com/lodash@4.16.0"></script>
</body>
</html>