<?php get_header(); ?>

<div class="container single-post">
    <div class="row">
        <?php
        if(have_posts())
        {
            while(have_posts())
            {
                the_post();
            ?>
                <!--******************** start section singl post ******************-->
                <div class="col-md-8">
                    <div class="post-title"><h3><?php the_title(); ?></h3></div>
                    <!-- author data -->
                    <div class="author">
                        <div class="row">
                            <div class="col-md-2">
                                 <?php echo get_avatar(get_the_author_meta('ID'),100,'','author',array('class' => 'img-thumbnail img-circle')) ?>
                            </div>
                            <div class="col-md-6">
                                  <a href="<?php the_permalink(); ?>">
                                      <h3 class="post-auther"><?php the_author_posts_link(); ?></h3>
                                      <a href="<?php the_permalink(); ?>"><?php the_author_meta('email'); ?></a>
                                  
                            </div>
                        </div>
                    </div>
                    <!-- info about post -->
                    <div class="post-info">
                        <span class="post-date"><i class="fa fa-calendar"></i> <?php the_date(); echo " "; the_time(); ?></span>
                        <span class="post-cat"><i class="fa fa-tags"></i> <?php the_category(',') ?></span>
                        <span class="post-comment"><i class="fa fa-comment"></i> <?php comments_popup_link('0 comment') ?></span>
                    </div>

                    <hr>
                    <!-- single post -->
                    <div class="main-post">
                        <?php the_post_thumbnail('',['class' => 'img-thumbnail img-responsive']); ?>
                        <div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <div class="comment-num">
                        <h3><?php comments_number(); ?></h3>
                    </div>
                    <div class="all-comments">
                        <?php comments_template(); ?>
                        <?php comment_form(array('class_form' => 'form-group')); ?>
                    </div>

                </div>
        <!--******************** end section singl post ******************-->
        
        <!--************ start sectiom feature ***************-->
        <div class="col-md-4 hidden-sm hidden-xs">
            <h3>Features</h3>
            <div class="row">
           <?php
        
        $first_post = array(
            'posts_per_page' => 7
        );
        
        $first_post1 = new WP_Query($first_post);
        
        
        if($first_post1->have_posts()) //start if
        {
            while($first_post1->have_posts())  //stert loop
            { ?>
             <?php $first_post1->the_post(); ?>
            <div class="col-md-12">
                <div class="main-post">
                    <?php the_post_thumbnail('',['class' => 'img-responsive' , 'size' => 100]); ?>
                    <a class="title" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a> 
                </div>
            </div>
        
        
            <?php
            } //end loop
        } //end if
        ?>
            </div>
        </div>
            
        <!--************ end sectiom feature ***************-->
        
            <?php
            }
        }
        ?>
        
    </div>
</div>

<?php get_footer(); ?>