<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Customize Design</title>
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
      <div class="steps-nav">
        <ul class="steps-pills">
          <li><a href="#">
            <d>1.</d>
            <span>Template</span></a></li>
          <li  class="active"><a href="#">
            <d>2.</d>
            <span>Design</span></a></li>
          <li><a href="#">
            <d>3.</d>
            <span>Display Rules</span></a></li>
        </ul>
      </div>
      <div class="nav-action-button">
        <button type="button" class="btn btn-primary-light btn-sm btn-radius"  onClick="poptinRedirect('forms.php');">Back</button>
        <button type="button" class="btn btn-info btn-sm btn-radius" >Next</button>
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
                        <label for="popupName" class="mr-2 minline">Popup name</label>
                        <input type="text" class="form-control" id="popupName" placeholder="My first poptin">
                      </div>
                    </div>
                    <div class="poptin-form-elem no-select-icon p-3 bt-light wth100">
                      <div class="form-group">
                        <label for="popupSize" class="mr-2 minline">Popup size</label>
                        <div class="row whfrmIni">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Width:</label>
                              <input type="text" name="poptin_width" class="form-control wh75  mr-2" id="poptin_width" placeholder="width">
                              px </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Height:</label>
                              <input type="text" name="poptin_height" class="form-control wh75  mr-2" id="poptin_height" placeholder="Height">
                              px </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="poptin-form-elem p-3 wth100 bt-light">
                      <div class="form-group">
                        <label for="popupName" class="mr-2 mb-2">After submission</label>
                        <div class="poptin-form-elem elem-inline">
                          <label class="custom-radio-item">
                            <input type="radio" value="0" checked title="Please Select Your Board" class="custom-radio" name="redirect" >
                            <span class="custom-radio-mark elem-shadow no-border style-dot"></span> Close</label>
                          <label class="custom-radio-item">
                            <input type="radio" value="1" class="custom-radio" name="redirect">
                            <span class="custom-radio-mark  elem-shadow no-border style-dot"></span> Redirect</label>
                          <label class="custom-radio-item">
                            <input type="radio" value="3" class="custom-radio"  name="redirect" >
                            <span class="custom-radio-mark  elem-shadow no-border style-dot"></span> Thank you screen</label>
                        </div>
                      </div>
                    </div>
                    <div class="poptin-form-elem no-select-icon p-3 bt-light wth100 bgDesignContainer" >
                      <div class="form-group">
                        <label for="popupSize" class="mr-2 mb-2  minline">Background design</label>
                      </div>
                      <div class="row wth100">
                        <div class="col-md-12 p-0">
                          <div class="btn-group poptin-group-btns btn-radius toggleGrouped">
                            <button type="button" class="btn btn-default active btn-radius" data-active="widgetBackground"  data-selector="bgDesignContainer">Background</button>
                            <button type="button" class="btn btn-default" data-active="widgetBorder" data-selector="bgDesignContainer">Border</button>
                            <button type="button" class="btn btn-default" data-active="widgetShadow" data-selector="bgDesignContainer">Shadow</button>
                            <button type="button" class="btn btn-default btn-radius" data-active="widgetCorners" data-selector="bgDesignContainer">Corners</button>
                          </div>
                          <!--bgcolor  design widget-->
                          <div class="plugins-widget-area backgound-design-widget active" id="widgetBackground">
                            <div class="widget-header backgound-color-picker">
                              <div class="widget-toggle-button">
                                <button type="button" class="btn btn-primary btn-light-text toggle-widget mr-2 btn-sm btn-radius" data-active="BgcolorPicker" data-selector="widgetBgDesign">Color</button>
                                <button type="button" class="btn btn-default btn-light-text toggle-widget btn-sm btn-radius" data-active="BgGallery" data-selector="widgetBgDesign">Gallery</button>
                              </div>
                              <div class="widget-upload-btn">
                              <a href="#" class="poptin_link btn_upload_bg"><i class="fa fa-upload"></i> <span>Upload</span></a>
                              </div>
                              
                            </div>
                            
                           <div class="widget-item backgound-color-picker widgetBgDesign hdwidget active" id="BgcolorPicker">
                              <input type="text" data-poptinWidget="colorPicker" data-WidgetSelector="#backgound-color-input" id="backgound-color-input" data-defaultColor="#7761DF" />
                            </div>
                            <div class="widget-item backgound-color-picker widgetBgDesign hdwidget" id="BgGallery">
                              <p>BG Gallery Design will come here</p>
                            </div>
                            
                          </div> 
                          <!--border setting widget-->
                          <div class="plugins-widget-area border-design-widget" id="widgetBorder">
                           <div class="widget-item border-design-item">
                            <p>Border Design Widget Will come here</p>
                            </div>
                          </div>
                          
                           <div class="plugins-widget-area border-design-widget" id="widgetShadow">
                           <div class="widget-item border-design-item">
                            <p>Shadow Design Widget Will come here</p>
                            </div>
                          </div>
                          
                          
                          <div class="plugins-widget-area border-design-widget" id="widgetCorners">
                           <div class="widget-item border-design-item">
                            <p>Corner Design Widget Will come here</p>
                            </div>
                          </div>
                           
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">Add elements</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
                  <div class="add-elements-block"> </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">Form builder</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
                  <div class="add-elements-block"> </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">After conversion</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
                  <div class="add-elements-block"> </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">Autoresponder</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
                  <div class="add-elements-block"> </div>
                </div>
              </div>
              <div class="panel panel-primary poptin-panel mb-3">
                <div class="panel-heading">
                  <h3 class="panel-title">Advanced settings</h3>
                  <span class="pull-right clickable"><i class="icon icon-down-open"></i></span> </div>
                <div class="panel-body">
                  <div class="add-elements-block"> </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7">
              <div class="poptin-form-container design-preview-block p-0">
                <div class="design-preview-options p-2">
                  <div class="preview-option-btns"> <a href="#" class="active" data-view="desktop-view" data-container=".design-preview-modes"><i class="icon icon-laptop"></i> Desktop</a> <a href="#" data-view="mobile-view" data-container=".design-preview-modes"><i class="icon icon-mobile"></i> Mobile</a> </div>
                  <div class="preview-fullscreen"> <a href="#" class="btn-fullscreen"></a> </div>
                </div>
                <div class="design-preview-body-container">
                  <div class="design-preview-modes desktop-view"> </div>
                  <div class="design-preview-footer button-container text-center">
                    <button type="button" class="btn btn-default-light btn-sm btn-radius btn-shadow mr-2" data-dismiss="modal">Reset</button>
                    <button type="button" class="btn btn-default-light btn-sm btn-radius btn-shadow">Preview</button>
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