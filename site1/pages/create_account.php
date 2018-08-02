<?php
    $p = "Administration panel";

    $sql = "SELECT usr_id, usr_login, usr_mail, DATE_FORMAT(usr_creation, \"%d/%m/%Y\") AS inscription FROM users ORDER BY usr_creation ";
    $query = $conn->prepare($sql);
?>

<ul>
    <li><a href="index.php?p=list">Accounts lists</a></li>
    <li class="selected"><a href="index.php?p=create">Create account</a></li>
    <li><a href="">Modify account</a></li>
    <li><a href="">Delete account</a></li>
    <li><a href="">Reset password</a></li>
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
              <input type="checkbox" value="1" name="isAdminCheck" class="form-check" id="isAdminCheckYes">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
          </form>
          <p><a href="index.php?p=admin">Back to home</a></p>
        </div>
      </div>
</div>
<a href="../app/disconnect_user.php"><p>Se déconnecter</p></a>