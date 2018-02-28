<div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Create your account</h4>
          <form action='../app/register_user.php' method='POST' class="needs-validation">
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
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
          </form>
          <p><a href="index.php?p=signin">Se connecter</a></p>
        </div>
      </div>