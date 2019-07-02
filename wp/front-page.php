
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
    'posts_per_page' => 1,
 
  );
  $st_query = new WP_Query( $args );
?>
<?php 
if ( $st_query->have_posts() ): 
  while ( $st_query->have_posts() ) : $st_query->the_post(); 
?>

    <li class="post_list">
      <a href="">
      <div class="post_list_box">
        <p class="category_name mb10">カテゴリネームs</p>
        <h1 class="mb10">記事のタイトル文が入ります。記事のタイトル文が入ります。記事のタイトル文が入ります。…</h1>
        <div class="post_list_status">
          <ul class="post_tag flort_l">
            <li>タグテキスト</li>
            <li>タグテキスト</li>
            <li>タグテキスト</li>
          </ul>
          <p class="post_date flort_r">2018.00.00</p>
        </div>
      </div>
      <img src="<?php print get_template_directory_uri(); ?>/img/post_img1.png" alt="">
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