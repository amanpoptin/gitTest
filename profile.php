<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Poptin Profile</title>
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
              <h1 class="page-title"> Profile</h1>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-forms mb-3">
            <div class="col-md-12 col-lg-12">
              <div class="poptin-form-container">
                <form class="form-horizontal">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName">
                      </div>
                      <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName">
                      </div>
                      <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone">
                      </div>
                      <div class="form-group">
                        <label for="companyName">Company name</label>
                        <input type="text" class="form-control" id="companyName">
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address">
                      </div>
                      <div class="form-group">
                        <label for="vat">Vat number</label>
                        <input type="text" class="form-control" id="vat">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="apiKey">Zapier API key</label>
                        <input type="text" class="form-control" id="apiKey" value="GB5Tczz7ag5GyJVqM7rH2FUmeZ" readonly>
                      </div>
                      <div class="form-group">
                        <label for="userId">User ID</label>
                        <input type="text" class="form-control" id="userId" value="GB5Tczz7ag5GyJVqM7rH2FUmeZ" readonly>
                      </div>
                      <div class="form-group">
                        <label for="Deleteleads">Delete leads automatically</label>
                        <div class="poptin-form-elem wth100">
                          <select class="first-select filter popTinSelect wth100" data-placeholder="dont store leads" name="Deleteleads"  id="Deleteleads" >
                            <option value="1">dont store leads</option>
                            <option value="2">other option 2 </option>
                            <option value="3">other option 3 </option>
                            <option value="4">other option 4 </option>
                            <option value="5">other option 5 </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="invoiceEmailId"> Get invoices by email <a href="javascript:void(0);" class="form-link">(Add more)</a></label>
                        <input type="text" class="form-control" id="invoiceEmailId" value="poptin@poptin.com">
                      </div>
                      <div class="form-group"> <a href="javascript:void(0);" data-toggle="modal" data-target="#Modalchangepassword" class="form-link">Change password</a> </div>
                    </div>
                    <div class="col-md-12 text-right">
                      <button type="button" class="btn btn-primary-light btn-sm btn-radius" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-info btn-sm btn-radius" data-dismiss="modal">Save</button>
                    </div>
                  </div>
                </form>
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