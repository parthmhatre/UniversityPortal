<?php include 'session.php'; ?>
<?php include 'header.php'; ?>
<?php
  //Start session
  if(isset($_GET)){
  $errflag=$_GET['errflag'];
  }
  $errmsg = 'Incorrect username or password. Please try again.';
  
  //Check whether the session variable SESS_MEMBER_ID is present or not
  if($_SESSION['SESS_EMAIL']!= "" || $_SESSION['SESS_USER_ID']!= "") {
    if($_SESSION['SESS_ADMIN']==1){
      echo '<meta http-equiv="refresh" content="0;URL=admin-dashboard.php">';
    }
    else {
      // header("Location:profile-detail-form.php");
      echo '<meta http-equiv="refresh" content="0;URL=home.php">';
    }
    exit();
  }
?>
<title>Login</title>
</head>
<body>
	<div class="container">
      <form class="form-signin" action="api/login.php">
        <h3 class="form-signin-heading text-center">Sign in</h3>
        <br>
        <?php if($errflag==true) {?>
        <div class="form-group has-error"><label class="control-label" for="inputError1"><?php echo $errmsg; ?></label></div>
        <?php }?>
        <input type="text" name="email" class="form-control" placeholder="E-mail" autofocus="">
        <br>
    	<input type="password" name="password" class="form-control" placeholder="Password">
    	<br>
    	<button class="btn btn-primary btn-block" type="submit">Sign in</button>
      <hr>
      <p class="text-center">Haven't registered? Please go <a href="register.php">register.</a></p>
      </form>
    </div>
    <script type="text/javascript">
  // $(function(){
  // 	$('.form-signin').submit(function (e) {

  // 		e.preventDefault();
  // 		$.ajax({
		//   type: 'POST',
		//   dataType: "json",
		//   url: 'api/login.php',
		//   data: $('.form-signin').serialize(),
		//   success: function( data ) {
  //       if(data.done)
  //         document.location = data.redirectURL;
		//   },
		//   error : function(a,b,c) {
		//   	console.log(a,b,c);
		//   }
		// });
  // 	});
  // });
  </script>
</body>
</html>