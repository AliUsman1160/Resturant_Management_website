<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
    <script src="jquery.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Serif+NP+Hmong&family=Pacifico&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Noto+Serif+NP+Hmong&family=Pacifico&display=swap'); </style>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Noto+Serif+NP+Hmong&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="logincss.css">
    <title>signup</title>
  </head>
  <body>
    
   <form action="do_signup.php" method="post">
    <div class="container ">
        <div class="row no-gutters pt-5 mt-3">
            <div class="col-sm-1"></div>
            <div class="col-sm-4 ml-5 pb-5">
                <img src="img/image-9.jpg" alt="" style="height: 500px; width: 400px;" class="img-fluid">
            </div>
         
            <div class="col-sm-5 ml-5 pl-5 justify-content-center">

                
<!--                 
                <h2 class="pl-3" style=" font-family: 'Cinzel', serif;
                font-family: 'Noto Serif NP Hmong', serif;
                font-family: 'Pacifico', cursive;"><span style="color: rgb(177, 174, 174);"> Food </span> <span style="color: rgb(177, 174, 174); "> Resturant</span> </h2> -->
                <img src="img/logo.png" alt="" height="80px" class="pb-2" >
                
                <br>
                <h4 class="pt-2" style="color: rgb(203, 202, 201); text-decoration: underline;">Create your Account.</h4>
                <br>
  
                <label style="color: white;" for="">Enter Email</label>
                <br>
                <input type="text" id="signup-mail" name="email"  placeholder="abc@gmail.com">
                <br><br>
                
                <?php
                  $id = $_GET['rid'];
                  if($id==4){
                   
                    echo "<h6 class=\"text-danger\">You are not admin !!!</h6>";

                  }
                  if($id==6){
                   
                    echo "<h6 class=\"text-danger\">You are already signup !!!</h6>";

                  }

                  ?>

                <label style="color: white;" for="">Set Password</label>
                <br>
                <input type="password" id="setpass" name="pwd"  placeholder="*********">
                <br><br>
                
                <label style="color: white;" for="">Conform Password</label>
                <br>
                <input type="password" id="conformpass"  name="cpwd" placeholder="*********">
                
                <br><br>
                <button type="submit" id="signup-btn" class="btn btn-primary">Sign Up</button>

                <br><br>
                
                
            </div>
        </div>
    </div>
   </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>