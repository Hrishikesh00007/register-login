<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  

    <form name="form1"  action="login-process.php" method="post" >

        <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
       </div>
        <div class="form-group">
      <label for="password">password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
         <button type="submit" class="btn btn-primary" id="save-button">Submit</button>

</form>
</body>
</html>