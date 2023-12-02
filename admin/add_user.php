<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>add_user</title>
</head>
<body>
    <?php
       include 'include/nav.php';
    ?>
    <div class="container my-3">
        <h4>add_user</h4>
    </div>
 <div class="container by-2"> 
    <?php
       if(isset($_POST['add'])){
        $user_name = $_POST['user_name'];
        $pwd = $_POST['password'];

        if(!empty($user_name) && !empty($pwd)){
            require_once 'include/database.php';
            $date = date('Y-m-d H:i:s');
            $sqlstate = $pdo->prepare(query:'INSERT INTO user VALUES(null,?,?,?)');
            $sqlstate->execute([$user_name, $pwd, $date]);
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
    <input type="submit" value="add_user" class="btn btn-primary btn-lg" name="add">
  </form>
</div>
</body>
</html>