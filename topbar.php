<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top" style="padding:0; height: 60px; background-color: MediumSeaGreen;">
  <div class="container-fluid h-100">
  	<div class="col-lg-12 d-flex justify-content-between align-items-center h-100">
  		<!-- <div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-money-bill-wave"></span>
  			</div>
  		</div> -->
      <div class="col-md-4 text-white">
      <a href="/home" style="color: white;">
					<!-- <span class='icon-field'>
						<i class="fa fa-home"></i>
					</span>  -->
        <large><b>Loan Management System</b></large>
			</a>
        
      </div>
	  	<div class="ml-auto text-white">
	  		<a href="ajax.php?action=logout" class="text-white">Hello, <?php echo $_SESSION['login_name'] ?>! <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>