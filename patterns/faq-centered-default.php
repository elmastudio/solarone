<?php
/**
 * Title: Centered FAQs (default)
 * Slug: solarone/faq-centered-default
 * Categories: accordions
 */
?>

<!-- wp:group {"align":"full","backgroundColor":"background-primary","paddingTop":18,"paddingBottom":18} -->
<div class="wp-block-group alignfull has-background-primary-background-color has-background pt__18 pb__18"><!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-l"} -->
<div class="wp-block-ainoblocks-grid-container ab-grid-block alignwide col-gap-l"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":4,"gridColumnEndDesktop":10,"gridColumnStartTablet":2,"gridColumnEndTablet":12,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":8,"borderRadius":"none"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__4 col_end_d__10 col_start_t__2 col_end_t__12 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking mt_t__0 mt_m__8 br-all__none"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"tertiary","fontSize":"text-xxs"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-text-xxs-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase;letter-spacing:2px"><?php echo esc_html__('We are here to help you', 'soloarone'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"font-primary","fontSize":"text-xxxl","paddingTop":5} -->
<h2 class="has-text-align-center has-font-primary-color has-text-color has-text-xxxl-font-size pt__5"><?php echo esc_html__('Frequently asked questions', 'soloarone'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":5,"gridColumnEndDesktop":9,"gridColumnStartTablet":3,"gridColumnEndTablet":11,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":8} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__5 col_end_d__9 col_start_t__3 col_end_t__11 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking mt_t__0 mt_m__8"><!-- wp:paragraph {"align":"center","textColor":"font-secondary","fontSize":"text-m","paddingTop":8,"paddingBottom":10} -->
<p class="has-text-align-center has-font-secondary-color has-text-color has-text-m-font-size pt__8 pb__10"><?php echo esc_html__('Find the answers you are looking for by browsing through a number of questions we get asked a lot.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":3,"gridColumnEndDesktop":11,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","marginTopTablet":0,"marginTopMobile":8} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__3 col_end_d__11 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking mt_t__0 mt_m__8"><!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"What do you think is the best way to keep learning when you are running a business?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('What do you think is the best way to keep learning when you are running a business?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('Great question! My answer is there\'s no one right way to go about it. Even though today\'s fast-paced business world can demand optimised time management, self-accelerated education resources is critical for any entrepreneur looking to gain more knowledge on.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"What is the best digital marketing strategy that you have used?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('What is the best digital marketing strategy that you have used?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('We have used a diversified digital marketing strategy to grow our business including SEO, Social Media Marketing, PPC, Content Marketing, Email Marketing and even Mobile Marketing.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"What's your favourite type of marketing?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('What\'s your favourite type of marketing?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('Marketing is the communication of your brand vision, mission and value through a variety of channels.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"What are some things you do to help run your business?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('What are some things you do to help run your business?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('We offer a wide variety of marketing, communication and technical services to improve your business. Our solutions are fully adaptable and have proved successful time and time again.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"Can I upgrade my plan after my purchase?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('Can I upgrade my plan after my purchase?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('We offer a wide variety of marketing, communication and technical services to improve your business. Our solutions are fully adaptable and have proved successful time and time again.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","iconPosition":"icon__left","question":"What has been your biggest digital marketing challenge?","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7,"style":{"border":{"width":"1px"}},"borderColor":"border-secondary","textColor":"font-secondary"} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__left br__xs pt__7 pb__7 pl__7 pr__7 has-border-color has-border-secondary-border-color has-font-secondary-color has-background-secondary-background-color has-text-color has-background" style="border-width:1px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html__('What has been your biggest digital marketing challenge?', 'soloarone'); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html__('Marketing is the communication of your brand vision, mission and value through a variety of channels. We have used a diversified digital marketing strategy to grow our business including SEO, Social Media Marketing, PPC, Content Marketing, Email Marketing and even Mobile Marketing.', 'soloarone'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container --></div>
<!-- /wp:group -->