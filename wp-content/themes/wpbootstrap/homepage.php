<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<div class="container">
<div class="row">
  <div class="col-md-9">
    <div id="carousel-example-generic" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img class="img-rounded" src="wp-content/themes/wpbootstrap/img/slider-01.jpg">
      <div class="carousel-caption">
        <h3>Gender sensitivity and the workplace training</h3>
      </div>
    </div>

    <div class="item">
      <img class="img-rounded" src="wp-content/themes/wpbootstrap/img/slider-02.jpg" >
      <div class="carousel-caption">
        <h3>Gender and development law</h3>
      </div>
    </div>

    <div class="item">
      <img class="img-rounded" src="wp-content/themes/wpbootstrap/img/slider-03.jpg">
      <div class="carousel-caption">
        <h3>Gender and leadership</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
  </div>
  <div class="col-sm-3 well">
    <h3>Schedule your training with us.</h3>
    <p>Improve the consistency and equality in the workplace with Gender and Development Training.</p>
    <button type="button" class="btn btn-default btn-block">Get in Touch</button>
    <br>
    <h3>Get the latest training schedule.</h3>
    <p>Sign up for our Newsletter.</p>
    <div class="input-group input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Email">
    <span class="input-group-btn">
       <button class="btn btn-default" type="button">Go!</button>
    </span>
    </div>
  </div>
</div>
<hr class="soften">
<div class="row">
&nbsp;
</div>


<div class="row">
  <div class="col-md-3 col-xs-offset-1 well trio1stChild">
   <center><span style="font-size: 16px;">Training for <strong>Better Performance</strong></span></center>
   <p align="justify">Help people realize their potential by valuing their differences and their contribution to the organization.
</p>
  </div>
  <div class="col-md-3 col-sm-offset-1 well">
   <center><span style="font-size: 16px;">Training for <strong>Better Talent</strong></span></center>
   <p align="justify">Attract the best available talents. When your people are happy at work they can’t help but spread the word.</p>
  </div>
  <div class="col-md-3 col-sm-offset-1 well">
    <center><span style="font-size: 16px;">Training for <strong>Better Relationships</strong></span></center>
    <p align="justify">The more enthusiastic your workforce the better your relationships with customers and stakeholders.</p>
  </div>
</div>

<div class="row">
&nbsp;
</div>

<div class="row well">
  <center><em><h4>We have conducted Gender and Development training for the following orgs..</h4></em></center>
  <div class="col-sm-1 client1stChild">
    <img src="wp-content/uploads/2013/10/logo-100x100-natlgrid.jpg">
  </div>

  <div class="col-sm-1 col-sm-offset-1">
    <img src="wp-content/uploads/2013/10/logo-100x100-dti.jpg">
  </div>

  <div class="col-sm-1 col-sm-offset-1">
    <img src="wp-content/uploads/2013/10/logo-100x100-dswd.jpg">
  </div>

  <div class="col-sm-1 col-sm-offset-1">
    <img src="wp-content/uploads/2013/10/logo-100x100-oxfam.jpg">
  </div>

  <div class="col-sm-1 col-sm-offset-1">
    <img src="wp-content/uploads/2013/10/logo-100x100-wfp.jpg">
  </div>

  <div class="col-sm-1 col-sm-offset-1">
    <img src="wp-content/uploads/2013/10/logo-100x100-eu.jpg">
  </div>
</div>

<div class="row">
&nbsp;
</div>

<div class="row">
  <div class="col-md-6 well trio1stChild">
    <?php
    query_posts('cat=12');
    while (have_posts()) : the_post();
    echo "<strong>";
    echo "<a href='"; the_permalink(); echo"'>"; the_title(); echo "</a>";
    echo "</strong><br>";
    the_excerpt();
    endwhile;
    ?>
  </div>

  <div class="col-md-4 well" id="news">
    <?php
    query_posts('cat=6'.'&showposts=3');
    while (have_posts()) : the_post();
    echo "<strong>";
    echo "<a href='"; the_permalink(); echo"'>"; the_title(); echo "</a>";
    echo "</strong><br>";
    the_excerpt();
    endwhile;
    ?>
  </div>
</div>


<?php get_footer(); ?>