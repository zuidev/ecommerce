<?php
/**
 * The template part for displaying grid post
 *
 * @package VW Ecommerce Store
 * @subpackage vw-ecommerce-store
 * @since VW Ecommerce Store 1.0
 */
?>

<div class="col-lg-4 col-md-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
	      	<div class="box-image">
	          	<?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
	          	?>
	        </div>
	        <h2 class="section-title"><?php the_title();?></h2>
	        <div class="new-text">
	        	<div class="entry-content">
	        		<p>
		              <?php $theme_lay = get_theme_mod( 'vw_ecommerce_store_excerpt_settings','Excerpt');
		              if($theme_lay == 'Content'){ ?>
		                <?php the_content(); ?>
		              <?php }
		              if($theme_lay == 'Excerpt'){ ?>
		                <?php if(get_the_excerpt()) { ?>
		                  <?php $excerpt = get_the_excerpt(); echo esc_html( vw_ecommerce_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_ecommerce_store_excerpt_number','30')))); ?><?php echo esc_html(get_theme_mod('vw_ecommerce_store_excerpt_suffix',''));?>
		                <?php }?>
		              <?php }?>
		            </p>
	        	</div>
	        </div>
	        <?php if( get_theme_mod('vw_ecommerce_store_button_text','READ MORE') != ''){ ?>
		        <div class="more-btn">
		          <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_ecommerce_store_button_text','READ MORE'));?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','vw-ecommerce-store' );?></span></a>
		        </div>
		    <?php } ?>
	    </div>
	    <div class="clearfix"></div>
  	</article>
</div>