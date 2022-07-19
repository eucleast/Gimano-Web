<?php if (!defined('FLUX_ROOT')) exit; ?>

<!-- home -->
<section id="home" data-parallax="scroll" data-image-src="<?php echo $this->themePath('images/hero-bg.jpg') ?>" data-natural-width=3000 data-natural-height=2000>

	<div class="overlay"></div>
	<div class="home-content">        

		<div class="row contents">                     
			<div class="home-content-left">

				<h3 data-aos="fade-up" class=" text-center">
					<?php echo $config['server_sub_intro']; ?> |
					<span>Online Player: <?php echo number_format($config['online'][0]);?></span>
				</h3>
				<h1 data-aos="fade-up">
					<?php echo $config['server_introduction']; ?>
				</h1>
				<div class="buttons" data-aos="fade-up">
					<a href="<?php echo $this->url('account','create'); ?>" class="button stroke">
						<span class="icon-users" aria-hidden="true"></span>
						Register Account
					</a>
					<a href="https://www.youtube.com/watch?v=<?php echo $config['social_api']['youtube']; ?>" data-lity class="button stroke">
						<span class="icon-play" aria-hidden="true"></span>
						Youtube Video
					</a>
				</div>                                         

			</div>

			<div class="home-image-right">
				<img src="<?php echo $this->themePath('images/iphone-app-470.png'); ?>" 
					srcset="<?php echo $this->themePath('images/iphone-app-470.png'); ?> 1x, <?php echo $this->themePath('images/iphone-app-940.png'); ?> 2x"  
					data-aos="fade-up">
			</div>
		</div>

	</div> <!-- end home-content -->

	<ul class="home-social-list">
		<li>
			<a href="#"><i class="fa fa-facebook-square"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-instagram"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-youtube-play"></i></a>
		</li>
	</ul>
	<!-- end home-social-list -->

	<div class="home-scrolldown">
		<a href="#information" class="scroll-icon smoothscroll">
			<span>View More</span>
			<i class="icon-arrow-right" aria-hidden="true"></i>
		</a>
	</div>

</section> 
<!-- end home -->  



<!-- about -->
<section id="information">

	<div class="row about-intro">
		<div class="col-four">
			<h1 class="intro-header" data-aos="fade-up"><img src="<?php echo $this->themePath('images/girl-bg.png'); ?>" /></h1>
		</div>
		<div class="col-eight">
			<h1>A fun only server.</h1>
			<p class="lead" data-aos="fade-up">
				The time has come once again to experience the legendary MMORPG Ragnarok Online. Continue the legend and relive the glorious past that can never be extinguished!
			</p>
			<p class="lead" data-aos="fade-up">	
				On the edge of Midgard’s trends
				Ragnarok Online is set on 150x/150x/150x MID experience rates, 250/50 base-job levels for Classic Gaming.

				A Gamers’ Haven
				The server provides showcase features to give its players their best gaming experience. Automated and Hosted events are lined-up with exciting and inimitable concepts. 
				Battle grounds for Player versus Player combats are set on per level category.
			</p>
		</div>  
	</div>

	<div class="row about-features">
		<div class="features-list block-1-3 block-m-1-2 block-mob-full group">
			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/rok.png'); ?>" /> </span></center>            
				<div class="service-content">
					<center><h3>SERVER RATES:</h3></center>
					<h5>- <font color="46305e">Max Level/Job</font> : 250/50
					<h5>- <font color="46305e">Max Status</font> : 130
					<h5>- <font color="46305e">Max ASPD</font> : 196
					<h5>- <font color="46305e">Rates</font> : 150x/150x/150x
					<h5>- <font color="46305e">Drops Equips Normal</font> : 150%
					<h5>- <font color="46305e">Drops Equips MVP</font> : 20%
					<h5>- <font color="46305e">Drops Card Normal</font> : 50%
					<h5>- <font color="46305e">Drops Card MVP</font> : 20%
					<h5>- <font color="46305e">Server Type</font> : Renewal (4th Jobs)
					</h5>					
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/nid.png'); ?>" /> </span></center>                        
				<div class="service-content">	
					<center><h3>EPISODE RELEASE:</h3></center>  
					<h5>- <font color="46305e">EPISODE 17.1</font>
					</h5>
				</div>	 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/fad.png'); ?>" /> </span></center>		            
				<div class="service-content">
					<center><h3>SERVER PROTECTION:</h3></center>
					<!--
					<h5>- <font color="46305e">Guepard Shield 3.0</font> : Coming Soon.
					<h5>- <font color="46305e">@LGP</font> : Coming Soon.
					</h5>
					-->	
					<center><h5><font color="46305e"></font>Coming Soon</h5></center>				
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/emp.png'); ?>" /> </span></center>	
				<div class="service-content">
					<center><h3>WAR OF EMPERIUM</h3></center>
					<!--
					<h5>- <font color="46305e">Kriemhild</font> : Coming Soon.
					<h5>- <font color="46305e">Swanhild</font> : Coming Soon.
					</h5>
					-->
					<center><h5><font color="46305e"></font>Coming Soon</h5></center>
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/shu.png'); ?>" /> </span></center>		            
				<div class="service-content">	
					<center><h3>GVG & PVP EVENT</h3></center>
					<!--
					<h5>- <font color="46305e">@irbg</font> : Coming Soon.
					<h5>- <font color="46305e">Emblemas</font> : Coming Soon.
					</h5>
					-->
					<center><h5><font color="46305e"></font>Coming Soon</h5></center>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/vot.png'); ?>" /> </span></center>	   	           
				<div class="service-content">
					<center><h3>VOTE FOR POINTS</h3></center>
					<center><a href="http://www.gimano-ro.online/?module=voteforpoints"><font color="46305e">Start Voting</font></a></center>
				</div>
			</div> <!-- /bgrid -->
			
		</div> <!-- end features-list -->
	</div> <!-- end about-features -->	
</section> 
<!-- end about -->  

<!-- comunity -->
<section id="download"
	<div class="row">
		<div class="col-full">
			<h1 class="intro-header"  data-aos="fade-up">
				<a href="http://www.gimano-ro.online/forum" style="text-decoration: none;">OUR COMMUNITY</font></a>
			</h1>
		</div>
		<div class="col-full">
			<h1 class="intro-header"  data-aos="fade-up">
				<a href="https://discord.gg/WNN3w6En" style="text-decoration: none;">JOIN OUR DISCORD</font></a>
			</h1>
		</div>
	</div>
</section> <!-- end comunity -->    

<!-- download -->
<section id="download">
	<div class="row">
		<div class="col-full">
			<h1 class="intro-header"  data-aos="fade-up">DOWNLOAD GAME CLIENT</h1>
			
			<h5 class="lead" data-aos="fade-up">
			   CLICK ON THE LINKS BELOW TO PLAY ON OUR SERVER.
			</h5>
			
			<p>
			</p>

			<ul class="download-badges" data-os="fade-up">
				<div class="plan-bottom-part">
					<a href="https://drive.google.com/file/d/1_1D9RsXKqB6a2sPC0esZs7_fTNueItxZ/view?usp=sharing" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button1s.png'); ?>" alt="Lite Client" />
					</a>
					<a href="https://drive.google.com/drive/folders/1A7s28WN043QrG_GqQchJlXcTZbVAoaJt?usp=sharing" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button2s.png'); ?>" alt="Patch Full" />
					</a>
				</div>
				 <h5 class="lead" data-aos="fade-up">
			  What bug or problem is found, please report it to staff immediately.
			</h5>
			</ul>

		</div>
	</div>
</section> <!-- end download -->    
