<html>
    <head><title>Pendaftaran</title></head>
    
    <body>
      <style>
        body{
              background-image:url("laut.jpg");
              color: blue;
        }
        </style>
    <center><h2>
  <img src="foto.png" alt="logo" align="middle" style="width:100px;height:100px"></center></h2>
  <center><h2><p>Have an account?</p>
    <form action="proseslogin.php" Method="POST" Name="input">
    <input type="text" placeholder="Username" name="un" /><br>
    <input type="password" placeholder="Password" name="pw" /><br>
    </h2></center>
    <center>
    <tr>
        <td><input type="checkbox" name="Option" value="Remember me "/>Remember me
        <input type="checkbox" name="Option" value="Forget password"/>Forgot password</br>
    </tr>
    <input type="submit" name="Login" value="Get started"></center>
    
</form>

</body>
</html>