<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Billing Settings</title>
<!-- plugins:css -->
<?php include('includes/header.php');?>
<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
<style>
					.poptin-package-toggle .btn-toggle.btn-lg:before 
					{
						content: '';
						left: -5rem;
					}
						.poptin-package-toggle .btn-toggle.btn-lg:after {
						content: '';
						right: -5rem;
						opacity: 0.5;
						}
					</style>
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
              <h1 class="page-title"> Billing info</h1>
            </div>
          </div>
          <!-- page table section-->
          <div class="row client-billing-details mb-3 pb-3">
            <div class="col-md-3">
              <div class="poptin-form-container affiliate-balance text-center">
                <p class="title-caption">Current Plan</p>
                <h3 class="caption-value text-primary">Free</h3>
              </div>
            </div>
            <div class="col-md-9">
              <div class="account-billing-info">
                <div class="account-billing-text">
                  <p>Want more leads? Serve visitors relevant offers based on their unique<br>
                    behavior and substantially improve conversion rates.</p>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="assets/images/client-icon-1.png"/></div>
                  <div class="client-info-text"><span class="client-name">Mario lopez</span> <span class="client-country"> Brazil</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row poptin-tables mb-3">
            <div class="col-md-12">
              <div class="poptin-packages-block pt-3">
                <div class="poptin-package-toggle"> <a href="javascript:void(0);" class="package-btn ptmonthly active" data-active="monthly">Monthly Plan</a>
                  <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" data-active="monthly" id="toogle-package">
                  <div class="handle"></div>
                  </button>
                  <a href="javascript:void(0);" class="package-btn ptyearly" data-active="yearly">Annual Plan (You Save 20%)</a> </div>
                <div class="pricing-item  poptin-priceitem-monthly " style="--my-color-var: #ff6376; background:url(assets/images/pricing-icon-1.svg) no-repeat;">
                  <h3 style="color:#ff6376">Free</h3>
                  <div class="monthly-package-sub psubact">
                    <h4 class="package-sub-text">Free</h4>
                  </div>
                  <div class="yearly-package-sub psubact hidepkgsub">
                    <h4 class="package-sub-text">Free</h4>
                  </div>
                  <div class="package-desc">
                    <ul>
                      <li>500 Views / mo</li>
                      <li>1 domain</li>
                      <li>Unlimited poptins</li>
                      <li class="disabled">Autoresponder</li>
                      <li class="disabled">Branded</li>
                      <li class="disabled">Manage accounts</li>
                      <li class="disabled">Manage users</li>
                      <li>Chat support</li>
                    </ul>
                  </div>
                  <span class="itemcolor-seprator" style="background:#ff6376"></span></div>
                <div class="pricing-item  poptin-priceitem-monthly " style="--my-color-var: #7761df; background:url(assets/images/pricing-icon-2-1.svg) no-repeat;">
                  <h3 style="color:#7761df">Basic</h3>
                  <div class="monthly-package-sub psubact">
                    <h4 class="package-sub-text"><sup>$</sup><span>19</span><sub>/ mo</sub></h4>
                  </div>
                  <div class="yearly-package-sub psubact hidepkgsub">
                    <h4 class="package-sub-text"><sup>$</sup><span>15</span><sub>X 12</sub></h4>
                    <span class="offer-text-one">Billed annualy</span><span class="offer-text-two">Save $48</span></div>
                  <div class="package-desc">
                    <ul>
                      <li>10,000 Views / mo</li>
                      <li>1 domain</li>
                      <li>Unlimited poptins</li>
                      <li>1,000 autoresponder</li>
                      <li>Unbranded</li>
                      <li class="disabled">Manage accounts</li>
                      <li class="disabled">Manage users</li>
                      <li>Chat &amp; email support</li>
                    </ul>
                  </div>
                  <span class="itemcolor-seprator" style="background:#7761df"></span></div>
                <div class="pricing-item  poptin-priceitem-monthly " style="--my-color-var: #51dbee; background:url(assets/images/pricing-icon-3.svg) no-repeat;">
                  <h3 style="color:#51dbee">Pro</h3>
                  <div class="monthly-package-sub psubact">
                    <h4 class="package-sub-text"><sup>$</sup><span>49</span><sub>/ mo</sub></h4>
                  </div>
                  <div class="yearly-package-sub psubact hidepkgsub">
                    <h4 class="package-sub-text"><sup>$</sup><span>39</span><sub>X 12</sub></h4>
                    <span class="offer-text-one">Billed annually</span><span class="offer-text-two">Save $120</span></div>
                  <div class="package-desc">
                    <ul>
                      <li>50,000 Views / mo</li>
                      <li>4 domain</li>
                      <li>Unlimited poptins</li>
                      <li>5,000 autoresponder</li>
                      <li>Unbranded</li>
                      <li class="disabled">Manage accounts</li>
                      <li class="disabled">Manage users</li>
                      <li>Chat &amp; email support</li>
                    </ul>
                  </div>
                  <span class="itemcolor-seprator" style="background:#51dbee"></span></div>
                <div class="pricing-item  poptin-priceitem-monthly last-item" style="--my-color-var: #ffc163; background:url(assets/images/pricing-icon-4.svg) no-repeat;">
                  <h3 style="color:#ffc163">Agency</h3>
                  <div class="monthly-package-sub psubact">
                    <h4 class="package-sub-text"><sup>$</sup><span>99</span><sub>/ mo</sub></h4>
                  </div>
                  <div class="yearly-package-sub psubact hidepkgsub">
                    <h4 class="package-sub-text"><sup>$</sup><span>79</span><sub>X 12</sub></h4>
                    <span class="offer-text-one">Billed annually</span><span class="offer-text-two">Save $240</span></div>
                  <div class="package-desc">
                    <ul>
                      <li class="with_select">
                      <div class="poptin-form-elem wth100 no-select-icon">
                          <select class="first-select filter popTinSelect" data-placeholder="150,000 Views / mo" name="PackageDd"  id="PackageDd" >
                            <option value="1">150,000 Views / mo</option>
                            <option value="2">150,000 Views / mo</option>
                            <option value="3">150,000 Views / mo</option>
                            <option value="4">150,000 Views / mo</option>
                            <option value="5">150,000 Views / mo</option>
                          </select>
                        </div>
                      </li>
                      <li>Unlimited domain</li>
                      <li>Unlimited poptins</li>
                      <li>15,000 autoresponder</li>
                      <li>Unbranded</li>
                      <li>Manage accounts</li>
                      <li>Manage users</li>
                      <li>Premium support</li>
                    </ul>
                  </div>
                  <span class="itemcolor-seprator" style="background:#ffc163"></span></div>
              </div>
            </div>
            
            <div class="col-md-6 offset-md-3">
            <div class="package-footer text-center pt-5">
            <p class="text-primary package-footer-text"><i class="fa fa-lock"></i> Poptin always keeps you safe</p>
            <div class="text-center"><img src="assets/images/cards2.png" class="wth100"/></div>
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