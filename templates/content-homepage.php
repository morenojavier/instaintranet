<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			<div class="center">
				<h1>Govillantas <small>logo</small></h1>
			</div>

			<?php 
			$user = wp_get_current_user();
			if ( in_array( 'master', (array) $user->roles ) ) {
				?> 

					<p class="center">Eres un usuario Master</p>
					
					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_master') ): ?>
									<?php while( have_rows('promociones_master') ): the_row(); 
						// vars
						$promocion_imagen_master = get_sub_field('promocion_imagen_master');
						$promocion_link_master = get_sub_field('promocion_link_master');
						?>
						
						<a href="<?php echo $promocion_link_master; ?>">
							<div><img src="<?php echo $promocion_imagen_master; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>

					<a href="#">Entrar</a>

				<?php
			} else if( in_array( 'platinium', (array) $user->roles ) ){
				?> 
					<p class="center">Eres un usuario platinium</p>

					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_platinum') ): ?>
									<?php while( have_rows('promociones_platinum') ): the_row(); 
						// vars
						$promocion_imagen_platinum = get_sub_field('promocion_imagen_platinum');
						$promocion_link_platinum = get_sub_field('promocion_link_platinum');
						?>
						
						<a href="<?php echo $promocion_link_platinum; ?>">
							<div><img src="<?php echo $promocion_imagen_platinum; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>

					<a href="#">Entrar</a>


				<?php
			} else if( in_array( 'premium', (array) $user->roles ) ){
				?> 
					<p class="center">Eres un usuario premium</p>

					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_premium') ): ?>
									<?php while( have_rows('promociones_premium') ): the_row(); 
						// vars
						$promocion_imagen_premium = get_sub_field('promocion_imagen_premium');
						$promocion_link_premium = get_sub_field('promocion_link_premium');
						?>
						
						<a href="<?php echo $promocion_link_premium; ?>">
							<div><img src="<?php echo $promocion_imagen_premium; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>

					<a href="#">Entrar</a>


				<?php	
			} else if( in_array( 'double_premium', (array) $user->roles ) ){
				?> 
					<p class="center">Eres un usuario double_premium</p>

					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_premiumdouble') ): ?>
									<?php while( have_rows('promociones_premiumdouble') ): the_row(); 
						// vars
						$promocion_imagen_premiumdouble = get_sub_field('promocion_imagen_premiumdouble');
						$promocion_link_premiumdouble = get_sub_field('promocion_link_premiumdouble');
						?>
						
						<a href="<?php echo $promocion_link_premiumdouble; ?>">
							<div><img src="<?php echo $promocion_imagen_premiumdouble; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>

					<a href="#">Entrar</a>

				<?php	
			} else {
				?>









				<p class="center">Hola administrador las promociones visibles en estos momentos</p>

				<div class="col-md-6 center">
					<p>Las promociones del usario: Master</p>
					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_master') ): ?>
									<?php while( have_rows('promociones_master') ): the_row(); 
						// vars
						$promocion_imagen_master = get_sub_field('promocion_imagen_master');
						$promocion_link_master = get_sub_field('promocion_link_master');
						?>
						
						<a href="<?php echo $promocion_link_master; ?>">
							<div><img src="<?php echo $promocion_imagen_master; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>
				</div>
				<div class="col-md-6 center">
					<p>Las promociones del usario: Platinium</p>

					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_platinum') ): ?>
									<?php while( have_rows('promociones_platinum') ): the_row(); 
						// vars
						$promocion_imagen_platinum = get_sub_field('promocion_imagen_platinum');
						$promocion_link_platinum = get_sub_field('promocion_link_platinum');
						?>
						
						<a href="<?php echo $promocion_link_platinum; ?>">
							<div><img src="<?php echo $promocion_imagen_platinum; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>

				</div>
				<div class="col-md-6 center">
					<p>Las promociones del usario: Premium</p>

					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_premium') ): ?>
						<?php while( have_rows('promociones_premium') ): the_row(); 
						// vars
						$promocion_imagen_premium = get_sub_field('promocion_imagen_premium');
						$promocion_link_premium = get_sub_field('promocion_link_premium');
						?>
						
						<a href="<?php echo $promocion_link_premium; ?>">
							<div>
								<img src="<?php echo $promocion_imagen_premium; ?>" class="img-responsive">
							</div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>
				</div>
				<div class="col-md-6 center">
					<p>Las promociones del usario: Double Premium</p>
					
					<div class="owl-carousel owl-theme">
					<?php if( have_rows('promociones_premiumdouble') ): ?>
									<?php while( have_rows('promociones_premiumdouble') ): the_row(); 
						// vars
						$promocion_imagen_premiumdouble = get_sub_field('promocion_imagen_premiumdouble');
						$promocion_link_premiumdouble = get_sub_field('promocion_link_premiumdouble');
						?>
						
						<a href="<?php echo $promocion_link_premiumdouble; ?>">
							<div><img src="<?php echo $promocion_imagen_premiumdouble; ?>" class="img-responsive"></div>
						</a>

						<?php endwhile; ?>
					<?php endif; ?> 
					</div>
				</div>
				
				<a href="#">Ingresar</a>
				
				<?php echo do_shortcode('[be_wp_pro_grid_big_data_shortcode id="tabla_test"]'); ?>
				<?php
			}
			?>

		</div>
	</div>
</div>