
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' style="" >
		
		<div class="sidebar-list" style="background-color:LightGray;">

				<a href="/home" class="nav-item nav-home">
					<!-- <span class='icon-field'>
						<i class="fa fa-home"></i>
					</span>  -->
					Home
				</a>

				<a href="/loans" class="nav-item nav-loans">
					<!-- <span class='icon-field'><i class="fa fa-file-invoice-dollar"></i></span>  -->
					Loans</a>	
				<a href="/payments" class="nav-item nav-payments">
					<!-- <span class='icon-field'><i class="fa fa-money-bill"></i></span>  -->
					Payments
				</a>
				<a href="/borrowers" class="nav-item nav-borrowers">
					<!-- <span class='icon-field'><i class="fa fa-user-friends"></i></span>  -->
					Borrowers
				</a>
				<a href="/plan" class="nav-item nav-plan">
					<!-- <span class='icon-field'><i class="fa fa-list-alt"></i></span>  -->
					Loan Plans
				</a>	
				<a href="/loan_type" class="nav-item nav-loan_type">
					<!-- <span class='icon-field'><i class="fa fa-th-list"></i></span>  -->
					Loan Types
				</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="/users" class="nav-item nav-users">
					<!-- <span class='icon-field'><i class="fa fa-users"></i></span>  -->
					Users
				</a>
				
				<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
