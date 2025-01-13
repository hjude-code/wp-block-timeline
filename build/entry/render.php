<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$mediaURL = "url(" . $attributes['mediaURL'] . ")";

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<span class="displayYear displayCentury"><?php echo $attributes['displayCentury'] ?></span>
	<span class="displayYear displayDecade"><?php echo $attributes['displayDecade'] ?></span>

	<div class="entryCover" style="background-image:<?php echo $mediaURL ?>;"></div>

	<div class="entryContent">
		<?php echo $content ?>
	</div>
</div>
