<section id="about" class="section-style" data-background-image="images/background/lemons.jpg">
		<div class="pattern height-resize"> 
			<div class="container">
				<h1 class="text-center"><?php display_message(); ?></h1>
				<h3 class="section-name">
					<span>
					About Us
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					We create & develop you play
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					We are an IT company occupying a remarkable place in marketing, gaming and financial segments of the iGaming industry. Our products are successfully implemented in European, African and Latin American markets
				</p><!-- /.section-description -->

				<div class="team-container">
					<div class="row">
						<?php while ($row=mysqli_fetch_assoc($queru)) { ?>													
							<div class="col-sm-4">
								<div class="team-member">
									<figure>
										<?php echo "<img style='width:350px;' src='images/".$row['item_image']."' >"; ?>
										<figcaption>
											<p class="member-name"><?php echo $row['item_title']; ?></p>
											<p class="designation">
												<?php echo $row['item_short_desc']; ?>
											</p><!-- /.designation -->

										</figcaption>
									</figure>
								</div><!-- /.team-member -->
							</div><!-- /.col-sm-4 -->
						<?php } ?>
					</div><!-- /.row -->

				</div><!-- /.team-container -->

				<div class="next-section">
					
				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->


	</section>