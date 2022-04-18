<?php get_header(); ?>

<!--  PC DESIGN -->
<div class="banerImage">
    <div class="banerImage__text">
        <div class="text__textNumberOne">
            <p>
                آندرومدا واچ
            </p>
        </div>
        <div class="text__textNumberTwo">
            <p>
                نه تنها زمان را نشان می دهد
            </p>
        </div>
        <div class="text__text__numberThere">
            <p>
                بلکه تاریخ را نیز بازگو میکند
            </p>
        </div>
    </div>
</div>
<div class="underBaner">
    <div class="UnderBaner__text">
        <div class="text__special">
            <a href="#">ویژه</a>
        </div>
        <div class="text__luxury">
            <a href="#">لوکس</a>
        </div>
        <div class="text__bestSeller">
            <a href="#">پر فروش</a>
        </div>
        <div class="text__news">
            <a href="#">جدیدترین</a>
        </div>
    </div>
</div>

<!-- ******************  TEST   *********************** -->
<div class="contaner">
    <div class="postSection">
        <?php

        $args = array('cat' => 1);
        $category_posts = new WP_Query($args);

        if ($category_posts->have_posts()) :
            while ($category_posts->have_posts()) :
                $category_posts->the_post();
        ?>
                <div class="post">
                    <div class="post__textSection">
                        <div class='post-content'><?php the_content() ?></div>
                        <!-- <h1><?php the_title() ?></h1> -->


                    </div>
                    <div class="post__underText">
                        <div class="underText__shareSvg">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z" />
                            </svg>
                        </div>
                        <div class="underText__heartSvg">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                            </svg>
                        </div>
                        <div class="underSvg__addToCart">
                            <a href="#">اضافه به سبد خرید </a>
                
                        </div>
                    </div>
                </div>

            <?php
            endwhile;
        else :
            ?>
            Oops, there are no posts.
        <?php
        endif;
        ?>
    </div>
</div>

<!-- *******************   SECTION BANER 2   ******************** -->
<div class="BanerSectionTwo">
    <div class="banerSectionTwo__image"></div>
    <div class="banerSectionTwo__text">
        <p class="banerSectionTwo__text--textOne">با آندرومدا واچ </p>
        <p class="banerSectionTwo__text--textTwo"> زمان در دستان شما تغیر میکند   </p>
    </div>
</div>
<?php get_footer(); ?>