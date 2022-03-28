<?php
  include_once './lib/header.php';
?>
      <div class="form-wrapper">
        <h1 class="form-title">Login Page</h1>
        <form class="form-form">
          <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" name="email" />
          </div>
          <div class="form-input">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              placeholder="Password"
              name="password"
            />
          </div>
          <div class="form-button">
            <button type="submit">Sign In</button>
            <a href="./registration.php">Don't have an account? Click here</a>
          </div>
        </form>
      </div>
<?php
  include_once './lib/footer.php';
?>
