<?php get_header();
if ( have_posts() ): while ( have_posts() ) : the_post();
 ?>

<main class="post_box">

  <div class="post_topimg">
    <div class="post_status">
      <?php $single_category=get_the_category()[0]; ?>
      <p class="category_name"><?php print esc_html($single_category->name); ?></p>
      <p class="post_date"><?php echo get_the_date("Y.m.d"); ?></p>
    </div>

    <?php
    //サムネイルの書き出し
          $thumbnail_id = get_post_thumbnail_id();
            if(has_post_thumbnail()){
            $eye_img = wp_get_attachment_image_src( $thumbnail_id,'size1');
              print'<img src="'.$eye_img[0] .'" alt="'. esc_html(get_the_title()) .'" class="eyecatch"/>';
            }else{
              print '<img src="'.get_template_directory_uri().'/img/eyecatch.png" alt="'. get_the_title() .'" class="eyecatch">';
            }
      ?>

      <?php
      //タグの取得と書き出し
        $posttags = get_the_tags();
        if ($posttags) {
      ?>
        <ul class="post_tag mb40">
      <?php
        foreach ($posttags as $tag) {
          echo esc_html('<li class="mr5">'.$tag->name.'</li>') ;
        }
      ?>
        </ul>
      <?php }; ?>

    <h1 class="post_title"><?php  esc_html(the_title()); ?></h1>
  </div>

  <p class="post_text"> <?php the_content(); ?></p>

  <?php
    $prevpost = get_adjacent_post(false, '', true); //前の記事URL取得
    $nextpost = get_adjacent_post(false, '', false); //次の記事URL取得
  ?>
  <ul class="post_transition">
    <?php if ( $prevpost ) :?>
      <li><a href="<?php print get_permalink($prevpost->ID); ?>">前へ</a></li>
    <?php endif; ?>

    <?php if ( $nextpost ) :?>
      <li><a href="<?php print get_permalink($nextpost->ID); ?>">次へ</a></li>
    <?php endif; ?>
  </ul>

</main>
<?php
  endwhile;
  endif;
?>

<?php get_footer(); ?>
</body>

</html>