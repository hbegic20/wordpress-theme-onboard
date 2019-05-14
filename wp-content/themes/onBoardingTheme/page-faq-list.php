

<?php
/*
  /**
* Template Name: FAQs List
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0

  Main for creating templates is  "Template Name: xxxx"
*/
 ?>
 <div class="wrapper">
 <div class="stage">
<?php get_header();
	$guardsman_stored_meta = get_post_meta( $post->ID );
?>

  <div class="mask-bg"></div>
    <div class="mask-bottom"></div>
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="headline push pull">
          <h1 class="h1 h1--underline">
          <?php echo esc_attr( $guardsman_stored_meta['titleStage'][0] )?>
  </h1>
        </div>
      </div>
    </div>
  </div>
  
</div>
<?php 
   global $post;
   $post_with_workflow_items = get_post( $post->ID );
    if($post_with_workflow_items !== NULL ){
      $postMetaDatas = get_post_meta(   $post_with_workflow_items->ID);
      $title = $postMetaDatas['title'];
      $title2 = $postMetaDatas['title2'];
      $title3 = $postMetaDatas['title3'];
      $title4 = $postMetaDatas['title4'];

      $content = $postMetaDatas['contentTextArea'];
      $content2 = $postMetaDatas['contentTextArea2'];
      $content3 = $postMetaDatas['contentTextArea3'];
      $content4 = $postMetaDatas['contentTextArea4'];
?>
 <div class="row workflow-heading">
    <div class="col-md-offset-3 col-md-6 col-xs-12 col-xs-offset-0">
      <div class="content">
        <h2 class="h2 h2--with-underline">
        <?php echo $post_with_workflow_items->post_title ?>
</h2>
          <table class="spacer">
  <tr>
    <td height="41"></td>
  </tr>
</table>
          <p class="text"><?php echo $post_with_workflow_items->post_content ?></p>
      </div>
    </div>
  </div>

<div class="row workflow">
  <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="workflow-item item-1">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <h5 class="workflow-item-title">
  <?php print_r($title[0]) ?>
</h5>
    <p class="workflow-text"><?php print_r($content[0]) ?></p>
</div>


        <div class="workflow-item item-2">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <h5 class="workflow-item-title">
  <?php print_r($title2[0]) ?>
</h5>
  <p class="workflow-text"><?php print_r($content2[0]) ?></p>
</div>


      </div>

      <div class="col-md-6 col-xs-12">
          <div class="workflow-item item-3">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <h5 class="workflow-item-title">
  <?php print_r($title3[0]) ?>
</h5>
  <p class="workflow-text"><?php print_r($content3[0]) ?></p>
</div>


          <div class="workflow-item item-4">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <h5 class="workflow-item-title">
  <?php print_r($title4[0]) ?>
</h5>
  <p class="workflow-text"><?php print_r($content4[0]) ?></p>
</div>


      </div>
    </div>
  </div>
</div>
<div class="row workflow-button justify-content-center">
  <a class="button" href="#">GET EARLY ACCESS</a>
</div>

<?php
  }
?>



<?php

$args = array('post_type' => 'faqs',
              'post_per_page' => 3);

$faqList = new WP_Query($args);
$counter = 0;
if($faqList->have_posts()){
  ?>
  <div class="row narrow">
    <ul class="accordion pull push">
  <?php
  while($faqList->have_posts()): $faqList->the_post();$counter++;?>
  <li>
      <div class="accordion-item">
        <input type="checkbox" id="accordion-item-id-<?php echo $counter;?>">
        <label for="accordion-item-id-<?php echo $counter;?>" class="text-center-mobile">
          <h4 class="h4 h4--with-underline"><?php the_title();?></h4>
        </label>
        <div class="text"><?php the_content()?></div>
      </div>
  </li>
<?php
  endwhile;
  ?>
    </ul>
  </div>
 
  <?php get_footer()?>
</div>
<?php
  };
?>