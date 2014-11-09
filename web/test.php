<?php

include 'init.php';

?>

<?php require 'header.php'; ?>

<?php if(Logins::isLoggedIn()){
    if (Logins::getCurrentSession() == NULL)
        include 'inc/landing.php';
    else
        include 'inc/session.php';
} else { ?>

<script type="text/javascript">
$("document").ready(function() {      
        
        $('#loginBtn').click(function(){
                       
          $('html, body').animate({
            scrollTop: $(".middle").offset().top
          }, 1500);          
           
                       
         });        
});
</script>

<style>
.body{
  overflow:hidden;
}

.top, .middle, .bottom{
  padding:30px;
  }

.top{
  height:100%;
  }
  

.middle{
  height:100%;
  }
  
  
.top-title, .middle-title, .bottom-title{
  cursor:pointer;
  margin-top:300px;
  text-align:center;
  text-decoration:underline;
  font-size:32px;
  font-weight:700;} 
</style>

<div class="top">

<div class="container">
                <center><h1 style="font-size:100px;font-weight:bold;font-style:italic;color:white;">Great Night!</h1>
                <span style="font-size:30px;"><a id="loginBtn">Login</a> - <a href="register.php">Register</a></span>
              </center>
            </div>
</div>
<div class="middle">

<div class="container">
<h1>Login</h1>

                <form method="POST" role="form">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="password" class="form-control"/>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn btn-block btn-primary"/>
                </form>
</div>
</div>

<?php }
require 'footer.php'; ?>