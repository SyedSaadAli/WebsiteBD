<?php
$connection = mysqli_connect('localhost','root','','blood_donation');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">
         <div class="card">
           <h2 class="card-title text-center">Login</h2>
            <div class="card-body py-md-4">
             <form _lpchecked="1" action="login.php" method="POST">
              
              <div class="form-group">
                   <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                  </div>
                                  
                                
         <div class="form-group">
           <input type="password" name="password" class="form-control" id="password" placeholder="Password">
         </div>
         
         <div class="d-flex flex-row align-items-center justify-content-between">
          
                                      <button name="lgn_btn" class="btn btn-primary">Login</button>
                </div>
             </form>
           </div>
        </div>
      </div>
      </div>
      </div>
</body>
</html>
<?php
      if(isset($_POST['lgn_btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user";
        $query_run = mysqli_query($connection,$query);
          
if(mysqli_num_rows($query_run) > 0){
    while(($row = mysqli_fetch_assoc($query_run))){
    
    if($row['Email'] === $email && $row['Password'] === $password){
      header('location:index.php');
    }
    
    }}}
      ?>