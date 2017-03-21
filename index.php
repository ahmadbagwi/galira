<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package galira_1.0
 */

get_header(); ?>
<?php include ('slider-lebar.php'); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!--slide halaman depan-->

			<div class="col-md-10 col-md-offset-1">
				<div class="center-block">
					<div id="carousel-example-generic" class="carousel slide col-centered" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src='<?php echo esc_url( $imageSrc1 ); ?>' />
								<div class="carousel-caption">
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src='<?php echo esc_url( $imageSrc2 ); ?>' />
								<div class="carousel-caption">
									<p></p>
								</div>
							</div>
							<div class="item">
								<img src='<?php echo esc_url( $imageSrc3 ); ?>' />
								<div class="carousel-caption">
									<p></p>
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		
		<!--akhir slider-->

		<!--5 kolom gambar utama dan teks-->

			
			<div class="col-md-12 col-md-offset-1 konten-kolom">
				
				<div id="kol1" class="col-md-2">
					<img src='<?php echo esc_url( $outputjasa1 ); ?>'/>
					<h3>Sewa Elf</h3>
					<p maxlength="75">Sewa mobil elf rental mobil elf menyediakan mobil elf kapasitas 14 dan 19 seat</p>
				</div>

				<div id="kol2" class="col-md-2">
					<img src='<?php echo esc_url( $outputjasa2 ); ?>'/>
					<h3>Tiket Pesawat</h3>
					<p maxlength="75">Jual tiket pesawat dan tiket hotel online penerbangan domestik dan internasional</p>
				</div>

				<div id="kol3" class="col-md-2">
					<img src='<?php echo esc_url( $outputjasa3 ); ?>'/>
					<h3>Sewa Infocus</h3>
					<p>Sewa Infocus / proyektor untuk presentasi, seminar, nonton bareng lengkap dengan backdrop</p>
				</div>

				<div id="kol4" class="col-md-2">
					<img src='<?php echo esc_url( $outputjasa4 ); ?>'/>
					<h3>Web Desain</h3>
					<p>Jasa Pembuatan Website dan toko online lengkap dengan fitur SEO harga terjangkau</p>
				</div>

				<div id="kol5" class="col-md-2">
					<img src='<?php echo esc_url( $outputjasa5 ); ?>'/>
					<h3>Paket Wisata</h3>
					<p>Liburan dengan paket tour lengkap dan terjangkau dapatkan penawaran harga terbaik</p>
				</div>	
			</div>
		

			<!--akhir 5 kolom gambar dan teks-->
		
		<div class="isi-konten content-area col-md-7 col-md-offset-1">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
		</div>
	

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();

get_footer();

