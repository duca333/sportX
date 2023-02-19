
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
        <span style="color:black;">S</span>
            <span style="color:#66FF00;">P</span>
            <span style="color:orange;"><i class="fa-solid fa-basketball"></i></span>
            <span style="color:#66FF00;">R</span>
            <span style="color:#66FF00;">T</span>
            <span style="color:black;">X</span>
        </h1>
        </div>
      <div class="container">
        <div class="title">
          <span>Reset</span>
        </div>
        <form action="veirfy-questions-request.php" method="post">
          <div class="row">
            <i class="fa fa-question"></i>
            <input type="text" name="sq" id="" placeholder=" Secret Question" />
          </div>
          <div class="row">
            <i class="fa fa-key"></i>
            <input type="text" name="sa" id="" placeholder=" Secret Answer" />
          </div>
          
          <div class="row">
            <input
              class="login-btn"
              type="submit"
              name="reset"
              id=""
              value="Posalji"
            />
          </div>
          <div class="singup-link">
            Suddenly remembered ? <a href="../index.php">Login</a>
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

