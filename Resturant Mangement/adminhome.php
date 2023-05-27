<?php
if(!isset($_COOKIE['loged_in']))
  header('location:signin.php?rid=5');
?>

<?php
  // $id = $_GET['rid'];
   require_once('Database.php');
   $db = new Database(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
   <script src="jquery.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Nav-style.css">

    <title>Admin</title>
  </head>
  <body>

        <!-- -------- Nav Bar -----------  -->


        <nav class="navbar sticky-top navbar-expand-md ">
      <div class="container-fluid"> 
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#Bookings">Bookings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#table" >Add Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Edit">Edit</a>
              </li>
              <li class="nav-item ml-2" id="booktable">
                  <a class="nav-link" id="logout"  <?php setcookie("loged_in", time() - 3600);?>  href="signin.php?rid=60" >Log Out</a>
              </li>

            </ul>
          </div>
      </div>
    </nav>


    <!-- --------- conformation---------------- -->


    <!-- ------------- Bookings --------------- -->

      <section id="Bookings">
        <div class="container">
        <h1 class="title text-center About">Bookings</h1>
        <div class="table-responsive">
  <table class="table align-middle table-hover table-dark" style="border-radius: 0px 0px 25px 25px;">
    <thead>
      <tr>
   
                  <th>ID</th>
                  <th>Firs Name</th>
                  <th>Last Name</th>
                  <th>CNIC</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Persons</th>
                  <th>Action</th>
              
      </tr>
    </thead>
    <tbody>
    <?php
          $st = $db->fetchAllbooking();
          foreach($st as $row){
              print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>");
              print("<a href=\"do_Delete.php?id=$row[0]\"class=\"delb btn btn-danger\">Delete</a>");
              print('</tr>');
          }
          ?>
    </tbody>
  </table>
</div>
  </div>
      </section>

    <!-- ------------ Add Employee ---------------- -->
    
    <form action="AddCtrl.php" method="post">
    <section id="table">
      <div class="container table-container">
      <h1 class="title text-center About">Employee</h1>
        <div class="row">
            <div class="col-sm-3">
              <img src="img/Employee.jpg"class="img-fluid" alt="" style="height:400px;">
            </div>
 
            <div class="col-sm-9 table-data">
              <form action="">
                <div class="row">

              <div class="col-sm-6" style="padding-top:5px;">
                <label for="">First Name</label>
                <input type="text" class="form-control" id="FN" name="fn" required>
              </div>

              <div class="col-sm-6" style="padding-top:5px;">
                <label for="">Last Name</label>
                <input type="text" class="form-control" id="LN" name="ln" required>
              </div>

              <div class="col-sm-6">
                <label for="">CNIC</label>
                <input type="text" class="form-control" id="cnic" name="cnic" required>
              </div>

              <div class="col-sm-6">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>
              
              <div class="col-sm-6">
                 <div class="form-group">
                    <label for="exampleFormControlSelect1">Employee Status</label>
                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                    <option >Admin</option>
                    <option>Employee</option>

                    </select>
                 </div>
              </div>

              <div class="col-sm-6">
                <label for="">Contact Number</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
              </div>

              <div class="col-sm-12">
                <div class="d-grid gap-2">
                <button type="submit" id="Add-btn" class="btn btn-block" >Add Now</button>
              </div>
              </div>

              </div>
              </form>
            </div>
        </div>
      </div>
    </section>
    </form>

    <br><br>

     <!-- ------------- Bookings --------------- -->

        <section id="Edit">
          <div class="container">
          <h1 class="title text-center About">Edit</h1>
        <div class="table-responsive">
     <table class="table align-middle table-hover table-dark" style="border-radius: 0px 0px 25px 25px;">
    <thead>
    <tr>
                  <th>ID</th>
                  <th>Firs Name</th>
                  <th>Last Name</th>
                  <th>CNIC</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Contact</th>
                  <th>     </th>
                  <th>    update</th>
                  <th>Delete</th>
              </tr>
    </thead>
    <tbody>
    <?php
          $st = $db->fetchAllEmployee();
          foreach($st as $row){
              print("<tr><td>$row[5]</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[6]</td><td>");
              
              print("<td><a target=\"_blank\" href=\"update.php?uid=$row[5]\"class=\" btn btn-warning\">Update</a></td>");
              print("<td><a href=\"do_Delete_E.php?id=$row[5]\"class=\"delE btn btn-danger\">Delete</a></td>");
              print('</tr>');
          }
          ?>
    </tbody>
  </table>
</div>
</div>
</section>

<br><br>

    <script src="smooth-scroll.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>