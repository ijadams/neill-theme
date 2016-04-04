					

					<footer>

						<div id="form-panel" class="right">
						<div class="anchor">
						<div class="close"></div>
						<div class="inner">
						<div id="formMessage">

						<?php gravity_form(3, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>

						</div>

						</div>
						</div>
						</div>



					    <div class="row">

					      <div class="medium-12 large-2 large-offset-1 columns"> 
					        <a href="<?php echo home_url(); ?>/"><img id="footer-logo"  src="<?php echo home_url(); ?>/wp-content/themes/neill/assets/images/neill-logo.png"></a>  
					      </div>
					      <div class="medium-12 large-2 columns links">   
					        <ul>
					          <li><a href="<?php echo home_url(); ?>/about">About</a></li>
					          <li><a href="<?php echo home_url(); ?>/family">FAMILY OF BUSINESSES</a></li>
					          <li><a href="<?php echo home_url(); ?>/aveda">aveda</a></li>
					          <li><a href="<?php echo home_url(); ?>/careers">careers</a></li>
					          <li><a href="http://AVEDAMEANSBUSINESS.COM">AVEDAMEANSBUSINESS.COM</a></li>
					        </ul>
					      </div>
					      <div class="medium-12 large-2 columns">   
					        <h4>LET'S CONNECT</h4>
					        <p>
					          <a href="mailto:LetsTalkGrowth@neill.com">LetsTalkGrowth@neill.com</a><br>
					          303 South Pine Street<br>
					          Hammond, LA 70403<br>
					          (800) 333-0100
					        </p>

					      </div>
					      <div class="medium-12 large-2 columns">   
					        <h4>CUSTOMER SUPPORT CENTER</h4>
					        <p>
					        (for existing partners)<br>
					        <a href="mailto:Call.Center@neill.com">Call.Center@neill.com</a><br>
					        (800) 333-0100
					        </p>

					      </div>
					      <div class="medium-12 large-2 columns end">
					        <a class="fl button thickbox" href="#TB_inline?width=630&amp;height=550&amp;inlineId=contact-popup">CONTACT US</a>   
					        <a href="http://avedameansbusiness.com/get-inspired/" target="_blank" class="button">GET INSPIRED</a>
					        <ul class="social">
					          <li><a target="_blank" href="https://www.facebook.com/NeillTSPDistribution"><i class="fa fa-facebook"></i></a></li>
					          <li><a target="_blank" href="https://www.instagram.com/neilltsp/"><i class="fa fa-instagram"></i></a></li>
					          <li><a target="_blank" href="http://plus.google.com/107746864909740405179"><i class="fa fa-google-plus"></i></a></li>
					          <li><a target="_blank" href="http://www.twitter.com/NeillTSP"><i class="fa fa-twitter"></i></a></li>
					        </ul>
					        <div class="fb-share"><div class="fb-share-button" data-href="<?php echo $_SERVER['REQUEST_URI'];?>" data-layout="button_count"></div></div>
					      </div>

					    </div>

					  </footer>
					  
					  
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->

		  <div id="contact-popup" style="display:none;">
		     <p>
		    <img class="alignnone size-full wp-image-2187" src="http://avedameansbusiness.com/wp-content/uploads/2015/12/neill-corp.png" alt="Neill Corporation" width="137" height="83" />
		    <?php gravity_form(5, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
		     </p>
		  </div>
		<?php wp_footer(); ?>

	</body>
</html> <!-- end page -->
