<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>

    <style>
        #success-message{
            background:#DEF1D8;
            color:green;
            padding:10px;
            margin:10px;
            display:none;
            position:absolute;
            right:15px;
            top:15px;
        }
        #error-message{
            background:#EFDCDD;
            color:red;
            padding:10px;
            margin:10px;
            display:none;
            position:absolute;
            right:15px;
            top:15px;
        }
        #modal{
            background: rgba(0,0,0,0.7);
            position:fixed;
            left:0;
            right:0;
            width: 100%;
            height: 100%;
            z-index:100;
            display:none;
        }
        #modal-form{
            background: #fff;
            width: 30%;
            position:relative;
            top:20%;
            left: calc(50% - 15%);
            padding: 15px;
            border-radius:4px;
        }
    </style>

</head>
<body>
    
<div class="container">
  <h2>Insert data</h2>
  <table>
  <form id="addFrom" enctype="multipart/form-data">
        <div class="form-group">
      <label for="username">username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
       </div>
        <div class="form-group">
      <label for="password">password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
    </br>
        <div class="form-group">
      <label for="Image">Image:</label>
      <input type="file" id="file" name="file" class="border-primary" placeholder="image" accept=".jpg,.png,.jpeg,.pjp"  />
        </div>
         </br>
         <button type="submit" class="btn btn-primary" id="save-button">Submit</button>
  </form>
        
  <a href="login.php"><button>Login</button></a>
            
  </table>
</div>
<div id="error-message"></div>
<div id="success-message"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

    $("#save-button").on("click",function(e){
       e.preventDefault();
        var formData = new FormData($("#addFrom")[0]);
    //    var username = $("#username").val();
    //    var email = $("#email").val();
    //    var password = $("#password").val();
    //    var file = $("#file").val();

        if(username == " " || email == " "){
            $("#error-message").html("All fildes are required").slideDown();
            $("#success-message").slideUp();
        }else{

            $.ajax({
            url : "ajax-insert.php",
            type : "POST",
            data: formData,
            processData: false, // Important for file upload
            contentType: false,
            
            success : function(data){
               if(data == 1){
                $("#addFrom").trigger("reset");
                $("#success-message").html("Data insert Successfully").slideDown();
                $("#error-message").slideUp();
               }else{
                $("#error-message").html("can't save records").slideDown();
            $("#success-message").slideUp();
               }
            }
        });
        }
    });



});



</script>
</body>
</html>