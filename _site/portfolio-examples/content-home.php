<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <!--slider-->
  <?php if( have_rows('slideshow') ): ?>
    <div class="slides" id="home-slideshow">
      <?php while( have_rows('slideshow') ): the_row();
		    $image = get_sub_field('image');
		    $title = get_sub_field('title');
		    $link = get_sub_field('link');
      ?>
      <div class="slide" style="background-image:url('<?php echo $image; ?>');">
        <div class="content">
          <div class="container">
          <div class="title">
            <?php echo $title; ?>
          </div>
          <div class="link">
            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
<!--welcome-->
<?php if( have_rows('welcome') ): ?>
    <?php while( have_rows('welcome') ): the_row();
        $image = get_sub_field('coverage_map');
        $heading = get_sub_field('subheading');
        $copy = get_sub_field('copy');
        $link = get_sub_field('link');
    ?>
    <div class="welcome">
      <div class="container">
        <div class="map wow fadeInLeft">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
          <p class="caption"><?php echo $image['caption']; ?></p>
        </div>
        <div class="content wow fadeInRight">
          <h2><?php echo $heading; ?></h2>
          <?php echo $copy; ?>
          <a href="<?php echo $link['url']; ?>" class="blue-btn"><?php echo $link['title']; ?></a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<!--services-->
<?php
$args = array(
  'post_type'   => 'services',
  'post_status' => 'publish',
  'posts_per_page' => '-1',
    );
    $service = new WP_Query( $args );
    if( $service->have_posts() ) :
    ?>
      <div class="services">
      <div class="container">
        <?php
            while( $service->have_posts() ) :
            $service->the_post();
        ?>
        <div class="service wow fadeInUp">
          <?php if(the_field('icon')): ?>
            <span class="service-icon">
              <?php the_field('icon'); ?>
            </span>
          <?php endif; ?>
          <?php the_title('<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>'); ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="blue-btn">Learn More</a>
        </div>
      <?php endwhile;
        wp_reset_postdata();?>
      </div>
    </div>
      <?php endif;?>

  <!--partners-->
  <?php
  $args = array(
    'post_type'   => 'partners',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
      );
      $partner = new WP_Query( $args );
      if( $partner->have_posts() ) :
      ?>
        <div class="partners wow fadeInUp">
        <div class="container">
          <div class="responsive">
          <?php
              while( $partner->have_posts() ) :
              $partner->the_post();
          ?>
          <div class="partner">
            <a href="<?php the_field('url'); ?>">
              <?php
                $image = get_field('logo');
                if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </a>
          </div>
        <?php endwhile;
          wp_reset_postdata();?>
        </div>
        </div>
      </div>
  <?php endif;?>

<!--projects -->
<?php
$args = array(
  'post_type'   => 'projects',
  'post_status' => 'publish',
  'posts_per_page' => '12',
    );
    $project = new WP_Query( $args );
    if( $project->have_posts() ) :
    ?>
      <div class="projects wow fadeInUp">
      <div class="container">
        <h2>Projects</h2>
        <div class="responsive-projects">
        <?php
            while( $project->have_posts() ) :
            $project->the_post();
        ?>
        <div class="project">
          <div class="image">
            <?php
            $images = get_field('images');
            $image  = $images[0];
            if( $image ) : ?>
                <div class="project-img" style="background-image:url('<?php echo $image; ?>')">
                </div>
            <?php endif; ?>
            <div class="content">
              <?php the_title('<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>'); ?>
              <div class="tagged-services">
                <?php
                  $services = get_field('services');
                    if( $services): ?>
                      <?php foreach( $services as $post): ?>
                        <?php setup_postdata($post); ?>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <?php endforeach; ?>
                      <?php $project->reset_postdata(); ?>
                    <?php endif; ?>
              </div>
              <div class="tagged-markets">
                <?php
                  $markets = get_field('market');
                    if( $markets): ?>
                      <?php foreach( $markets as $post): ?>
                        <?php setup_postdata($post); ?>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <?php endforeach; ?>
                      <?php $project->reset_postdata(); ?>
                    <?php endif; ?>
              </div>
            </div>
        </div>
        </div>
      <?php endwhile;
        wp_reset_postdata();?>
      </div>
      </div>
    </div>
<?php endif;?>
<!--qualifications-->
<?php if( have_rows('qualifications') ): ?>
	<div class="qualifications">
	<?php while( have_rows('qualifications') ): the_row();
		$title = get_sub_field('title');
		$copy = get_sub_field('description');
		?>
    <div class="qualification">
      <h3 class="wow fadeInUp"><?php echo $title;?></h3>
      <span class="description wow fadeInUp" data-wow-delay="150ms">
        <?php echo $copy; ?>
      </span>
    </div>
	<?php endwhile; ?>
</div>
<?php endif; ?>
<!--testimonial slider-->
<?php
$args = array(
  'post_type'   => 'projects',
  'post_status' => 'publish',
  'posts_per_page' => '4',
    );
    $project = new WP_Query( $args );
    if( $project->have_posts() ) :
    ?>
      <div class="testimonials">
      <div class="container">
        <p class="subheading wow fadeInUp">Hear What People Are Saying About</p>
        <h3 class="wow fadeInUp">Transcend Communications</h3>
        <div class="testimonial-slides" id="testimonial-slider">
        <?php
            while( $project->have_posts() ) :
            $project->the_post();
        ?>

        <?php if( have_rows('testimonials') ): ?>

            <?php while( have_rows('testimonials') ): the_row();
		          $copy = get_sub_field('copy');
		            $credit = get_sub_field('credit');
		              ?>
                  <div class="slide">
                    <span class="testimonial-copy wowfadeInUp" data-wow-delay="150ms"><?php echo $copy; ?></span>
                    <span class="testimonial-credit wowfadeInUp" data-wow-delay="200ms"><?php echo $credit; ?></span>
                  </div>
                <?php endwhile; ?>

        <?php endif; ?>

      <?php endwhile;
        wp_reset_postdata();?>
      </div>
      </div>
      </div>
<?php endif;?>

</article><!-- .post -->
