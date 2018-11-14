<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Affiliate</title>
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
              <h1 class="page-title"> Affiliate program</h1>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-forms mb-3">
            <div class="col-md-8 col-lg-8">
              <div class="poptin-form-container sharing-container">
                <p class="text-primary pl-20 mb-4"><i class="general-icon-text">!</i> Your cumulative commission will be 25% of all your active referral payments.</p>
                <form class="form-horizontal">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="affi>liateLink" id="affiliateLinkItext" data-toggle="tooltips" data-placement="top" title="Copied!" data-animation="false">Your affiliate link</label>
                        <div class="row">
                          <div class="col-md-10" >
                            <input type="text" class="form-control" id="affiliateLink" value="https://www.poptin.com/?poptin_apt=xpoicmon5pxtipGtPo5xr" readonly >
                          </div>
                          <div class="col-md-2">
                            <button type="button" class="btn btn-info btn-sm btn-radius btn-shadow btn-copyclip" data-clipboard-target="#affiliateLink" data-tooltip-target="#affiliateLinkItext" >Copy</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row mt-5  mb-4">
                    <div class="col-md-12">
                      <div class="social-sharing-part">
                        <div class="form-group">
                          <label class="mb-3">Share your affiliate link on</label>
                          <div class="social-sharing-block mt-3">
                            <ul class="poptin-sharing-buttons psb-big">
                              <li><a href="#" class="share-icon share-fb">Facebook</a></li>
                              <li><a href="#" class="share-icon share-twitter">Twitter</a></li>
                              <li><a href="#" class="share-icon share-linkedin">Linkedin</a></li>
                              <li><a href="#" class="share-icon share-mail">Mail</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <div class="poptin-form-container affiliate-balance text-center">
                <p class="title-caption">Current balance</p>
                <h3 class="caption-value text-primary">100,457$</h3>
                <button type="button" class="btn btn-primary-light btn-sm btn-radius">Draw money</button>
              </div>
              <div class="poptin-form-container affiliate-paypal-account text-center  mt-3">
                <label class="label-caption">Your <img class="" src="assets/images/paypal-icon.png"/> account</label>
                <form class="poptin-general-form ">
                  <input type="text" class="form-control" id="email" placeholder="Paypal Accont Email id" value=" avitheman@gmail.com">
                  <button type="button" class="btn btn-primary-light btn-sm btn-radius">Draw money</button>
                </form>
              </div>
            </div>
          </div>
          <div class="row poptin-tables mb-3">
            <div class="col-md-12 col-lg-12">
             <h3 class="module-tilte"> Total referrals and commission</h3>
              <table class="table table-striped table-radius ">
                <thead>
                  <tr>
                    <th scope="col">Number of yearly users (commissions) </th>
                    <th scope="col">Number of monthly users (commissions) </th>
                    <th scope="col">Packages</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Free</td>
                  </tr>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Basic</td>
                  </tr>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Pro</td>
                  </tr>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Agency</td>
                  </tr>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Custom</td>
                  </tr>
                  <tr>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">($0) 0 </td>
                    <td class="text-center">Agency</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <div class="col-md-8 col-lg-8">
            <div class="grouped-caption">
             <h3 class="module-tilte float-left"> Total referrals and commission</h3>
              <div class="poptin-form-elem elem-inline ml-3">
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
            
             
              <table class="table table-striped table-radius ">
                <thead>
                  <tr>
                    <th scope="col">Payment date</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                 <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                  <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                  <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                  <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                 <tr>
                    <td class="text-center">25/08/18</td>
                    <td class="text-center">100,542$</td>
                  </tr>
                </tbody>
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