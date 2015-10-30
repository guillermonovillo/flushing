<?php
  global $seccion;
  global $home;
  global $live;
  global $work;
  global $neighborhood;
  global $team;
  global $press;
  global $contact;
  global $availability;

  $home=get_permalink(pll_get_post(4,IDIOMA));
  $live=get_permalink(pll_get_post(9,IDIOMA));
  $work=get_permalink(pll_get_post(11,IDIOMA));
  $neighborhood=get_permalink(pll_get_post(13,IDIOMA));
  $team=get_permalink(pll_get_post(15,IDIOMA));
  $press=get_permalink(pll_get_post(17,IDIOMA));
  $contact=get_permalink(pll_get_post(19,IDIOMA));
  $availability=get_permalink(pll_get_post(21,IDIOMA));
  $classe="class='current-menu-item'";
  $enghome=pll_home_url("en");
  $zhhome=pll_home_url("zh");
?>

<nav class="row tab-bar">
  <div class="large-4 column">
      <a class="icon-bar" href="<?php echo $home; ?>"></a>
  </div>
  <div class="menu-sup large-8 column hide-for-medium hide-for-small">
      <ul class="lang">
        <li><a href="<?php echo $enghome; ?>">EN</a>/</li>
        <li><a href="<?php echo $zhhome; ?>">中文</a></li>
        <li class="social"><a href="#" class="icon facebook"></a></li>
        <li><a href="#" class="icon vimeo"></a></li>
      </ul>
  </div>
  <aside class="large-8 column menu-desktop hide-for-small hide-for-medium">
      <div class="menu-sup small-12 medium-12 column hide-for-large-up">
	<div class="small-6 medium-6 column hide-for-large-up">
		<a class="right-off-canvas-toggle close-menu-mobile"><span></span>&#215;</a>
	</div>
	<div class="small-6 medium-6 column hide-for-large-up">
		<ul class="lang">
			<li><a href="<?php echo $enghome; ?>">EN /</a></li>
			<li><a href="<?php echo $zhhome; ?>"> 中文</a></li>
		</ul>
	</div>
</div>
<ul class="off-canvas-list">
  <li><a  <?php if($seccion=="live"){echo $classe;} ?>href="<?php echo $live; ?>"><?php _e("LIVE","flushing");?></a></li>
  <li><a  <?php if($seccion=="work"){echo $classe;} ?>href="<?php echo $work; ?>"><?php _e("WORK","flushing");?></a></li>
  <li><a  <?php if($seccion=="neighborhood"){echo $classe;} ?>href="<?php echo $neighborhood; ?>"><?php _e("NEIGHBOURHOOD","flushing");?></a></li>
  <li><a  <?php if($seccion=="team"){echo $classe;} ?>href="<?php echo $team; ?>"><?php _e("TEAM","flushing");?></a></li>
  <li><a  <?php if($seccion=="press"){echo $classe;} ?>href="<?php echo $press; ?>"><?php _e("PRESS","flushing");?></a></li>
  <li><a  <?php if($seccion=="contact"){echo $classe;} ?>href="<?php echo $contact; ?>"><?php _e("CONTACT","flushing");?></a></li>
	<a  class="button" href="<?php echo $availability; ?>"><?php _e("AVAILABILITY","flushing");?></a>
</ul>
<div>
<div class="small-12 medium-12 column hide-for-large-up">
	<ul class="social">
		<li><a href="#" class="icon facebook"></a></li>
		<li><a href="#" class="icon vimeo"></a></li>
	</ul>
</div>

                    </aside>
                    <section class="right-small">
                        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
                    </section>
                </nav>
            </div>

            <aside class="menu-mobile right-off-canvas-menu">
              <div class="menu-sup small-12 medium-12 column hide-for-large-up">
	<div class="small-6 medium-6 column hide-for-large-up">
		<a class="right-off-canvas-toggle close-menu-mobile"><span></span>&#215;</a>
	</div>
	<div class="small-6 medium-6 column hide-for-large-up">
		<ul class="lang">
			<li><a href="<?php echo $enghome; ?>">EN /</a></li>
			<li><a href="<?php echo $zhhome; ?>"> 中文</a></li>
		</ul>
	</div>
</div>
<ul class="off-canvas-list">
  <li><a  <?php if($seccion=="live"){echo $classe;} ?>href="<?php echo $live; ?>"><?php _e("LIVE","flushing");?></a></li>
  <li><a  <?php if($seccion=="work"){echo $classe;} ?>href="<?php echo $work; ?>"><?php _e("WORK","flushing");?></a></li>
  <li><a  <?php if($seccion=="neighborhood"){echo $classe;} ?>href="<?php echo $neighborhood; ?>"><?php _e("NEIGHBOURHOOD","flushing");?></a></li>
  <li><a  <?php if($seccion=="team"){echo $classe;} ?>href="<?php echo $team; ?>"><?php _e("TEAM","flushing");?></a></li>
  <li><a  <?php if($seccion=="press"){echo $classe;} ?>href="<?php echo $press; ?>"><?php _e("PRESS","flushing");?></a></li>
  <li><a  <?php if($seccion=="contact"){echo $classe;} ?>href="<?php echo $contact; ?>"><?php _e("CONTACT","flushing");?></a></li>
	<a  class="button" href="<?php echo $availability; ?>"><?php _e("AVAILABILITY","flushing");?></a>
</ul>
<div>
<div class="small-12 medium-12 column hide-for-large-up">
	<ul class="social">
		<li><a href="#" class="icon facebook"></a></li>
		<li><a href="#" class="icon vimeo"></a></li>
	</ul>
</div>

</aside>