<?php
/**
 * Title: Two-column posts with heading (variant)
 * Slug: solarone/query-posts-2-col-variant
 * Categories: posts
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"variant-background-primary","paddingTop":18,"paddingBottom":18} -->
<div class="wp-block-group alignfull has-variant-background-primary-background-color has-background pt__18 pb__18"><!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-l"} -->
<div class="wp-block-ainoblocks-grid-container ab-grid-block alignwide col-gap-l"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":4,"gridColumnEndDesktop":10,"gridColumnStartTablet":2,"gridColumnEndTablet":12,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__4 col_end_d__10 col_start_t__2 col_end_t__12 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"2px"}},"textColor":"variant-tertiary","fontSize":"text-xxs"} -->
<p class="has-text-align-center has-variant-tertiary-color has-text-color has-text-xxs-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase;letter-spacing:2px"><?php echo esc_html__('Recent Highlights', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"variant-font-primary","fontSize":"text-xxxl","paddingTop":5} -->
<h2 class="has-text-align-center has-variant-font-primary-color has-text-color has-text-xxxl-font-size pt__5"><?php echo esc_html__('Learn more about marketing in our featured blog entries', 'soloarone'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":12,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingTop":13} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__12 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pt__13"><!-- wp:query {"queryId":4,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":2},"align":"wide","className":"gap-l","layout":{"inherit":false}} -->
<section class="wp-block-query alignwide gap-l"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"className":"br-all__l"} /-->

<!-- wp:post-terms {"term":"category","textColor":"variant-font-secondary","fontSize":"text-xs"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"textColor":"variant-font-primary","fontSize":"text-xxl"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"textColor":"variant-font-secondary","fontSize":"text-xs"} /-->
<!-- /wp:post-template --></section>
<!-- /wp:query --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container --></div>
<!-- /wp:group -->