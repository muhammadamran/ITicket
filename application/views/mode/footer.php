		<hr>
		<section class="wn__newsletter__area" style="background-color: #ffff;">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Tetaplah bersama kami</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Berlangganan buletin kami sekarang dan ikuti perkembangan terbaru dengan koleksi baru, lookbook terbaru, dan penawaran eksklusif.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top" style="background-color: #868e96;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="<?php echo base_url()."w_home"; ?>">
										<img src="<?php echo base_url().'assets/img/logo/'.$data->logo;?>" class="footer-logo" alt="logo">
									</a>
									<p><?php echo $data->slogan; ?></p>
								</div>
								<hr>
								<br>
								<div class="footer__content">
									<div align="center">
										<label>Kunjungi juga sosial media kami dibawah ini</label>
									</div>
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<!-- <li><a href="#"><i class="bi bi-facebook"></i></a></li> -->
										<li><a href="<?php echo $data->link_fb; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/facebook.png');?>" class="gambar-icon"></a></li>
										<!-- <li><a href="#"><i class="bi bi-google"></i></a></li> -->
										<li><a href="<?php echo $data->link_instagram; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/instagram.png');?>" class="gambar-icon"></a></li>
										<!-- <li><a href="#"><i class="bi bi-twitter"></i></a></li> -->
										<li><a href="<?php echo $data->link_twitter; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/twitter.png');?>" class="gambar-icon"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> 2021-<?php echo date('Y'); ?> <a href="mailto:amranhakimsiregar@gmail.com" target="_blank">Powered by. M x M | <?php echo $data->footer ?></a> All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div id="quickview-wrapper">
			<!-- Modal -->
			<!-- LOGIN -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container_sign" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="contact-form-wrap">
												<h2 class="contact__title">Sign In</h2>
												<p>Silahkan masukkan email dan password yang anda sudah buat. </p>
												<form action="w_home/aksi_login" method="post">
													<div class="single-contact-form space-between">
														<input type="email" name="username" placeholder="Email*">
														<input type="password" name="password" placeholder="Password*">
													</div>
													<p>Silahkan <font style="color:#ce7852">Create An Account</font> Jika Belum Memiliki Akun</p>
													<div class="contact-btn">
														<button type="submit" name="submit">Sign In</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<!-- END LOGIN -->
			<!-- DAFTAR -->
			<div class="modal fade" id="daftar" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container_sign" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="contact-form-wrap">
												<h2 class="contact__title">Create An Account</h2>
												<p>Silahkan Create An Account anda disini dan akan aktif sebagai member untuk melakukan pemesanan. </p>
												<form action="w_home/create_account" method="post">
													<div class="single-contact-form space-between">
														<input type="text" name="nama_depan" placeholder="Nama Depan*">
														<input type="text" name="nama_belakang" placeholder="Nama Belakang*">
													</div>
													<div class="single-contact-form space-between">
														<input type="email" name="email" placeholder="Email*">
														<input type="text" name="no_hp" placeholder="No. Handphone*">
													</div>
													<div class="single-contact-form space-between">
														<input type="password" name="password" id="password" data-toggle="password" placeholder="Password*">
														<input type="password" name="password" id="konfirmasi_password" placeholder="Konfirmasi Password*">
														<input type="hidden" name="role" value="Member">
														<input type="hidden" name="status" value="1">
														<input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:m:i') ?>">
													</div>
													<div class="contact-btn">
														<button type="submit">Create An Account</button>
													</div>
												</form>
											</div> 
											<div class="form-output">
												<p class="form-messege">
											</div>
										</div>
									</div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<!-- END DAFTAR -->
			<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
		                        <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="<?php echo base_url('mode/images/product/big-img/1.jpg');?>">
		                            </div>
		                        </div>
		                        <div class="product-info">
		                            <h1>Simple Fabric Bags</h1>
		                            <div class="rating__and__review">
		                                <ul class="rating">
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                    <li><span class="ti-star"></span></li>
		                                </ul>
		                                <div class="review">
		                                    <a href="#">4 customer reviews</a>
		                                </div>
		                            </div>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price">$17.20</span>
		                                    <span class="old-price">$45.00</span>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
		                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
		                            </div>
		                            <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div>
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<script src="<?php echo base_url('mode/js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/popper.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('mode/js/active.js');?>"></script>
	<!-- WHATSAPP -->
	<!--Jquery-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!--Floating WhatsApp css-->
	<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
	<!--Floating WhatsApp javascript-->
	<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
	<script>
		$(function() {
		$('#WAButton').floatingWhatsApp({
			phone: '1231231231', //WhatsApp Business phone number International format-
			//Get it with Toky at https://toky.co/en/features/whatsapp.
			headerTitle: 'Chat with us on WhatsApp!', //Popup Title
			popupMessage: 'Hello, how can we help you?', //Popup Message
			showPopup: true, //Enables popup display
			buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
			//headerColor: 'crimson', //Custom header color
			//backgroundColor: 'crimson', //Custom background button color
			position: "left"    
		});
		});
	</script>
	<!-- ADMINLTE -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script> -->
	<script type="text/javascript">
		$("#password").password('toggle');
	</script>

	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password").onchange = validatePassword;
			document.getElementById("konfirmasi_password").onchange = validatePassword;
		}

		function validatePassword(){
		var pass2=document.getElementById("konfirmasi_password").value;
		var pass1=document.getElementById("password").value;
		console.log(pass2);
		console.log(pass1);
		console.log(pass1!=pass2);
		
		if(pass1.length >= 6)
			document.getElementById("password").setCustomValidity('');
		else
			document.getElementById("password").setCustomValidity("Password Kurang dari 6 character");
		

		if(pass1!=pass2)
			document.getElementById("konfirmasi_password").setCustomValidity("Password Tidak Sama, Coba Lagi");
		else
			document.getElementById("konfirmasi_password").setCustomValidity('');
		}
	</script>
</body>
</html>