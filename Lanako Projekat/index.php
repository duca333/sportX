
<?php

  include "header.php";

?>
 <div class="container">
        <div class="title">
          <span>Login</span>
        </div>
        <form action="login-request.php" method="post">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" name="email-or-username" id="" placeholder="Username ili E-mail" />
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" id="" placeholder="Password" />
          </div>

          <div class="row pass">
            <a href="./forgot/enter-username.php">Forgot Password?</a>
          </div>
          <div class="row">
            <input
              class="login-btn"
              type="submit"
              name="login"
              id=""
              value="Login"
            />
          </div>
          <div class="singup-link">
            Not a member? <a href="register.php">Singup now</a>
          </div>
        </form>
      </div>
    </div>

  





    <?php

include "footer.php";

?>
