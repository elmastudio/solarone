<?php
/**
 * Title: Two-column testimonials on cards (default)
 * Slug: solarone/testimonials-cards-2-col-default
 * Categories: testimonials
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"var:preset|spacing|9","right":"var:preset|spacing|9"}}},"backgroundColor":"background-primary","paddingTop":18,"paddingBottom":18} -->
<div class="wp-block-group alignfull has-background-primary-background-color has-background pt__18 pb__18" style="padding-right:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)">
<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-l"} -->
<div class="wp-block-ainoblocks-grid-container ab-grid-block alignwide col-gap-l"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":4,"gridColumnEndDesktop":10,"gridColumnStartTablet":2,"gridColumnEndTablet":12,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__4 col_end_d__10 col_start_t__2 col_end_t__12 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking"><!-- wp:heading {"textAlign":"center","textColor":"font-primary","fontSize":"text-xxxl","paddingTop":0} -->
<h2 class="has-text-align-center has-font-primary-color has-text-color has-text-xxxl-font-size"><?php echo esc_html__('Find out what our most successful clients say about us', 'soloarone'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"font-secondary","fontSize":"text-m","paddingTop":7} -->
<p class="has-text-align-center has-font-secondary-color has-text-color has-text-m-font-size pt__7"><?php echo esc_html__('It’s always the best source to hear from others who have already worked with us.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container -->

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-l","paddingTop":13} -->
<div class="wp-block-ainoblocks-grid-container ab-grid-block alignwide col-gap-l pt__13"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","borderColor":"border-secondary","backgroundColor":"background-primary","style":{"border":{"width":"1px"}},"borderRadius":"l"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking has-border-color has-border-secondary-border-color has-background-primary-background-color has-background br-all__l" style="border-width:1px"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-icon quote size-l has-font-secondary-color has-text-color"><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
<!-- /wp:ainoblocks/icon -->

<!-- wp:group {"paddingLeft":8} -->
<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"font-secondary","fontSize":"text-l","paddingTop":8,"paddingBottom":5,"paddingLeft":0,"paddingRight":0} -->
<p class="has-font-secondary-color has-text-color has-text-l-font-size pt__8 pb__5"><?php echo esc_html__('The SolarOne team has been a pleasure to work with. Their knowledge of digital marketing along with their ability to be flexible and meet our changing needs has allowed us to reach new levels of exposure.', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/author {"name":"Inger Long","info":", Paradigm founder","infoTextColor":"#323232","nameTextColor":"#323232","layout":"floated-left"} -->
<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":22066,"imgRadius":100,"borderWidth":2,"backgroundColor":"quinary"} -->
<img class="wp-block-ainoblocks-profile-image has-quinary-background-color has-background" style="width:calc(40px + 2px * 2);padding:2px;border-radius:100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-img-small.jpeg" alt=""/>
<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#323232" class="wp-block-ainoblocks-author__name"><?php echo esc_html__('Inger Long', 'soloarone'); ?></span><span style="color:#323232" class="wp-block-ainoblocks-author__info"><?php echo esc_html__(', Paradigm founder', 'soloarone'); ?></span></div></div></div>
<!-- /wp:ainoblocks/author --></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/card --></div>
<!-- /wp:ainoblocks/testimonial --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":12,"gridColumnStartTablet":7,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":4,"borderColor":"border-secondary","backgroundColor":"background-primary","style":{"border":{"width":"1px"}},"borderRadius":"l"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__12 col_start_t__7 col_end_t__13 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_t__0 mt_m__4 has-border-color has-border-secondary-border-color has-background-primary-background-color has-background br-all__l" style="border-width:1px"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-icon quote size-l has-font-secondary-color has-text-color"><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
<!-- /wp:ainoblocks/icon -->

<!-- wp:group {"paddingLeft":8} -->
<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"font-secondary","fontSize":"text-l","paddingTop":8,"paddingBottom":5,"paddingLeft":0,"paddingRight":0} -->
<p class="has-font-secondary-color has-text-color has-text-l-font-size pt__8 pb__5"><?php echo esc_html__('The SolarOne team is a standout in the industry, working together to make sure that every client is being provided with our best work.', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/author {"name":"Megan Hawkins","info":", Sixteen Coworking Lab","infoTextColor":"#323232","nameTextColor":"#323232","layout":"floated-left"} -->
<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":22066,"imgRadius":100,"borderWidth":2,"backgroundColor":"quarternary"} -->
<img class="wp-block-ainoblocks-profile-image has-quarternary-background-color has-background" style="width:calc(40px + 2px * 2);padding:2px;border-radius:100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-img-small.jpeg" alt=""/>
<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#323232" class="wp-block-ainoblocks-author__name"><?php echo esc_html__('Megan Hawkins', 'soloarone'); ?></span><span style="color:#323232" class="wp-block-ainoblocks-author__info"><?php echo esc_html__(', Sixteen Coworking Lab', 'soloarone'); ?></span></div></div></div>
<!-- /wp:ainoblocks/author --></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/card --></div>
<!-- /wp:ainoblocks/testimonial --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":2,"gridColumnEndDesktop":7,"gridColumnStartTablet":1,"gridColumnEndTablet":7,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopDesktop":7,"marginTopTablet":6,"marginTopMobile":5,"borderColor":"border-secondary","backgroundColor":"background-primary","style":{"border":{"width":"1px"}},"borderRadius":"l","paddingTop":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__2 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_d__7 mt_t__6 mt_m__5 has-border-color has-border-secondary-border-color has-background-primary-background-color has-background br-all__l pt__7" style="border-width:1px"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-icon quote size-l has-font-secondary-color has-text-color"><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
<!-- /wp:ainoblocks/icon -->

<!-- wp:group {"paddingLeft":8} -->
<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"font-secondary","fontSize":"text-l","paddingTop":8,"paddingBottom":5,"paddingLeft":0,"paddingRight":0} -->
<p class="has-font-secondary-color has-text-color has-text-l-font-size pt__8 pb__5"><?php echo esc_html__('We have been using ClickMagick for a long time and are very pleased with the results. We have been able to achieve double digit growth for our clients year after year for a reason.', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/author {"name":"Charlotte Kennedy","info":", CrowdCamp","infoTextColor":"#323232","nameTextColor":"#323232","layout":"floated-left"} -->
<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":22066,"imgRadius":100,"borderWidth":2,"backgroundColor":"quarternary"} -->
<img class="wp-block-ainoblocks-profile-image has-quarternary-background-color has-background" style="width:calc(40px + 2px * 2);padding:2px;border-radius:100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-img-small.jpeg" alt=""/>
<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#323232" class="wp-block-ainoblocks-author__name"><?php echo esc_html__('Charlotte Kennedy', 'soloarone'); ?></span><span style="color:#323232" class="wp-block-ainoblocks-author__info"><?php echo esc_html__(', CrowdCamp', 'soloarone'); ?></span></div></div></div>
<!-- /wp:ainoblocks/author --></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/card --></div>
<!-- /wp:ainoblocks/testimonial --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":12,"gridColumnStartTablet":7,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"stretch","justifyItem":"stretch","marginTopDesktop":7,"marginTopTablet":6,"marginTopMobile":5,"borderColor":"border-secondary","backgroundColor":"background-primary","style":{"border":{"width":"1px"}},"borderRadius":"l","paddingTop":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__12 col_start_t__7 col_end_t__13 col_start_m__1 col_end_m__13 align-self__stretch justify-self__stretch no-stacking mt_d__7 mt_t__6 mt_m__5 has-border-color has-border-secondary-border-color has-background-primary-background-color has-background br-all__l pt__7" style="border-width:1px"><!-- wp:ainoblocks/testimonial {"style":"indent-l","paddingBottom":0} -->
<div class="wp-block-ainoblocks-testimonial indent-l"><!-- wp:ainoblocks/card {"borderRadius":"none","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10,"className":"relative"} -->
<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 relative br-all__none"><!-- wp:ainoblocks/icon {"iconType":"quote","iconSize":"size-l","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-icon quote size-l has-font-secondary-color has-text-color"><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.25 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path><path d="M24 2h-11.25v11.25h6l-3.75 9h5.25l3.75-9v-11.25z"></path></svg></div>
<!-- /wp:ainoblocks/icon -->

<!-- wp:group {"paddingLeft":8} -->
<div class="wp-block-group pl__8"><!-- wp:paragraph {"placeholder":"Write testimonial text...","textColor":"font-secondary","fontSize":"text-l","paddingTop":8,"paddingBottom":5,"paddingLeft":0,"paddingRight":0} -->
<p class="has-font-secondary-color has-text-color has-text-l-font-size pt__8 pb__5"><?php echo esc_html__('Solar One has a proven track record for setting up, managing and optimizing the online presence and marketing of businesses to deliver measurable improvements in leads and sales.', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/author {"name":"Mosel Thomas","info":", Superflux Agency","infoTextColor":"#323232","nameTextColor":"#323232","layout":"floated-left"} -->
<div class="wp-block-ainoblocks-author floated-left"><!-- wp:ainoblocks/profile-image {"imgID":22066,"imgRadius":100,"borderWidth":2,"backgroundColor":"quinary"} -->
<img class="wp-block-ainoblocks-profile-image has-quinary-background-color has-background" style="width:calc(40px + 2px * 2);padding:2px;border-radius:100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-img-small.jpeg" alt=""/>
<!-- /wp:ainoblocks/profile-image --><div class="wp-block-ainoblocks-author__text-wrapper"><div class="wp-block-ainoblocks-author__author"><span style="color:#323232" class="wp-block-ainoblocks-author__name"><?php echo esc_html__('Mosel Thomas', 'soloarone'); ?></span><span style="color:#323232" class="wp-block-ainoblocks-author__info"><?php echo esc_html__(', Superflux Agency', 'soloarone'); ?></span></div></div></div>
<!-- /wp:ainoblocks/author --></div>
<!-- /wp:group --></div>
<!-- /wp:ainoblocks/card --></div>
<!-- /wp:ainoblocks/testimonial --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container --></div>
<!-- /wp:group -->