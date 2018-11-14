<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Autoresponder Edit</title>
<!-- plugins:css -->
<?php include('includes/header.php');?>
<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body >
<div class="container-scroller full-screen"> 
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"> <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo-purple-text.svg" alt="logo"></a> </div>
    <div class="navbar-menu-wrapper text-center align-items-center justify-content-end">
      <h1 class="full-page-title">Autoresponder edit</h1>
      
      <div class="nav-action-button">
       <button type="button" class="btn btn-primary-light btn-sm btn-radius" onClick="window.location.href='autoresponder.php'">Back</button>
          <button type="button" class="btn btn-info btn-sm btn-radius">Finish</button>
      </div>
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"> <span class="mdi mdi-menu"></span> </button>
    </div>
  </nav>
  <style>
  .clickable{
    cursor: pointer;   
}

.panel-heading span {
	margin-top: -20px;
	font-size: 15px;
}
  </style>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper"> 
    
    <!-- partial:partials/_sidebar.html -->
    <div class="main-panel ">
      <div class="content-wrapper">
        <div class="container"> 
          
          <!-- page table section-->
          <div class="row poptin-forms mb-3">
            <div class="col-md-5 col-lg-5">
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">General Settings</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body no-padding">
                  <div class="form-inline">
                    <div class="poptin-form-elem p-3 wth100">
                      <div class="form-group">
                        <label for="autoresponame" class="mr-2">Autoresponder name</label>
                        <input type="text" class="form-control" id="autoresponame" placeholder="My first autoresponder name">
                      </div>
                    </div>
                    <div class="poptin-form-elem no-select-icon p-3 bt-light wth100">
                      <div class="form-group">
                        <label for="autoresponame" class="mr-2">Timing</label>
                        <select class="first-select filter popTinSelect" data-placeholder="Immediately" name="AutorespoTiming"  id="AutorespoTiming" >
                          <option value="1">Immediately</option>
                          <option value="2">other option 2 </option>
                          <option value="3">other option 3 </option>
                          <option value="4">other option 4 </option>
                          <option value="5">other option 5 </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">Connect popups</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
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
                            <span class="custom-checkbox-mark"></span>Popup #9 </label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7">
              <div class="poptin-form-container autoresponder-right-block p-0">
                <div class="form-inline form-right-h p-3">
                  <div class="form-group mb-2 poptin-form-elem elem-inline half-block">
                    <label for="sendername" class="mr-2">Sender Name</label>
                    <input type="text"  class="form-control-plaintext form-control" id="sendername" placeholder="Sender Name">
                  </div>
                  <div class="form-group mb-2 poptin-form-elem elem-inline half-block">
                    <label for="senderemail" class="mr-2">Sender Email</label>
                    <input type="text"  class="form-control-plaintext form-control" id="senderemail" placeholder="Sender Email">
                  </div>
                  <div class="form-group mb-2 poptin-form-elem elem-inline full-elem">
                    <label for="sendersubject" class="mr-2">Subject</label>
                    <input type="text"  class="form-control-plaintext form-control" id="sendersubject" placeholder="Subject">
                  </div>
                </div>
                
                <div class="autoresponder-body-container"></div>
              </div>
            </div>
            
            <div class="col-md-12 col-lg-12">
            <div class="button-container text-right">
             <button type="button" class="btn btn-default-light btn-sm btn-radius btn-shadow mr-2" data-dismiss="modal">Reset</button>
          <button type="button" class="btn btn-default-light btn-sm btn-radius btn-shadow">Send Test</button>
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

<!---Form Popups-->
<div id="Modalchangepassword" class="modal fade poptin-modal-theme modal-md" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <form class="poptin-general-form popup-form">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="curpwd">Current password:</label>
            <input type="password" class="form-control" id="curpwd">
          </div>
          <div class="form-group">
            <label for="newPwd">New password:</label>
            <input type="password" class="form-control" id="newPwd" placeholder="At least 6 charactres">
          </div>
          <div class="form-group">
            <label  for="Vrpwd">Verify password:</label>
            <input type="password" class="form-control" id="Vrpwd">
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
</body>
</html>