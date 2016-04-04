<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-medium">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/neill/assets/images/logo.png"></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
		
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><img src="<?php echo home_url(); ?>/wp-content/themes/neill/assets/images/hamburger.jpg"></a></li>
		</ul>
	</div>
</div>

<div class="mobile-logo row show-for-small-only text-center">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/neill/assets/images/mobile-logo.jpg"></a>
 </div>



<div id="form-button" class="right"><span class="box"><span class="textWrapper"><span class="text">LET'S TALK</span></span></span></div>
