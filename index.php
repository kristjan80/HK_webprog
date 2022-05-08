<?php get_header(); ?>
<section>
            <img src= <?php echo '"'.get_site_url().'/wp-content/themes/'.get_template().'/assets/images/main.jpg"'; ?> alt="Info Image" class="main-image">
            <div class="main-container">

                      <?php
                        // Get latest 5 posts and display them. Very similar to what was done in single.php
                        // Any posts?
                        if (have_posts()) {
                          $post_count = 0;
                          $max_posts = 4;

                          while(have_posts() && $post_count < $max_posts) {
                              the_post();
                              // Need to check the CVE score to get the correct style value. Easier than single.php case.
                              $style_name = "";
                              $rating_val = get_post_meta(get_the_ID(),$key="RATING",$single=true);
                              $rating_val = (int)$rating_val;
                              if($rating_val < 3) $style_name = "score-high";
                              else if($rating_val >=3 || $rating_val <=5) $style_name = "score-med";
                              else $rating_val = "score-default";

                              // Start displaying
                              // get_the_title(), get_the_permalink would have given me one line solution but the used ones are recomended solutions for looping
                              echo '<div class="intro-element"><div><h2>';
                              the_title();
                              echo '</h2> <div class="'.$style_name.'"> <p>'.$rating_val.'</p> </div> <p class="summary">';
                              the_excerpt();
                              echo ' </p> <a href="';
                              the_permalink();
                              echo '"> LOE EDASI </a> </div> </div>';
                              $post_count++;
                          }
                        }

                        else {
                          echo '<h1>No posts yet</h1>';
                        }


                      ?>
            </div>
</section>
<?php get_footer(); ?>