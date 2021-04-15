<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <style>
  *{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
  box-sizing: border-box;
}

body{
  background-image: linear-gradient(120deg,#487eb0,#fbc531);
  min-height: 100vh;
}


.container{
  max-width: 800px;
  margin: auto;
  padding: 10px;
}

.txtb{
  width: 100%;
  border: none;
  border-bottom: 2px solid #000;
  background: none;
  padding: 10px;
  outline: none;
  font-size: 18px;
}

h3{
  margin: 10px 0;
}

.task{
  width: 100%;
  background: rgba(255,255,255,0.5);
  padding: 18px;
  margin: 6px 0;
  overflow: hidden;
}

.task i{
  float: right;
  margin-left: 20px;
  cursor: pointer;
}

.comp .task{
  background: rgba(0,0,0,.5);
  color: #fff;
}
  </style>
  <body>

    <div class="container">
      <input type="text" class="txtb" placeholder="Add a task">
      <div class="notcomp">
        <h3>Not Completed</h3>



      </div>

      <div class="comp">
        <h3>Completed</h3>
      </div>
    </div>


    <script type="text/javascript">
      $(".txtb").on("keyup",function(e){
        //13  means enter button
        if(e.keyCode == 13 && $(".txtb").val() != "")
        {
          var task = $("<div class='task'></div>").text($(".txtb").val());
          var del = $("<i class='fas fa-trash-alt'></i>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
              p.remove();
            });
          });

          var check = $("<i class='fas fa-check'></i>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
              $(".comp").append(p);
              p.fadeIn();
            });
            $(this).remove();
          });

          task.append(del,check);
          $(".notcomp").append(task);
            //to clear the input
          $(".txtb").val("");
        }
      });
    </script>

  </body>
</html>