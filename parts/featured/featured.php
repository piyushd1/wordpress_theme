<div id="zox-feat-wrap" class="zoxrel">
	<?php $zox_feat_layout = get_option('zox_feat_layout'); $zox_cat_layout = get_option('zox_cat_layout'); if ((is_front_page() && $zox_feat_layout == "5" ) || (is_front_page() && $zox_feat_layout == "6" ) || (is_front_page() && $zox_feat_layout == "7" ) || (is_category() && $zox_cat_layout == "5" ) || (is_category() && $zox_cat_layout == "6" ) || (is_category() && $zox_cat_layout == "7" ) ) { ?>
		<?php get_template_part( 'parts/featured/feat', 'net' ); ?>
	<?php } else if ((is_front_page() && $zox_feat_layout == "8" ) || (is_front_page() && $zox_feat_layout == "9" ) || (is_front_page() && $zox_feat_layout == "10" ) || (is_category() && $zox_cat_layout == "8" ) || (is_category() && $zox_cat_layout == "9" ) || (is_category() && $zox_cat_layout == "10" ) ) { ?>
		<?php get_template_part( 'parts/featured/feat', 'sport' ); ?>
	<?php } else if ((is_front_page() && $zox_feat_layout == "11" ) || (is_front_page() && $zox_feat_layout == "12" ) || (is_category() && $zox_cat_layout == "11" ) || (is_category() && $zox_cat_layout == "12" ) ) { ?>
		<?php get_template_part( 'parts/featured/feat', 'fash' ); ?>
	<?php } else if ((is_front_page() && $zox_feat_layout == "14" ) || (is_front_page() && $zox_feat_layout == "15" ) || (is_front_page() && $zox_feat_layout == "16" ) || (is_category() && $zox_cat_layout == "14" ) || (is_category() && $zox_cat_layout == "15" ) || (is_category() && $zox_cat_layout == "16" ) ) { ?>
		<?php get_template_part( 'parts/featured/feat', 'tech' ); ?>
	<?php } else { ?>
		<?php get_template_part( 'parts/featured/feat', 'ent' ); ?>
	<?php } ?>
</div><!--zox-feat-wrap-->