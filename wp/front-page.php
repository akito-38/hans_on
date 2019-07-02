
<?php get_header(); ?>
<main class="top_box">
  <div class="top_heroimg_bg">
    <div class="heroimg_box">
      <div class="heroimg_box_">
        <h1><br>作っただけでは<br>終わらないWEB制作</h1>

        <a href="" class="default_btn">サービスの詳細へ</a>
      </div>
    </div>
  </div>
<!-- DOER NOTE -->

<!-- お知らせ -->
  <section class="title_box">
    <h1 class="title_h1">お知らせ</h1>
  </section>
  <ul class="post_list_box">
<?php
  $args = array(
    'post_type' => 'post',
    'paged' => 1,
    'posts_per_page' => 10,
  );
  $st_query = new WP_Query( $args );
?>
<?php 
if ( $st_query->have_posts() ): 
  while ( $st_query->have_posts() ) : $st_query->the_post(); 
?>

    <li class="post_list">
      <a href="<?php print get_the_permalink() ?>">
      <div class="post_list_box">
        <p class="category_name mb10"><?php echo esc_html(get_the_category()[0]->name); ?></p>
        <h1 class="mb10"><?php print esc_html(get_the_title()); ?></h1>
        <div class="post_list_status">
        <?php
          $posttags2 = get_the_tags();
          if ($posttags2) {
        ?>
      
        <ul class="post_tag flort_l">
        <?php
          foreach ($posttags2 as $tag) {
            echo '<li>'. esc_html($tag->name).'</li> ' ;
          }
        ?>
        </ul>
  <?php  } ?>
          <p class="post_date flort_r"><?php echo  esc_html(get_the_date("Y.m.d")); ?></p>
        </div>
      </div>
     <?php
          $thumbnail_id = get_post_thumbnail_id();
            if(has_post_thumbnail()){
            $eye_img = wp_get_attachment_image_src( $thumbnail_id);
              print'<img src="'.$eye_img[0] .'" alt="'.  esc_html(get_the_title()) .'" class="eyecatch">';
            }else{
              print '<img src="'.get_template_directory_uri().'/img/post_img1.png" alt="'.  esc_html(get_the_title()) .'" class="eyecatch">';
            }
      ?>
      </a>
    </li>
    
<?php
 endwhile;
 else: ?>
  <p>記事はありません</p>
<?php 
  endif; 
  wp_reset_postdata();
?>
    <li class="more_btn"><a href="/category/doernote/news/" class="default_btn">もっと見る</a></li>
  </ul>

</main>
<?php get_footer(); ?>
</body>

</html>