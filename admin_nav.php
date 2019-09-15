<div class="home">
      <!-- Header -->
		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div>
										<a href="#">
											<div class="logo_container d-flex flex-row align-items-start justify-content-start">
												<div class="logo_image"><div><img src="images/logopro.png" alt=""></div></div>
												<div class="logo_content">
													<div id="logo_text" class="logo_text logo_text_not_ie">EVENT MANAGEMENT SYSTEM</div>
													
												</div>
											</div>
										</a>	
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul>
													<li class="active"><a href="admin_home.php">Home</a></li>
												</ul>
											</nav>
											<div class="header_extra ml-auto">
								    <?php echo $_SESSION['name'];?>
											
                                                <div class="button header_button"><a href="logout.php">Logout  <?=$_SESSION['name'];?>!</a></div>
											</div>
                                            
										</div>
									</div>
								</div>
							</div>
						</div>
					  
					</div>
				</div>	
                 
			</div>
         
		</header>
	</div>

