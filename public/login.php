<?php
    include "includes/header.inc.php";
?>

<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    include "includes/footer.inc.php";
?>