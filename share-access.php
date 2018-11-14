<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Share Access</title>
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
              <h1 class="page-title"> Share access</h1>
            </div>
          </div>
          
          <!-- page table section-->
          <div class="row poptin-forms mb-3">
            <div class="col-md-12 col-lg-12">
              <div class="poptin-form-container sharing-container">
                <p class="text-primary pl-20 mb-4"><i class="general-icon-text">!</i> Share access to your account with users that will manage your account and poptins for you </p>
                <form class="form-horizontal">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group poptin-form-elem">
                        <label for="share_username">Username</label>
                        <input type="text" class="form-control" id="share_username" value="" placeholder="Avi">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group poptin-form-elem">
                        <label for="share_email">Email</label>
                        <input type="text" class="form-control" id="share_email" value="" placeholder="avitheman@gmail.com">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-sm btn-radius btn-shadow btn-giveaccess">Give Access</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row poptin-tables mb-3">
            <div class="col-md-12 col-lg-12">
              <table class="table table-striped table-radius ">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date created</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">Moria Jovany</td>
                    <td class="text-center">morai1672@gmail.com</td>
                    <td class="text-center">12/05/18</td>
                    <td class="text-center"><a href="#" class="text-primary underlined-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">Moria Jovany</td>
                    <td class="text-center">morai1672@gmail.com</td>
                    <td class="text-center">12/05/18</td>
                    <td class="text-center"><a href="#" class="text-primary underlined-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">Moria Jovany</td>
                    <td class="text-center">morai1672@gmail.com</td>
                    <td class="text-center">12/05/18</td>
                    <td class="text-center"><a href="#" class="text-primary underlined-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">Moria Jovany</td>
                    <td class="text-center">morai1672@gmail.com</td>
                    <td class="text-center">12/05/18</td>
                    <td class="text-center"><a href="#" class="text-primary underlined-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td class="text-center">Moria Jovany</td>
                    <td class="text-center">morai1672@gmail.com</td>
                    <td class="text-center">12/05/18</td>
                    <td class="text-center"><a href="#" class="text-primary underlined-link">Delete</a></td>
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