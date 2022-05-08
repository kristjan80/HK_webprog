
    <?php get_header();?>
            <section>
            
                
                <div class="main-container" style="margin-top:15%">
                <img src= <?php echo '"'.get_site_url().'/wp-content/themes/'.get_template().'/assets/images/main.jpg"'; ?>  class="subpage-image">
                    <div class="main-content">
                   
                        <div>
                            <h2> <?php the_title(); ?> </h2>
                            <p class="summary"> 
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                        $postmetas = get_post_meta(get_the_ID());
                        // Sample code part poached from https://wpbeaches.com/show-all-post-meta-keys-and-values-for-a-post-in-wordpress/
                        foreach($postmetas as $meta_key=>$meta_value) {
                            // Ignore unwanted keyvalues that come from database
                            if($meta_key !== "_edit_lock" && $meta_key !== "_edit_last" && $meta_key !== "_encloseme") {

                                
                                // The class value depends on the key and real valuse in the field. So lets get checking
                                // Meta value repeats, because these types should only accept integer values. But if use wants to add other metas and use value as text, then they can
                                if ($meta_key === "RATING" || $meta_key === "TOP RANK") {
                                        // Every value returned currently is an array of values. Even if there is one element, it is still array. Currently we dont deal with multivalue metadata values.
                                        $meta_value = (int)$meta_value[0];
                                        if($meta_value < 3) $style_name = "score-high";
                                        else if($meta_value >=3 || $meta_value <=5) $style_name = "score-med";
                                        else $style_name = "score-default";
                                }
                                else if ($meta_key === "CWEs") {
                                        $meta_value = (int)$meta_value[0];
                                        if($meta_value > 45) $style_name = "score-high";
                                        else if($meta_value >= 25 || $meta_value <= 45) $style_name = "score-med";
                                        else $style_name = "score-default";
                                }
                                else if ($meta_key === "OCCURENCE") {
                                        $meta_value = (int)$meta_value[0];
                                        if($meta_value > 280) $style_name = "score-high";
                                        else if($meta_value >=180 || $meta_value <=280) $style_name = "score-med";
                                        else $style_name = "score-default";
                                }
                                else {
                                    // If somebody makes their own field or whatever,  just apply score-default style (orange purplish)
                                    $meta_value = (int)$meta_value[0];
                                    $style_name = "score-default";
                                }

                                echo '<div class="basic-data-element"> <b><p>' .$meta_key. '</p></b>
                                <div class="' .$style_name. '" > <p>' .$meta_value.  '</p> </div> </div>';
                            }
                        }

                    ?>

                </div>
               
                </div>
            </div>
        </section>

    </body>

    <?php get_footer();?>