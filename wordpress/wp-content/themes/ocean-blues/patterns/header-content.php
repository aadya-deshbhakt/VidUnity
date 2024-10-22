<?php

/**
 * Title: Header Content
 * Slug: ocean-blues/header-content
 * Categories: ocean-blues, header
 */
$OCEAN_BLUES_url = trailingslashit(get_template_directory_uri());
$OCEAN_BLUES_images = array(
    $OCEAN_BLUES_url . 'assets/images/slider-bg.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"40px","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($OCEAN_BLUES_images[0]) ?>","id":6680,"source":"file","title":"banner_bg-2-2"}}},"className":"ocean-blues-main-header is-style-ocean-blues-boxshadow-medium","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group ocean-blues-main-header is-style-ocean-blues-boxshadow-medium" style="padding-top:0;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"right":[],"left":[]},"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group is-style-default" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:15px;padding-bottom:15px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontFamily":"dekko"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-shade","overlayTextColor":"heading-color","className":"ocean-blues-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"dimRatio":0,"minHeight":760,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"940px"}} -->
    <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-bottom:20px;min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('Let It All Go, And', 'ocean-blues') ?> <br/> <?php esc_html_e(' Move Ahead', 'ocean-blues') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'ocean-blues') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"50px","right":"50px","top":"10px","bottom":"10px"}}},"className":"is-style-fill","fontSize":"medium","fontFamily":"dekko"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill has-dekko-font-family has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-width:1px;border-radius:0px;padding-top:10px;padding-right:50px;padding-bottom:10px;padding-left:50px" href="#"><?php esc_html_e('Learn More', 'ocean-blues') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"0px","width":"1px"},"spacing":{"padding":{"left":"50px","right":"50px","top":"10px","bottom":"10px"}}},"className":"is-style-fill","fontSize":"medium","fontFamily":"dekko"} -->
                <div class="wp-block-button has-custom-font-size is-style-fill has-dekko-font-family has-medium-font-size"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-width:1px;border-radius:0px;padding-top:10px;padding-right:50px;padding-bottom:10px;padding-left:50px" href="#"><?php esc_html_e('Browse', 'ocean-blues') ?></a></div>
                <!-- /wp:button --></div>
            <!-- /wp:buttons -->

        </div>
       
    </div>
     <!-- wp:social-links {"openInNewTab":true,"showLabels":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
     <ul class="wp-block-social-links has-visible-labels is-style-default"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->

        <!-- wp:social-link {"url":"#","service":"chain"} /-->

        <!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
        <!-- /wp:social-links -->
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->