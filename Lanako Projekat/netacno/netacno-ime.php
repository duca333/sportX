
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="wrapper">
    <div class="market">
        <h1>
        <h1>
        <span style="color:black;">S</span>
            <span style="color:#66FF00;">P</span>
            <span style="color:orange;"><i class="fa-solid fa-basketball"></i></span>
            <span style="color:#66FF00;">R</span>
            <span style="color:#66FF00;">T</span>
            <span style="color:black;">X</span>
        </h1>
            </h1>
        </div>
      <div class="container">
        <div class="title">
          <span>Login</span>
        </div>
        <form action="../login-request.php" method="post">
          <div class="row">
            <i class="fa fa-user"></i>
            <input type="text" name="email-or-username" id="" placeholder="Username ili E-mail" />
          </div>
          <div class="row">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" id="" placeholder="Password" />
          </div>

          <div class="row pass">
          <h4 style = "color:red;">* Netačan Username *</h4>
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
            Not a member? <a href="../register.php">Singup now</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<script
  src="https://kit.fontawesome.com/8d3290fc3c.js"
  crossorigin="anonymous"
></script>

