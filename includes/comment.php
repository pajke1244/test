	<?php 
	require_once "functions.php";
	//prikazuju se samo komentari koje je admin odobrio
	$queru=query("SELECT * FROM comments where com_status = 'approved'");
	?>
	<section id="about" class="section-style" data-background-image="images/background/kom.jpg">
		<div class="pattern height-resize"> 
			<div class="container">
				<h3 class="section-name">
					<span>
						Vasi utisci
					</span>
				</h3><!-- /.section-name -->
				<p class="section-title">
					
				</p><!-- /.Section-title  -->
				<p class="section-description" style="font-size: 35px;">
					Komentari nasih posetilaca
				</p><!-- /.section-description -->

				<div class="team-container">
					<div class="row">
						<?php while ($row=mysqli_fetch_assoc($queru)) { ?>
						<div class="col-sm-4">
							<div class="team-member">
								<figure>									
									<figcaption>
										<p class="member-name"><?php echo $row['com_name']; ?></p>
										<p class="designation">
											<?php echo $row['com_msg']; ?>
										</p><!-- /.designation -->

									</figcaption>
								</figure>							
							</div><!-- /.team-member -->
						</div><!-- /.col-sm-4 -->
						<?php } ?>
					</div><!-- /.row -->

				</div><!-- /.team-container -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->


	</section><!-- /#about -->