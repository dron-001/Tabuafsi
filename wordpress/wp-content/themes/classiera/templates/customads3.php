<section id="classieraDv">
	<div class="container">
		<div class="row">
		<?php 
			$homeAd1 = '';		
			global $redux_demo;
			global $allowed_html;
			$homeAdImg1 = $redux_demo['classiera_home_banner_3']['url']; 
			$homeAdImglink1 = $redux_demo['classiera_home_banner_3_url']; 
			$homeHTMLAds = $redux_demo['classiera_home_banner_3_html'];
			?>
			<div class="col-lg-12 col-md-12 col-sm-12 center-block text-center">
				<?php 
				if(!empty($homeHTMLAds) || !empty($homeAdImg1)){
					if(!empty($homeHTMLAds)){
						if(function_exists('classiera_escape')) { classiera_escape($homeHTMLAds); }
					}else{
						echo '<a href="'.esc_url($homeAdImglink1).'" target="_blank"><img class="img-responsive" alt="image" src="'.esc_url($homeAdImg1).'" /></a>';
					}
				}
				?>
			</div>
		</div>
	</div>	
</section>