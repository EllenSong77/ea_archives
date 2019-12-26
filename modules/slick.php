<div class="slick">
  <?php
  if (git_get_option('git_slick1img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick1url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick1img_b'); ?>" alt="<?php
      echo git_get_option('git_slick1title_b'); ?>"><span><?php
        echo git_get_option('git_slick1title_b'); ?></span></a></div><?php
  } ?>
  <?php
  if (git_get_option('git_slick2img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick2url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick2img_b'); ?>" alt="<?php
      echo git_get_option('git_slick2title_b'); ?>"><span><?php
        echo git_get_option('git_slick2title_b'); ?></span></a></div><?php
  } ?>
  <?php
  if (git_get_option('git_slick3img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick3url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick3img_b'); ?>" alt="<?php
      echo git_get_option('git_slick3title_b'); ?>"><span><?php
        echo git_get_option('git_slick3title_b'); ?></span></a></div><?php
  } ?>
  <?php
  if (git_get_option('git_slick4img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick4url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick4img_b'); ?>" alt="<?php
      echo git_get_option('git_slick4title_b'); ?>"><span><?php
        echo git_get_option('git_slick4title_b'); ?></span></a></div><?php
  } ?>
  <?php
  if (git_get_option('git_slick5img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick5url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick5img_b'); ?>" alt="<?php
      echo git_get_option('git_slick5title_b'); ?>"><span><?php
        echo git_get_option('git_slick5title_b'); ?></span></a></div><?php
  } ?>
  <?php
  if (git_get_option('git_slick6img_b')) { ?>
    <div><a href="<?php
    echo git_get_option('git_slick6url_b'); ?>"><img width="855px" height="300px" src="<?php
      echo git_get_option('git_slick6img_b'); ?>" alt="<?php
      echo git_get_option('git_slick6title_b'); ?>"><span><?php
        echo git_get_option('git_slick6title_b'); ?></span></a></div><?php
  } ?>
</div>
<div id="mobile-search">
  <?php
  if (git_get_option('git_search_baidu')) { ?>
    <?php
    echo git_get_option('git_search_code'); ?>
    <?php
  } elseif (git_get_option('git_search') && !git_get_option('git_search_baidu')) { ?>
    <form method="get" class="searchform themeform"
          onsubmit="location.href='/?s=' + encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;"
          action="/">
      <div><input type="ext" class="search" name="s" onblur="if(this.value=='')this.value='<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>';" onfocus="if(this.value=='<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>')this.value='';" value="<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>"></div>
    </form>
    <?php
  } elseif (!git_get_option('git_search') && !git_get_option('git_search_baidu')) { ?>
    <form method="get" class="searchform themeform" onsubmit="location.href='<?php
    echo home_url('/search/'); ?>' + encodeURIComponent(this.s.value).replace(/%20/g, '+'); return false;" action="/">
      <div><input type="ext" class="search" name="s" onblur="if(this.value=='')this.value='<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>';" onfocus="if(this.value=='<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>')this.value='';" value="<?php
        echo git_get_option('git_search_placeholder', '输入内容并回车'); ?>"></div>
    </form>
    <?php
  } ?>
</div>
