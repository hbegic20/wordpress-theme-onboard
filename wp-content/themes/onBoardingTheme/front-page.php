
<?php get_header(); ?>
    <div class="are-you">
  <div class="headline">
    <h2 class="h2 h2--with-underline">
  Are you?
</h2>
  </div>
  <ul class="buttons-tags">
            <li class="tag-list-item ">DEVELOPER</li>
            <li class="tag-list-item tag-list-item--primary">CHIEF TECH OFFICER</li>
            <li class="tag-list-item ">THIRD OPTION</li>
  </ul>
  <div class="row">
    <div class="content-wrap">
      <div class="flex-container">
        <div class="col-md-6 col-xs-12 col-xs-12--col-extra">
        </div>
        <div class="col-md-6 col-xs-12 text-center-mobile">
          <div class="list-icon-text">
          <div class="list-icon-with-text">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <p class="list-text">Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
</div>
          <div class="list-icon-with-text">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <p class="list-text">Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
</div>
          <div class="list-icon-with-text">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <p class="list-text">Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
</div>
          <div class="list-icon-with-text">
  <img class="list-item-icon" src="<?php echo get_template_directory_uri(); ?>/img/workflow-icon.png" alt="">
  <p class="list-text">Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
</div>
  </div>
          <a class="button" href="#">GET EARLY ACCESS</a>

        </div>
      </div>
    </div>
  </div>
</div>
    <table class="spacer">
  <tr>
    <td height="130"></td>
  </tr>
</table>
    
<?php 
    $post_with_workflow_items = get_post( 88 );
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


    <table class="spacer">
  <tr>
    <td height="100"></td>
  </tr>
</table>
    <div class="under-hood">
  <div class="row">
  <div class="mask-top"></div>
  <div class="mask-bg"></div>
    <div class="col-md-offset-3 col-md-6 col-xs-12 col-xs-offset-0">
        <div class="content">
          <h2 class="h2 h2--with-underline">
  Under the hood
</h2>
            <p class="text"></p>
        </div>
    </div>
  </div>
</div>

<div class="list-stories">
  <div class="row rounded-wrap">
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
            <div class="col-md-3">
          <div class="story">
  <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/360x10_12.png"
          media="(max-width: 360px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/768x10_12.png"
          media="(min-width: 361px) and (max-width: 767px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1024x10_12.png"
          media="(min-width: 768px) and (max-width: 1023px)">
  <source srcset="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png"
          media="(min-width: 1024px) and (max-width: 1439px)">
  <source srcset=""
          media="(min-width: 1440px)">
  <img src="<?php echo get_template_directory_uri(); ?>/img/1440x10_12.png" alt="" title="">
</picture>  <h4 class="h4 h4--with-underline">
  stuff
</h4>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ero labore et dolore.</p>
</div>
        </div>
      </div>
</div>
    <table class="spacer">
  <tr>
    <td height="80"></td>
  </tr>
</table>
    <div class="cta">
  <div class="mask-grey"></div>
  <div class="mask-top"></div>
  <div class="mask-bottom"></div>
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-offset-2 col-md-8 col-xs-12 col-xs-offset-0">
      <div class="content">
        <h2 class="h2 h2--with-underline">
  Everything you need to know
</h2>
          <p class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia, Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <div class="buttons-combo">
  <a class="button" href="#">FAQ</a>

  <a class="button button--transparent" href="#">CONTACT US</a>
</div>
      </div>
    </div>
  </div>
</div>
    <table class="spacer">
  <tr>
    <td height="150"></td>
  </tr>
</table>
    <div class="row users-about-us-heading a">
  <div class="col-md-offset-3 col-md-6 col-xs-12 col-xs-offset-0">
    <div class="content">
      <h2 class="h2 h2--with-underline">
  Workflow
</h2>
        <p class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia, Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
  </div>
</div>

<div class="row users-about-us">
      <div  class="users-about-us-item col-lg-3 col-md-6 col-xs-12">
  <h5 class="workflow-item-title">
  name surname
</h5>
  <li class="tag-list-item ">co-founder & cto</li>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
  <img  class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/item-logo.png" alt=""">
</div>


      <div  class="users-about-us-item col-lg-3 col-md-6 col-xs-12">
  <h5 class="workflow-item-title">
  name surname
</h5>
  <li class="tag-list-item ">co-founder & cto</li>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
  <img  class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/item-logo.png" alt=""">
</div>


      <div  class="users-about-us-item col-lg-3 col-md-6 col-xs-12">
  <h5 class="workflow-item-title">
  name surname
</h5>
  <li class="tag-list-item ">co-founder & cto</li>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
  <img  class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/item-logo.png" alt=""">
</div>


      <div  class="users-about-us-item col-lg-3 col-md-6 col-xs-12">
  <h5 class="workflow-item-title">
  name surname
</h5>
  <li class="tag-list-item ">co-founder & cto</li>
  <p class="list-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
  <img  class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/item-logo.png" alt=""">
</div>


  </div>


    <table class="spacer">
  <tr>
    <td height="150"></td>
  </tr>
</table>
</div>
  <?php get_footer(); ?>

</body>
</html>

