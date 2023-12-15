<?php get_header() ?>
<section class="banner text--center" style="background-image: url('<?php echo get_field('banner_image') ?>');">
            <div class="container">
                <div class="banner__intro">
                    <h1 class="text--light"><?php echo get_field('banner_text') ?></h1>
                    <p class="text--light"><?php echo get_field('banner_writeup') ?></p>
                </div>
            </div>
        </section>

        <section class="latestBlog py--10">
            <div class="container">
                <div class="latestBlog__wrapper">
                <?php 
                            $args = array(
                            'post_type' => 'post', 
                            'posts_per_page' => 1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                    <div class="latestBlog__desc">
                        <h2 class="mb--1 text--secondary"><?php the_title()?></h3>
                        <h1 class="mb--1 text--primary"><?php the_title()?></h2>
                        <p class="mb--3">
                           <?php echo get_the_excerpt()?>
                        </p>
                        <a class="text--secondary t--bold" href="<?php the_permalink() ?>">Read More</a>
                    </div>
                    
                    <div class="latestBlog__img">
                    <?php echo get_the_post_thumbnail() ?>
                    </div>
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>

                </div>
            </div>
        </section>

        <section class="allPost text--center py--10">
            <h2 class="text--primary mb--4">All Post</h2>

                <div class="allPost__category py--6">
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Brands</p>
                        </div>
                        <div class="allPost__wrapper">
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            // 'offset' => 1,

                            //displays posts with tech as category
								'tax_query'=> array(
								array(
									'taxonomy' => 'category',
									'field' => 'slug',
									'terms' => 'brands',
								),
								),
								
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                            <div class="allPost__card">
                                <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/blog-card-img.png" alt=""> -->
                                <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <p class="mb--4"><?php echo get_the_excerpt() ?></p>
                                    <div class="readMore-share d--flex justify--between align--center">
                                        <a class="text--primary" href="<?php echo the_permalink()?>">READ MORE ></a>
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </div>
                                </div>
                            </div>         
                        
                        <?php
                            endwhile;
                            else :
                                echo "no available content yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                   

                        </div>
                        <a class="viewAll text--secondary" href="./single-category.html">View All</a>
                    </div>
                </div>

                <div class="allPost__category py--6 bg--dark-gray">
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Cars</p>
                        </div>
                        <div class="allPost__wrapper">
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            // 'offset' => 1,

                            //displays posts with tech as category
								'tax_query'=> array(
								array(
									'taxonomy' => 'category',
									'field' => 'slug',
									'terms' => 'cars',
								),
								),
								
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="allPost__card">
                                <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/blog-card-img.png" alt=""> -->
                                <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <p class="mb--4"><?php echo get_the_excerpt() ?></p>
                                    <div class="readMore-share d--flex justify--between align--center">
                                        <a class="text--primary" href="<?php echo the_permalink()?>">READ MORE ></a>
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </div>
                                </div>
                        </div> 

                            <?php
                                endwhile;
                                else :
                                    echo "no available content yet";
                                endif;
                                wp_reset_postdata();
                            ?>
                            

                        </div>
                        <a href="./single-category.html" class="viewAll text--secondary">View All</a>
                    </div>
                </div>

                <div class="allPost__category py--6"> 
                    <div class="container">
                        <div class="allPost__title">
                            <p class="title">Wheel</p>
                        </div>
                        <div class="allPost__wrapper">
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            // 'offset' => 1,

                            //displays posts with tech as category
								'tax_query'=> array(
								array(
									'taxonomy' => 'category',
									'field' => 'slug',
									'terms' => 'wheel-drive',
								),
								),
								
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                        <div class="allPost__card">
                                <!-- <img src="<?php echo get_template_directory_uri() ?> ./img/blog-card-img.png" alt=""> -->
                                <?php echo get_the_post_thumbnail() ?>
                                <div class="allPost__card__desc text--left">
                                    <h3 class="text--primary mb--1"><?php the_title() ?></h3>
                                    <p class="mb--4"><?php echo get_the_excerpt() ?></p>
                                    <div class="readMore-share d--flex justify--between align--center">
                                        <a class="text--primary" href="<?php echo the_permalink()?>">READ MORE ></a>
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </div>
                                </div>
                        </div> 
                            <?php
                            endwhile;
                            else :
                                echo "no available content yet";
                            endif;
                            wp_reset_postdata();
                        ?>
                   
                          
                            

                        </div>

                      
                        <a href="./single-category.html" class="viewAll text--secondary">View All</a>
                    </div>
                </div>

        </section>
        <?php get_footer()?>