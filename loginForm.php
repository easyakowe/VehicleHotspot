<?php
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Vehicle Hotspot :: Login</title>
</head>
<body>

<style type="text/css">
  .form {
    background: #AD1C1B;
    padding: 30px;
  max-width: 400px;
  margin: 40px auto;
  border-radius: 4px;
    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  }
  *, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}

body {
  background: #ffffff; /* #c1bdba */
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}


h2 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

h1 {
    text-align: center;
    color: #1ab188;
    font-weight: 1000;
    margin: 0;
}

span {
    color: #1ab188;
    font-weight: bold;
}

p {
    text-align: center;
    color: #ffffff;
    margin: 0px 0px 50px 0px;
}

div.info {
    color: pink;
    display: box;
    text-align: center;
    padding: 5px;
    margin-top: -20px;
    margin-bottom: 15px;
    border: 1px solid red;
    background: #66131c;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #ffcc33;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}

</style>

<body>
  <div class="form">
      
      <h1 style="color: white;">Vehicle <span style="color: orange;">Hotspot</span></h1>
      <br>
      
      <div class="">

         <div id="login">   
          <h2>Login Here!</h2>
          
          <form action="login.php" method="POST" autocomplete="off">
          
            <div class="field-wrap">
           
            <input type="text" required autocomplete="off" name="u_name" placeholder="Enter Username *" />
          </div>
          
          <div class="field-wrap">
            
            <input type="password" required autocomplete="off" name="p_word" placeholder="Enter Password *"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block" name="login" />Log In</button><br>

          <p>New to Vehicle Hotspot?  <a href="signupForm.php">Sign up</a></p>
          
          </form>

        </div>
          
      </div><!-- tab-content -->
      
</div> <!-- /form -->


<?php

  include "db.php";

  if (isset($_POST['login'])) {

    $u_name = $_POST['u_name'];
    $p_word = $_POST['p_word'];


    //Error handlers
    if (empty($u_name) || empty($p_word)) {
      header("Location: ../error.php?login=empty");
      exit();
    }else{

      $sql = "SELECT * FROM users WHERE u_name = '$u_name'"; 
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        echo '<script>alert("Invalid Username or password");</script>';
      exit();
      }else{
        if ($row = mysqli_fetch_assoc($result)) {
          //De-hashing the password
          $hashedPwdCheck = password_verify($p_word, $row['p_word']);
          if ($hashedPwdCheck == false) {
          echo '<script>alert("Invalid Username or password");</script>';
          exit();
          }elseif ($hashedPwdCheck == true) {
            //Log in the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['f_name'];
            $_SESSION['u_last'] = $row['l_name'];
            $_SESSION['u_email'] = $row['email'];
            $_SESSION['u_name'] = $row['u_name'] = "$u_name";

            echo '<script>alert("Welcome!")</script>';          
            header("Location: index.php");

          }
        }
      }
    }
}

?> 




</body>
</html>

















