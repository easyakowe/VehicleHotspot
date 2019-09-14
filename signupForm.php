<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Hotspot :: Register</title>
</head>

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

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content  {
  display: none;
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

input, select, option, textarea {
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

 <div id="signup">   
          <h2>Sign Up for Free</h2>
          
          <form action="register.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              
              <input type="text" required autocomplete="off" name="f_name" placeholder="First name *" />
            </div>
        
            <div class="field-wrap">
             
              <input type="text" required autocomplete="off" name="l_name" placeholder="Last name *" />
            </div>
          </div>

          
          <div class="field-wrap">
            
            <input type="email" required autocomplete="off" name="email" placeholder="Email Address *"/>
          </div>

			
         
          
          <div class="top-row">
          <div class="field-wrap">
            
            <select type="text" required autocomplete="off" name="sex" placeholder="Sex *" required="">
            <option>Sex *</option>
            <option>Male</option>
            <option>Female</option>
            </select>
          
          </div>          
          <div class="field-wrap">
            
            <input type="text"required autocomplete="off" name="country" placeholder="Country *"/>
          </div>
          </div>

           
           <div class="field-wrap">
            
            <input type="text"required autocomplete="off" name="u_name" placeholder="Username *"/>
          </div>
          
          <div class="field-wrap">
            
            <input type="password"required autocomplete="off" name="p_word" placeholder="Set a password *"/>
          </div>
          
          <button type="submit" class="button button-block" name="register" id="register">Register</button>
          
          </form>
          <h4 style="text-align: center;">Already have an account?<a href="loginForm.php"> Login</a></h4>

        </div>  
</body>
</html>

<script>
  $(document).ready(function(){
    $('#register').click(function(){
      var image_name = $('#image').val();
      if (image_name == '') {
        alert("Please Select Image!");
        return false;
      }
      else{
        var extension = $('#image').val().split('.').pop().toLowerCase();
      }
    });
  });
</script>