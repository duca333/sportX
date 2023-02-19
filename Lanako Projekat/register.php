<?php

  include "header.php";

?>
 <div class="container">
        <div class="title">
          <span>Login</span>
        </div>
        <form action="register-request.php" method="post">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" name="username" id="" placeholder="Username" />
          </div>
          <div class="row">
          <i class="fa-regular fa-envelope"></i>
            <input type="email" name="email" id="" placeholder="E-Mail" />
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" id="" placeholder="Password" />
          </div>
          <div class="row">
            <i class="fa fa-question"></i>
            <input type="text" name="sq" id="" placeholder="Secret Question (Reset Password)" required/>
          </div>
          <div class="row">
            <i class="fa fa-key"></i>
            <input type="text" name="sanswer" id="" placeholder="Secret Answer (Reset Password)" required/>
          </div>
          <div class="row">
            <input
              class="login-btn"
              type="submit"
              name="register"
              id=""
              value="Register"
            />
          </div>
          <div class="singup-link">
            Already a member? <a href="index.php">Login now</a>
          </div>
        </form>
      </div>
    </div>
    <?php

include "footer.php";

?>