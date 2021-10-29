<?php 
/*
Template Name: Front page
*/
get_header(); ?>
        <div class="🎩">
            <h1>Stupider than <span>NFT</span></h1>
            <p>Forget about Cryptocurrencies, forget about NFT, here's the new stupid trend to waste your money with </p>
        </div>

        <div class="💵">
            <p>filter items</p>
            <div class="🖼">
                <?php $args_query = array(
                        'post_type' => 'token',
                        'posts_per_page' => 6,
                        'order' => 'DESC'
                        );
                        $query = new WP_Query( $args_query ); ?>
                <?php if ($query-> have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="🧩">
                            <div class="🧩__img">
                                <picture>
                                    <source media="(min-width: 1200px)" srcset="<?php echo get_the_post_thumbnail_url();?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </picture>
                            </div>
                            <div class="🧩__infos">
                                <p><?php the_field('name'); ?></p>
                                <p> <?php the_field('price'); ?> ETH<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/480px-Ethereum-icon-purple.svg.png" class="emoji" alt="ethereum icon"></p>
                                <div>
                                    <button>BUY</button>
                                    <span></span>
                                </div>   
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <div class="🧩">
                    <div class="🧩__img">
                        <picture>
                            <source media="(min-width:1200px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/chair3.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chair.png" alt="chair">
                        </picture>
                    </div>
                    <div class="🧩__infos">
                        <p>Chair #1</p>
                        <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/480px-Ethereum-icon-purple.svg.png" class="emoji" alt="ethereum icon"> 0.456 ETH</p>
                        <div>
                            <button>BUY</button>
                            <span></span>
                        </div>
                    </div>
                    
                </div>
                <div class="🧩">
                    <div class="🧩__img">
                        <picture>
                            <source media="(min-width:50px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/chair3.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chair.png" alt="chair">
                        </picture>
                    </div>
                    <div class="🧩__infos">
                        <p>Chair #1</p>
                        <p> 0.456 ETH<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/480px-Ethereum-icon-purple.svg.png" class="emoji" alt="ethereum icon"></p>
                        <div>
                            <button>BUY</button>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="🧩">
                    <div class="🧩__img">
                        <picture>
                            <source media="(min-width:50px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/chair2.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/chair.png" alt="chair">
                        </picture>
                    </div>
                    <div class="🧩__infos">
                        <p>Chair #1</p>
                        <p> 0.456 ETH<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/480px-Ethereum-icon-purple.svg.png" class="emoji" alt="ethereum icon"></p>
                        <div>
                            <button>BUY</button>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>