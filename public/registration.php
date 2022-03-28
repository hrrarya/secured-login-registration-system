<?php
  include_once './lib/header.php';

  $error_msg = 'hell0o';
  if( isset($_POST['register']) && !empty($_POST['register'])) {

    $name = $user->checkInput($_POST['name']);
    $email = $user->checkInput($_POST['email']);
    $pass = $user->checkInput($_POST['password']);
    $confirm_pass = $user->checkInput($_POST['confirm_password']);

    if( $pass !== $confirm_pass) {
      // $error_msg = 'Password doesn\'t matched with confirm password';
      $error_msg = $pass;
      echo  $error_msg;
    }

  }

?>
      <div class="form-wrapper">
        <h1 class="form-title">Registration Page</h1>
        <form name="register" action="" class="form-form" method="post">
          <div class="form-input">
            <label for="full-name">Full Name</label>
            <input
              type="text"
              id="full-name"
              placeholder="Full Name"
              name="name"
            />
          </div>
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
          <div class="form-input">
            <label for="confirm-password">Confirm Password</label>
            <input
              type="password"
              id="confirm-password"
              placeholder="Confirm Password"
              name="confirm_password"
            />
          </div>
          <div class="form-button">
            <button type="submit">Sign Up</button>
            <a href="./login.php">Already have an acount? Click here</a>
          </div>
        </form>

      </div>
      <?php
        if( $error_msg !== '') {
          ?>
          <div class="message_field error">
            <p><?php echo $error_msg ?></p>
          </div>
          <?php
        }
      ?>
<?php
  include_once './lib/footer.php';
?>
