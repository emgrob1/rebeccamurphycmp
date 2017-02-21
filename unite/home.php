<?php

/**
 * Template Name: Home 
 */
get_header();
 ?>
		<main id="main" class="site-main" role="main">
 <?php masterslider(1); ?>
 <div class="entry-content">
  <div style="height:35px;"></div>
  <p style="font-size: 55px;font-family: 'Herr Von Muellerhoff', cursive;font-weight: bold">My Expertise</p>
 </div>
	<div id="primary" class="content-area col-md-6">
 	<div class="row">
  <div class="site-branding col-md-6">    		  
 <a href="rebeccamurphycmp/weddings/">
 <?php
 echo do_shortcode(' [bspanel title="Weddings" type=info]
<img class="alignnone wp-image-40 size-medium" src="http://evangrob.com/wp-content/uploads/2016/09/Event-planning-and-event-management-as-a-career-300x196.jpg" alt="Event-planning-and-event-management-as-a-career" width="300" height="202" style="margin:auto;width:100%;" />
 [/bspanel]');
 ?>
 </div>
   <div class="site-branding col-md-6"> 
 <a href="rebeccamurphycmp/holiday-celebrations/">
 <?php
 echo do_shortcode(' [bspanel title="Holiday Celebrations" type=info]
<img class="alignnone wp-image-42 size-medium" src="http://evangrob.com/wp-content/uploads/2016/08/Event-Planning-Business-300x200.jpg" alt="Event-Planning-Business" width="300" height="200" style="margin:auto;width:100%;" /> 
  [/bspanel]');
  ?>
 </a>
 </div>
 </div>
 <div class="row">
    <div class="site-branding col-md-6"> 
 <a href="rebeccamurphycmp/corporate-events/"> 
 <?php 
 echo do_shortcode(' [bspanel title="Corporate Events" type=primary]
<img class="alignnone wp-image-45 size-medium" src="http://evangrob.com/wp-content/uploads/2016/08/1_MeetingsandEvents-300x199.jpg" alt="1_MeetingsandEvents" width="300" height="200" style="margin:auto;width:100%;"/>
 [/bspanel]');
 ?>
  </a>
  </div>
      <div class="site-branding col-md-6"> 
 <a href="rebeccamurphycmp/celebrations/">
 	<?php
 echo do_shortcode(' [bspanel title="Celebrations" type=primary]
<img class="alignnone wp-image-47 size-medium" src="http://evangrob.com/wp-content/uploads/2016/08/celebration3-300x198.jpg" alt="celebration3" width="300" height="200" style="margin:auto;width:100%;"/>
 [/bspanel]');
 ?>
  </a>
    
      </div>
      </div>
       </div>
        <div class="table-2">
      <div class="col-md-4">
  <?php
    while ( have_posts() ) : the_post(); ?> 
        <div class="entry-content-page">
            <?php the_content(); ?> 
        </div>
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
 	
 </div>

</div>
  

 	</main><!-- #main -->


<?php
get_footer();

?>