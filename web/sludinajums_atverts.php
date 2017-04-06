<!DOCTYPE html>
<html>
	<?php include ('head.php'); ?>

<body>

	<?php include ('menu.php'); ?>

<div class="allwrap">
<div class="container">
<div class="row">
		<!-- kreisā puse-->
		<div class="col-md-3 col-sm-4">
			<?php include ('filters.php'); ?>
		</div>

			<!-- labā puse-->
			<div class="col-md-9 col-sm-8">
				<div class="open-item">
					<h1>Rīga, Centrs, Katrīnas iela</h1>
				
					<div class="row">
						<div class="col-md-6">
							<div class="tabula">
								<table>
									<tr>
										<th>Tips</th>
										<td>Pārdod</td>
									</tr>				
									<tr>
										<th>Kategorija</th>
										<td>Biroja telpas</td>
									</tr>
									<tr>
										<th>Platība</th>
										<td>575 m<sup>2</sup></td>
									</tr>
									<tr>
										<th>Istabu skaists</th>
										<td>6</td>
									</tr>
									<tr>
										<th>Stāvs</th>
										<td>1/3</td>
									</tr>
									<tr>
										<th>cena</th>
										<td class="cena">350 000 Eur</td>
									</tr>
								</table>	
								<br>

								<p>Dokumenta noformēšana bez maksas.</p>
								<br>
								<p>Flīzēts grīdas segums, plastikāta stikla pakešu logi, centrālā apkures sistēma, slēgta teritorija, vieta automašīnai. Autostāvvieta ar 10 vietām bez maksas zeme - 800m<sup>2</sup></p>
								<br>
								<p>Kontakti:</p>
								
								<div class="agent">
									<img src="">
									<p>(+371) 26666987</p>
									<p>amirans@artestate.lv</p>
								</div>

							</div>
						</div>
					
						<div class="col-md-6">

							<div class="carousel slide" id="myCarousel">
									<!-- Carousel items -->
									<div class="carousel-inner">
										<div class="item active">
											<a href="img/katalogs.jpg"><img src="img/katalogs.jpg"></a>
										</div>
										<div class="item">
											<a href="img/katrtelpas1.jpg"><img src="img/katrtelpas1.jpg"></a>
										</div>
										<div class="item">
											<a href="img/katrtelpas2.jpg"><img src="img/katrtelpas2.jpg"></a>
										</div>
										<div class="item">
											<a href="img/katrtelpas3.jpg"><img src="img/katrtelpas3.jpg"></a>
										</div>
											
									</div>
									<!-- Carousel nav -->
									<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											<span><i class="fa fa-angle-left" aria-hidden="true"></i></span></a>
									<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
											<span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
									
								<!-- Bottom switcher of slider -->
									<ul class="carousel-indicators hide-bullets">
										<li class="active" data-slide-to="0" data-target="#myCarousel">
												<span class="thumbnail" href=""><img src="img/katalogs.jpg"></span>
										</li>
										<li data-slide-to="1" data-target="#myCarousel">
												<span class="thumbnail" href=""><img src="img/katrtelpas1.jpg"></span>
										</li>
										<li data-slide-to="2" data-target="#myCarousel">
												<span class="thumbnail" href=""><img src="img/katrtelpas2.jpg"></span>
										</li>
										<li data-slide-to="3" data-target="#myCarousel">
												<span class="thumbnail" href=""><img src="img/katrtelpas3.jpg"></span>
										</li>
									</ul>                                                
							</div>	

						<div id="googleMap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.7726478557856!2d24.100203616270907!3d56.95269638089121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfda467dec1b%3A0xb718987569004e73!2zS3JpxaFqxIHFhmEgVmFsZGVtxIFyYSBpZWxhIDFCLCBDZW50cmEgcmFqb25zLCBSxKtnYSwgTFYtMTAxMA!5e0!3m2!1sen!2slv!4v1487761868437" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>


			</div>
			</div>
		</div>
	</div>
</div>

<?php include ('footer.php') ?>
<?php include ('pieteikums-popup.php') ?>
</div>
</body>


</html>