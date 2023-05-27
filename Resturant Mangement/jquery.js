$(document).ready(function(){
    $("#Book-btn").click(function(){
          var v1 = $("#FN").val();
          var v2 = $("#LN").val();
          if(v1 == v2){
              alert("First & Last Name Can't be same !");

              $("#FN").css("border", "2px solid red");
              $("#LN").css("border", "2px solid red");
          }

          var v3= $("#persons").val();
          if(v3>10){
            alert("Number of Persons Cna't be more than 10 !");

              $("#persons").css("border", "2px solid red");
          }
          if(v3==0){
            alert("Number of Persons Cna't be 0 !");
          }

          var v4= $("#cnic").val();
          var v5= $("#date").val();
          var v6= $("#time").val();
          if(v1!=v2 && v3<10 && v3>0 && v4!=0 && v5!=0 && v6!=0){
            alert("Table Book Successfully");
          }
          
      });


      $("#signup-btn").click(function(){
        var v4 = $("#setpass").val();
        var v5 = $("#conformpass").val();
        var v6 = $("signup-mail").val();
        if(v4 != v5){
            alert("Set Password & Conform Password is Not Same !");

            $("#setpass").css("border-bottom", "2px solid red");
            $("#conformpass").css("border-bottom", "2px solid red");

        }

        $("signup-mail").val()=v6;
      });

      $(".delb").click(function(){
        alert("Booking Deleted !!!")
      });

     
      $("#Add-btn").click(function(){
        var v1 = $("#FN").val();
        var v2 = $("#LN").val();
        if(v1 == v2){
            alert("First & Last Name Can't be same !");

            $("#FN").css("border", "2px solid red");
            $("#LN").css("border", "2px solid red");
        }

        var v3= $("#cnic").val();
        var v4= $("#email").val();
        var v5= $("#contact").val();
       
        if(v1!=v2 && v3!=0 && v4!=0 && v5!=0 ){
          alert("Employee Add Successfully :)");
        }
      });

      $(".delE").click(function(){
        alert("Employee Deleted !!!")
      });


                $('#logout').click(function () { 
                                                                                                      
                  // var objWindow = window.open(adminhome.php, "_self");
                  // objWindow.close();
                  alert("hell");
              });

          

});