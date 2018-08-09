<?php 
  $p = "User account modification"; 
  require '../app/admin_fetchData_modify.php';
  $userID = $_GET['user'];

  if(!empty($_SESSION) && $_SESSION['isAdmin'] == 1){

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
            <div class="mb-3">
              <label for="isAdminCheck">Is Admin account ?</label>
              <br>
              <input type="hidden" value="0" name="isAdminCheck" class="form-check" id="isAdminCheckNo">
              <input type="checkbox" value="1" name="isAdminCheck" class="form-check" id="isAdminCheckYes" onclick="changeValue()">

              <script type="text/javascript">
                if(<?php echo($userIsAdmin == 1) ;?>) {
                  document.getElementById("isAdminCheckYes").checked = true;
                  document.getElementById("isAdminCheckNo").disabled = true;
                }
                function changeValue(){
                  document.getElementById("isAdminCheckNo").disabled = false;
                }
              </script>

            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
          </form>
          <p><a href="index.php?p=list">Back to panel</a></p>
        </div>
      </div>
<?php
  }elseif(empty($_SESSION)){

        http_response_code(401);
        $p = http_response_code(). " - Unauthorized -";
        echo "<h3>You are not authenticated by the server.</h3><br>";
        echo $_SERVER['SERVER_SOFTWARE'];

    }else{
      
        http_response_code(403);
        $p = http_response_code(). " - Forbidden -";
        echo "<h3>You are not allowed to access to this page.</h3><br>";
        echo $_SERVER['SERVER_SOFTWARE'];

    }
?>