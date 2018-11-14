<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Leads</title>
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
          <div class="row dashboard-head mb-3">
            <div class="col-md-4 col-lg-4">
             <div class="poptin-form-elem elem-inline wth100">
                <select class="first-select filter popTinSumoSelect wth100" data-placeholder="google.adwords.com" name="leadSource[]" multiple="multiple" id="leadSource" >
                  <option value="1">google.adwords.com</option>
                  <option value="2">www.nana.co.il</option>
                  <option value="3">www.ynet.com</option>
                  <option value="4">Popup #4</option>
                  <option value="5">Popup #5</option>
                </select>
              </div>
            </div>
          </div>
          <!-- page filter heads-->
          <div class="row dashboard-head mb-3">
            <div class="col-md-8 col-lg-8 select-elem-holder">
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
                <button class="btn btn-default btn-advanced btn-circle btn-shadow btn-md" >Advanced</button>
              </div>
              <div class="poptin-form-elem elem-inline">
                <div class="poptin-input-container input-circle input-search"> <i class="icon icon-search"></i>
                  <input class="poptinInput" type="text" placeholder="Search" id="SearchTableleads" name="usrnm" onkeyup="searchPoptinTable('SearchTableleads','leadsTable');">
                </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-4 button-elem-holder pull-right text-right">
            <div class="poptin-form-elem">
                <button class="btn btn-circle btn-md btn-primary-light mr-1" >Delete</button>
             
                <button class="btn btn-info btn-circle btn-shadow btn-md btn-uppercase btn-icon" ><i class="icon icon-download"></i> Download</button>
              </div>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-tables mb-3">
            <div class="col-md-12 col-lg-12">
              <table class="table table-striped table-radius " id="autoresponderTable" data-sortTable="true">
                <thead>
                  <tr>
                    <th scope="col" class="th120">Date</th>
                    <th scope="col">Page</th>
                    <th scope="col" class="th150">Poptin name</th>
                    <th scope="col" class="th120">Device</th>
                    <th scope="col" class="th120">Name</th>
                    <th scope="col" class="th120">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col" class="th120" data-nosort="true">More details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">2018-08-20 23:09:17
                    
                    <label class="custom-checkbox-item" for="lead1">
                  <input type="checkbox" value="" required id="lead1" class="custom-checkbox" name="checkbox[]" aria-required="true"><span class="custom-checkbox-mark"></span></label>
                    </td>
                    <td class="text-center">www.yeadimtravel.co.il/group-tourjapan</td>
                    <td>Japan  exit page</td>
                   <td class="text-center">
                    <i class="icon icon-laptop icon-32x"></i>
                    <span class="table-text">Desktop</span>
                    </td>
                    <td>Jhony boy</td>
                    <td class="text-center">972-57412412</td>
                    <td class="text-center">jhonyboy@gmail.com</td>
                    <td class="text-center"><a href="#" class="act-link"><i class="icon icon-print"></i></a></td>
                  </tr>
                  <tr>
                    <td class="text-center">2018-08-20 23:09:17
                    <label class="custom-checkbox-item" for="lead1">
                  <input type="checkbox" value="" required id="lead1" class="custom-checkbox" name="checkbox[]" aria-required="true"><span class="custom-checkbox-mark"></span></label>
                    
                    </td>
                    <td class="text-center">www.yeadimtravel.co.il/group-tourjapan</td>
                    <td>Japan  exit page</td>
                   <td class="text-center">
                    <i class="icon icon-laptop icon-32x"></i>
                    <span class="table-text">Desktop</span>
                    </td>
                    <td>Jhony boy</td>
                    <td class="text-center">972-57412412</td>
                    <td class="text-center">jhonyboy@gmail.com</td>
                    <td class="text-center"><a href="#" class="act-link"><i class="icon icon-print"></i></a></td>
                  </tr>
                  <tr>
                    <td class="text-center">2018-08-20 23:09:17
                    <label class="custom-checkbox-item" for="lead2">
                  <input type="checkbox" value="" required id="lead2" class="custom-checkbox" name="checkbox[]" aria-required="true"><span class="custom-checkbox-mark"></span></label>
                    
                    </td>
                    <td class="text-center">www.yeadimtravel.co.il/group-tourjapan</td>
                    <td>Japan  exit page</td>
                     <td class="text-center">
                    <i class="icon icon-laptop icon-32x"></i>
                    <span class="table-text">Desktop</span>
                    </td>
                    <td>Jhony boy</td>
                    <td class="text-center">972-57412412</td>
                    <td class="text-center">jhonyboy@gmail.com</td>
                    <td class="text-center"><a href="#" class="act-link"><i class="icon icon-print"></i></a></td>
                  </tr>
                   <tr>
                    <td class="text-center">2018-08-20 23:09:17
                   <label class="custom-checkbox-item" for="lead3">
                  <input type="checkbox" value="" required id="lead3" class="custom-checkbox" name="checkbox[]" aria-required="true"><span class="custom-checkbox-mark"></span></label> 
                    </td>
                    <td class="text-center">www.yeadimtravel.co.il/group-tourjapan</td>
                    <td>Japan  exit page</td>
                    <td class="text-center">
                    <i class="icon icon-laptop  icon-32x"></i>
                    <span class="table-text">Desktop</span>
                    </td>
                    <td>Jhony boy</td>
                    <td class="text-center">972-57412412</td>
                    <td class="text-center">jhonyboy@gmail.com</td>
                    <td class="text-center"><a href="#" class="act-link"><i class="icon icon-print"></i></a></td>
                  </tr>
                  <tr>
                    <td class="text-center">2018-08-20 23:09:17
                    <label class="custom-checkbox-item" for="lead4">
                  <input type="checkbox" value="" required id="lead4" class="custom-checkbox" name="checkbox[]" aria-required="true"><span class="custom-checkbox-mark"></span></label>
                    </td>
                    <td class="text-center">www.yeadimtravel.co.il/group-tourjapan</td>
                    <td>Japan  exit page</td>
                    <td class="text-center">
                    <i class="icon icon-laptop  icon-32x"></i>
                    <span class="table-text">Desktop</span>
                    </td>
                    <td>Jhony boy</td>
                    <td class="text-center">972-57412412</td>
                    <td class="text-center">jhonyboy@gmail.com</td>
                    <td class="text-center"><a href="#" class="act-link"><i class="icon icon-print"></i></a></td>
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
                  <input type="checkbox" value="" required id="popup1"  checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 1"><span class="custom-checkbox-mark"></span>Popup #1</label>
              </li>
              
              <li>
                <label class="custom-checkbox-item" for="popup2">
                  <input type="checkbox" value="" required id="popup2" checked  class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 2"><span class="custom-checkbox-mark"></span>Popup #2</label>
              </li>
              
               <li>
                <label class="custom-checkbox-item" for="popup3">
                  <input type="checkbox" value="" required id="popup3" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 3"><span class="custom-checkbox-mark"></span>Popup #3</label>
              </li>
              
               <li>
                <label class="custom-checkbox-item" for="popup4">
                  <input type="checkbox" value="" required id="popup4" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 4"><span class="custom-checkbox-mark"></span>Popup #4</label>
              </li>
              
                <li>
                <label class="custom-checkbox-item" for="popup5">
                  <input type="checkbox" value="" required id="popup5" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 5"><span class="custom-checkbox-mark"></span>Popup #5</label>
              </li>
              
                <li>
                <label class="custom-checkbox-item" for="popup6">
                  <input type="checkbox" value="" required id="popup6" checked class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 6"><span class="custom-checkbox-mark"></span>Popup #6</label>
              </li>
                <li><hr></li>
                <li>
                <label class="custom-checkbox-item" for="popup7">
                  <input type="checkbox" value="" required id="popup7" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 7"><span class="custom-checkbox-mark"></span>Popup #7</label>
              </li>
              
                <li>
                <label class="custom-checkbox-item" for="popup8">
                  <input type="checkbox" value="" required id="popup8" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 8"><span class="custom-checkbox-mark"></span>Popup #8</label>
              </li>
              
                 <li>
                <label class="custom-checkbox-item" for="popup9">
                  <input type="checkbox" value="" required id="popup9" class="custom-checkbox" name="checkbox[]" aria-required="true" value="Popup 9"><span class="custom-checkbox-mark"></span>Popup #9</label>
              </li>
              
              
              
              
              
              
            </ul>
           </div> 
          </div>
        </div>
        <div class="modal-footer">
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
</body>
</html>