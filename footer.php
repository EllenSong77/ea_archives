</section>
<?php
if (git_get_option('git_superfoot_b') && !G_is_mobile()) { ?>
  <div id="footbar" style="border-top: 2px solid #8E44AD;">
    <ul>
      <li><p class="first"><?php
          echo git_get_option('git_foottitle1'); ?></p><span max-width="220px"><?php
          echo git_get_option('git_footconent1'); ?></span></li>
      <li><p class="second"><?php
          echo git_get_option('git_foottitle2'); ?></p><span max-width="220px"><?php
          echo git_get_option('git_footconent2'); ?></span></li>
      <li><p class="third"><?php
          echo git_get_option('git_foottitle3'); ?></p><span max-width="220px"><?php
          echo git_get_option('git_footconent3'); ?></span></li>
      <li><p class="fourth"><?php
          echo git_get_option('git_foottitle4'); ?></p><span max-width="220px"><?php
          echo git_get_option('git_footconent4'); ?></span></li>
    </ul>
  </div>
  <?php
} ?>
<footer style="border-top: 1px solid ;background-image: url('<?php
echo esc_url(get_template_directory_uri()); ?>/css/img/footbg.jpg'); background-repeat: repeat;" class="footer">
  <div class="footer-inner">
    <div class="footer-copyright" align="center"><?php
      if (git_get_option('git_footcode')) echo git_get_option('git_footcode'); ?>
      <a>|</a> <?php if (git_get_option('git_fancylogin')) { ?>
        <?php if (is_user_logged_in()) {
          echo '<i class="fa fa-user"></i> <a href="' . home_url() . '/wp-admin">' . $u_name . '</a>';
        } else {
          echo '<i class="fa fa-power-off"></i><a id="showdiv" href="wp-login.php" data-original-title="点击登录">点击登录</a>';
        }
        ?>
      <?php } else { ?>
        <?php
        if (is_user_logged_in()) {
          echo '<i class="fa fa-user"></i> <a href="' . home_url() . '/wp-admin">' . $u_name . '</a> ';
        } elseif (get_option('users_can_register')) {
          echo '<i class="fa fa-user"></i> <a href="' . home_url() . '/wp-login.php?action=register">注册</a>';
        };
        echo '  <i class="fa fa-power-off"></i> ';
        echo wp_loginout();
        echo '';
      } ?> <span class="yunluocopyright">Theme by <a id="yunluo" href="http://googlo.me" title="乐趣公园" target="_blank"
                                                     style="cursor:help;">云落</a></span>
      <!-- 若要删除版权请加乐趣公园(googlo.me)为全站友链，或者赞助乐趣公园(支付宝：sp91@qq.com 20元)，谢谢支持 -->
      <span class="trackcode pull-right"><?php
        if (git_get_option('git_track')) echo git_get_option('git_track'); ?></span></div>
  </div>
  <script type="text/javascript">
    //夜间模式
    (function () {
      if (document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") === '') {
        // if(new Date().getHours() > 22 || new Date().getHours() < 6){
        //   document.body.classList.add('night');
        //   document.cookie = "night=1;path=/";
        //   console.log('夜间模式开启');
        // }else{
        //   document.body.classList.remove('night');
        //   document.cookie = "night=0;path=/";
        //   console.log('夜间模式关闭');
        // }
      } else {
        var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
        if (night == '0') {
          document.body.classList.remove('night');
        } else if (night == '1') {
          document.body.classList.add('night');
        }
      }
    })();

    //夜间模式切换
    function switchNightMode() {
      var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
      if (night == '0') {
        document.body.classList.add('night');
        document.cookie = "night=1;path=/";
        document.querySelector("#night-switch a").innerText = "夜晚模式";
      } else {
        document.body.classList.remove('night');
        document.cookie = "night=0;path=/";
        document.querySelector("#night-switch a").innerText = "白日模式";
      }
    }
  </script>
  <button id="night-switch" class="btn"><a href="javascript:switchNightMode()" target="_self">
      <?php if ($_COOKIE['night'] == '1') {
        echo "夜晚模式";
      } else {
        echo "白日模式";
      }
      ?></a></button>
</footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular()) echo '<script type="text/javascript">document.body.oncopy=function(){alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}</script>'; ?>
<?php
if (git_get_option('git_topnav_b') && !G_is_mobile()) { ?>
  <script type="text/Javascript">
    $(function () {
      $('#nav-header').posfixed({
        distance: 0,
        pos: 'top',
        type: 'while',
        hide: false
      });
    });
  </script>
  <?php
} ?>
<?php
if (git_get_option('git_snow_b')) { ?>
  <script type="text/javascript">(function (a) {
      a.fn.snow = function (d) {
        var g = a('<div id="snowbox" />').css({position: "absolute", "z-index": "9999", top: "-50px"}).html("&#10052;"),
          f = a(document).height(), b = a(document).width(),
          e = {minSize: 10, maxSize: 20, newOn: 1000, flakeColor: "#FFF"}, d = a.extend({}, e, d);
        var c = setInterval(function () {
          var l = Math.random() * b - 100, j = 0.5 + Math.random(), h = d.minSize + Math.random() * d.maxSize,
            i = f - 200, k = l - 500 + Math.random() * 500, m = f * 10 + Math.random() * 5000;
          g.clone().appendTo("body").css({left: l, opacity: j, "font-size": h, color: d.flakeColor}).animate({
            top: i,
            left: k,
            opacity: 0.2
          }, m, "linear", function () {
            a(this).remove()
          })
        }, d.newOn)
      }
    })(jQuery);
    $(function () {
      $.fn.snow({minSize: 5, maxSize: 50, newOn: 300})
    });
  </script><?php
} ?>
<?php
if (git_get_option('git_copy_b') && is_singular()) echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};document.onselectstart=function(e){return false;};</script><style>body{ -moz-user-select:none;}</style><SCRIPT LANGUAGE=javascript>if (top.location != self.location)top.location=self.location;</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>
<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php
wp_footer();
global $dHasShare;
if ($dHasShare == true) {
  echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="' . get_template_directory_uri() . '/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}
?>

<div style="display:none;">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) :

      the_post(); //输出当前文章的内容
      //循环开始后，可以在循环中用the_title();输出文章的标题
      //the_content();输出文章的内容
      //the_author();输出文章的作者
      the_title();
      the_author();
      ?>
      <br>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

</body>
</html>