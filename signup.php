<?php include('server.php') ?>
<html>
<style>
* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>





<form action="signup.php" method="POST" style="border:1px solid #ccc">
<?php include('errors.php') ?>
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password2" required>
    
    <label for="dob"><b>DOB:</b></label>
    <input type="text" placeholder="Enter DOB:" name="dob" required>

    <label for="gender"><b>Gender</b></label>
    <input type="radio" name="gender" value="male" required>Male
    <input type="radio" name="gender" value="female" required>Female
    
    <br><br>

    <label for="height"><b>Height:</b></label>
    <input type="text" placeholder="Enter Height(in cm):" name="height" required>

    <label for="weight"><b>Weight:</b></label>
    <input type="text" placeholder="Enter Weight(in kg):" name="weight" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>

    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="reg_user" class="signupbtn">Sign Up</button>
    </div>
	<p>Already a user? <a href="login.php" required><b>login</b></a></p>
  </div>
</form>
