<?php
    $p = "Administration panel";
    $_POST['isAdminCheck'] = 0 ;

    if(!empty($_SESSION) && $_SESSION['isAdmin'] == 1){
?>

<ul>
    <li><a href="index.php?p=list">Accounts lists</a></li>
    <li class="selected"><a href="index.php?p=create">Create account</a></li>
    <li><a href="index.php?p=delete">Delete account</a></li>
    <li><a href="index.php?p=pwreset">Reset password</a></li>
</ul>

<div>
    <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Create user account</h4>
          <form action='../app/admin_register_user.php' method='POST' class="needs-validation">
            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="email" placeholder="Password" required>
              <div class="invalid-feedback">
                Please enter a password.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" name="mail" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="mb-3">
              <label for="isAdminCheck">Is Admin account ?</label>
              <br>
              <input type="hidden" value="0" name="isAdminCheck" class="form-check" id="isAdminCheckNo">
              <input type="checkbox" value="1" name="isAdminCheck" class="form-check" id="isAdminCheckYes">

              <script type="text/javascript">
                if(document.getElementById("isAdminCheckYes").checked) {
                document.getElementById("isAdminCheckNo").disabled = true;
                }
              </script>

            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
          </form>
          <p><a href="index.php?p=admin">Back to home</a></p>
        </div>
      </div>
</div>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>

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