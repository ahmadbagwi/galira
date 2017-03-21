<!-- Memanggil fungsi customizer option dari titan framework di function.php -->
<!-- Memanggil slider -->
	<?php
		$titan = TitanFramework::getInstance( 'mytheme' );
		$imageID1 = $titan->getOption( 'slider1' );

      	  $imageSrc1 = $imageID1; // For the default value
      	  if ( is_numeric( $imageID1 ) ) {
      	  	$imageAttachment1 = wp_get_attachment_image_src( $imageID1, 'full' );
      	  	$imageSrc1 = $imageAttachment1[0];
      	  } 
    ?>

    <?php
      	  $titan = TitanFramework::getInstance( 'mytheme' );
      	  $imageID2 = $titan->getOption( 'slider2' );

      	  $imageSrc2 = $imageID2; // For the default value
      	  if ( is_numeric( $imageID2 ) ) {
      	  	$imageAttachment2 = wp_get_attachment_image_src( $imageID2, 'full' );
      	  	$imageSrc2 = $imageAttachment2[0];
      	  } 
    ?>

    <?php
      	  $titan = TitanFramework::getInstance( 'mytheme' );
      	  $imageID3 = $titan->getOption( 'slider3' );

      	  $imageSrc3 = $imageID3; // For the default value
      	  if ( is_numeric( $imageID3 ) ) {
      	  	$imageAttachment3 = wp_get_attachment_image_src( $imageID3, 'full' );
      	  	$imageSrc3 = $imageAttachment3[0];
      	  } 
    ?>
<!-- Memanggil fungsi gambar utama -->
<?php
  $titan = TitanFramework::getInstance( 'mytheme' );
  $panggiljasa1 = $titan->getOption( 'jasa1' );
  $panggilgambarjasa1 = wp_get_attachment_image_src( $panggiljasa1, 'full' );
  $outputjasa1 = $panggilgambarjasa1[0];
?>

<?php
  $titan = TitanFramework::getInstance( 'mytheme' );
  $panggiljasa2 = $titan->getOption( 'jasa2' );
  $panggilgambarjasa2 = wp_get_attachment_image_src( $panggiljasa2, 'full' );
  $outputjasa2 = $panggilgambarjasa2[0];
?>

<?php
  $titan = TitanFramework::getInstance( 'mytheme' );
  $panggiljasa3 = $titan->getOption( 'jasa3' );
  $panggilgambarjasa3 = wp_get_attachment_image_src( $panggiljasa3, 'full' );
  $outputjasa3 = $panggilgambarjasa3[0];
?>

<?php
  $titan = TitanFramework::getInstance( 'mytheme' );
  $panggiljasa4 = $titan->getOption( 'jasa4' );
  $panggilgambarjasa4 = wp_get_attachment_image_src( $panggiljasa4, 'full' );
  $outputjasa4 = $panggilgambarjasa4[0];
?>

<?php
  $titan = TitanFramework::getInstance( 'mytheme' );
  $panggiljasa5 = $titan->getOption( 'jasa5' );
  $panggilgambarjasa5 = wp_get_attachment_image_src( $panggiljasa5, 'full' );
  $outputjasa5 = $panggilgambarjasa5[0];
?>