<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <center>
    <div class="container">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header border-primary">
            <h5>Login System</h5>

        </div>
        <div class="card-body">
            <form action="../Controller/acceso.php" method="POST">
            <input type="email" name="user" id="user" class="form-control" placeholder="usuario" required/>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="contrasena" required/>
            <br/>
            <input type="submit" name="btnlogin" class="btn btn-info" value="Login"/>
            </form>
            </div>
      </div>
        
    <div>
    </center>
   

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>