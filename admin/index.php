<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    
       <nav class="navbar bg-body-tertiary">
       <div class="container">
         <a href="#">
           <img src="images/logo.png" alt="" width="130" height="50">
         </a>
       </div>
     </nav>

    <div class="container my-3">
        <h4>login</h4>
    </div>
 <div class="container by-2"> 
    <?php
    
       if(isset($_POST['login'])){
        $user_name = $_POST['user_name'];
        $pwd = $_POST['password'];

        if(!empty($user_name) && !empty($pwd)){
            require_once 'include/database.php';
            $sqlstate = $pdo->prepare(query:'SELECT * FROM user WHERE user_name=? AND password=?');
            $sqlstate->execute([$user_name, $pwd,]);
            if($sqlstate->rowCount()>=1){
                session_start();
                $_SESSION['user'] = $sqlstate->fetch();
                header(header: 'location: admin_page.php');
            } else{
                ?>
                <div class="alert alert-danger" role="alert">
                    user_name ,password incorrectes
                </div>    
                <?php
                   }
       } else{
    ?>
    <div class="alert alert-danger" role="alert">
        user_name ,password sont obligatoires
    </div>    
    <?php
       }
    }
    ?> 
  <form method="post">
    <div class="form-floating mb-3">
       <input type="text" class="form-control" id="floatingInput" placeholder="user_name" name="user_name">
       <label for="floatingInput">user_name</label>
    </div>
    <div class="form-floating my-3">
       <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
       <label for="floatingPassword">Password</label> 
    </div>
    <input type="submit" value="login" class="btn btn-primary btn-lg" name="login">
  </form>
</div>
</body>
</html>