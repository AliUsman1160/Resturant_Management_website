<?php
if(!isset($_COOKIE['loged_in']))
  header('location:signin.php?rid=5');
?>
<!doctype html>
<html lang="en">

<head>
  <title>Edit</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
    <script src="jquery.js"></script>
 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="Nav-style.css">
 
</head>

<body>
    
  <?php
    $id = $_GET['uid'];
   require_once('Database.php');
   $db = new Database(); 
   $st = $db->fetchEmployee($id);
   foreach($st as $row){
  ?>
  
  

    <form action="doupdate.php" method="post">
        <section id="table">
          <div class="container table-container">
          <h1 class="title text-center About">Update</h1>
            <div class="row">
                <div class="col-sm-3">
                  <img src="img/Employee.jpg"class="img-fluid" alt="" style="height:400px;">
                </div>
     
                <div class="col-sm-9 table-data">
                  <form action="">
                    <div class="row">
    
                  <div class="col-sm-6" style="padding-top:5px;">
                    <label for="">First Name</label>
                   
                    <input type="text" class="form-control" id="FN" name="fn" value="<?php echo $row[0] ?>" required>
                  
                    </div>
    
                  <div class="col-sm-6" style="padding-top:5px;">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" id="LN" name="ln" value="<?php echo $row[1] ?>" required>
                  </div>
    
                  <div class="col-sm-6">
                    <label for="">CNIC</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" value="<?php echo $row[2] ?>" required>
                  </div>
    
                  <div class="col-sm-6">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row[3] ?>" required>
                  </div>
                  
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Employee Status</label>
                        <select class="form-control" name="status" value="<?php echo $row[4] ?>" id="exampleFormControlSelect1">
                        <option >Admin</option>
                        <option>Employee</option>
    
                        </select>
                     </div>
                  </div>
    
                  <div class="col-sm-6">
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $row[6] ?>" required>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row[5] ?>" required>
                  </div>
    
                  <div class="col-sm-12">
                    <div class="d-grid gap-2">
                    <button type="submit"  class="btn btn-block" >Update</button>
                  </div>
                  </div>
    
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </section>
        </form>
<?php
   }
  ?>
      





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>