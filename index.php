<?php get_header(); ?>
<!--************ start all posts ***************-->
<div class="container all-posts">
    <div class="row">
        <?php
        
        $first_post = array(
            'posts_per_page' => 3
        );
        
        $first_post1 = new WP_Query($first_post);
        
        
        if($first_post1->have_posts()) //start if
        {
            while($first_post1->have_posts())  //stert loop
            { 
                $first_post1->the_post();
                if($first_post1->current_post == 0)
                { ?>
                   
                    <div class="col-md-5 col-sm-12 col-sx-12">
                        <div class="main-post">
                            <?php the_post_thumbnail('',['class' => 'img-responsive']); ?>
                             <a href="<?php the_permalink(); ?>">
                                <div class="cover">
                                    <div class="categories"><?php the_category(); ?></div>
                                    <a class="title" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-sx-12">
                <?php
                }
                else
                { //start else
                    ?>
                    
                     <div class="row">
                         <div class="col-md-12">
                             <div class="main-post1">
                                <?php the_post_thumbnail('',['class' => 'img-responsive']); ?>
                                 <a href="<?php the_permalink(); ?>">
                                    <div class="cover1">
                                        <div class="categories"><?php the_category(); ?></div>
                                        <a class="title" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
                                    </div>
                                </a>
                            </div>
                         </div>
                     </div>
                    
                    <?php
                } //end else
            } //end loop ?>
                </div>
        <?php
        } //end if
        ?>
        
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="block"></div>
        </div>
       
    </div>
     <hr class="border" />
</div>
<!--************ end all posts ***************-->





<div class="container">
    <div class="egypt-news">
    
        <h3>egypt news</h3>
    <?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>
    </div>
</div>


<!--****************** start section features ************************-->
<div class="feature">
<div class="container">
    
    <div class="row">
        <!-- first column to show featured posts -->
        <div class="col-md-8">
            <hr class="border">
            <h3>features</h3>
            <div class="row">
            
            <?php
                /*********** to get feature posts with acf plugin **************/
                $posts = get_posts(array(
                    'meta_query' => array(
                        array(
                            'key' => 'featured', // name of custom field
                            'value' => 'feature',
                        )
                    )
                ));

                if( $posts ) { //start if 
                           foreach ( $posts as $post ) : //stsrt foreach 
                            ?>
                                 
                                   <div class="col-md-6 col-sm-6 col-xs-12 block-center">
                                       <div class="featured">
                                           <a href="<?php echo get_permalink(); ?>">
                                           <?php the_post_thumbnail('',['class' => 'img-responsive']); ?>
                                           <div class="cover">
                                            
                                            </div>
                                            </a>
                                        </div>
                                   </div>
                                  
                            <?php
                          endforeach; //end foreach 
                } //end if
                        
            
            ?>
            </div>
        </div>
        <!-- end first column -->
        <!-- second column to show top stories -->
        <div class="col-md-4">
            <hr class="border">
            <div class="top-story">
                <?php
                
                
                get_sidebar();
                
                /************* get the most view posts with wordpress popular posts *****************/
                
                /*if(is_active_sidebar('main-sidebar'))
                {
                    dynamic_sidebar('main-sidebar');
                }*/
                ?>
            </div>
        </div>
        <!-- end second -->
    </div>
</div>
</div>
<!--****************** end section features ************************-->





<?php get_footer(); ?>