<?php 
  $p = "User account modification"; 
  require '../app/admin_fetchData_modify.php';
  $userID = $_GET['user'];
?>

<div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Modify user account</h4>
          <form action='../app/admin_modify_user.php?user=<?php echo $userID; ?>' method='POST' class="needs-validation">
            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <input type="text" name="username" class="form-control" id="username" value="<?php echo "$userName"; ?>">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" name="mail" class="form-control" id="email" value="<?php echo "$userMail";?>">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
          </form>
          <p><a href="index.php?p=list">Back to panel</a></p>
        </div>
      </div>