<style>
	.logo {
    margin: auto;
    font-size: 20px;
    /*background: white;*/
    padding: 5px 11px;
    border-radius: 50% 50%;
    color: black;
}
</style>

<nav class="navbar navbar-dark bg-dark fixed-top " style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<!--i class="fa fa-share-alt"></i-->
				<img src="assets/img/logo.png" width="45" />
  			</div>
  		</div>
		
	  	<div class="col-md-2" style="float:right; margin-top:10px;">
	  		<a href="ajax.php?action=logout" style="color:yellow"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off" style="color:yellow"></i></a>
	    </div>
    </div>
  </div>
  
</nav>