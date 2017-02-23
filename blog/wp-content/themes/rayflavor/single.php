<? get_header(); ?>

  <div class='container'>
<!--     <div class='column'>
      <img src="http://www.placecage.com/200/300">
    </div> -->
      <div class='columns'>

        <?

        if ( have_posts() ) {
          while ( have_posts() ) { ?>
            <div class='blog-post column content'>
              <!-- <? the_post(); ?> -->
              <h2 id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
              <?php the_title(); ?></a></h2>
              <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
              <p><? the_content(); ?></p>
            </div>
            <?
          } // end while
        } // end if
        ?>
      </div>
  </div>

<? get_footer(); ?>
