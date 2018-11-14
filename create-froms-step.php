<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Select Popup Template</title>
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
          <li class="active"><a href="#">
            <d>1.</d>
            <span>Template</span></a></li>
          <li><a href="#">
            <d>2.</d>
            <span>Design</span></a></li>
          <li><a href="#">
            <d>3.</d>
            <span>Display Rules</span></a></li>
        </ul>
      </div>
      <div class="nav-action-button">
        <button type="button" class="btn btn-primary-light btn-sm btn-radius"  onClick="poptinRedirect('forms.php');">Back</button>
        <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');">Next</button>
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
          <div class="row dashboard-head mb-4">
            <div class="col-md-12 col-lg-12">
              <h1 class="page-title-2x text-center"> What you want to accomplish?</h1>
            </div>
          </div>
          <!-- page table section-->
          <div class="row poptin-steps mb-3 template-type-selection">
            <div class="col-md-3 col-lg-3 col-sm-12">
              <div class="card setps-card"> <a href="#" data-type="leads" data-fContainer=".templates-preview-container"> <i class="icon icon-leads"></i>
                <p class="step-info-text">we've implemented the widget and connected it to our within minutes. rate skyrocketed!</p>
                <span class="card-title">Contact forms</span> </a> </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
              <div class="card setps-card"> <a href="#" data-type="inc-sales" data-fContainer=".templates-preview-container"> <i class="icon icon-cart"></i>
                <p class="step-info-text">we've implemented the widget and connected it to our within minutes. rate skyrocketed!</p>
                <span class="card-title">Increase sales</span> </a> </div>
            </div>
            
            
          </div>
          <div class="row poptin-steps mb-5">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="show_templates_container text-center"> <a href="#" class="poptin_link font_small" data-fContainer=".templates-preview-container">I’m not sure, show me all the templates</a> </div>
            </div>
          </div>
        </div>
        <div class="templates-preview-container pb-4">
          <div class="templates-filters">
         <div class="templates-filters-head p-4">
            <ul class="simplefilter">
              <span class="filter-text"> Fillter by type:</span>
				<!-- <li class="fltr-controls active" data-filter="all">All</li>-->              
				<li class="fltr-controls active" data-filter="1">Vertical</li>
              <li class="fltr-controls" data-filter="2">Horizontal</li>
              <li class="fltr-controls" data-filter="3">Mobile only</li>
            </ul>
         </div>   
            <div class="filtr-container">
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort="Busy streets"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_1">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 5" data-sort="Luminous night"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_2">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 4" data-sort="City wonders"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_3">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="In production"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_4">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3, 4" data-sort="Industrial site"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_5">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Peaceful lake"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_6">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="1, 5" data-sort="City lights"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_7">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="2, 4" data-sort="Dreamhouse"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_8">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
              <div class="col-xs-6 col-sm-4 col-md-3 filtr-item" data-category="3" data-sort="Restless machines"> <img class="img-responsive" src="assets/images/template-img.jpg" alt="sample image"> <span class="item-btns">
                <button type="button" class="btn btn-primary-light btn-sm btn-radius btn-template-preview" data-format="format_9">Preview</button>
                <button type="button" class="btn btn-info btn-sm btn-radius" onClick="poptinRedirect('customize.php');" >Customize</button>           
                </span> </div>
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

<!-- Form Popups--> 

<!-- container-scroller -->
<?php include('includes/footer.php');?>
</body>
</html>