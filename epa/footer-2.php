<footer id="footer">

<?php if( has_nav_menu( 'footer_nav' ) ){ ?>
  <div class="footer-01">
    <div class="wrap">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer_nav',
            'menu_class'      => '',
            'menu_id'         => 'fnav',
            'container'       => 'nav',
            'items_wrap'      => '<ul id="footer-nav" class="%2$s">%3$s</ul>'
          )
        );?>
    </div><!-- /wrap -->
  </div><!-- /footer-01 -->
<?php } //if footer_nav ?>
  <div class="footer-02">
    <div class="fixed_banner pc">
      <a href="https://epa-ranking.com/#table" onclick="gtag('event', 'footer', {'event_category': 'pc','event_label': 'fixed_button'});">
        <img src="/wp-content/themes/xeory_base/img/button_top.png">
      </a>
    </div>
    <div class="fixed_banner sp">
      <a href="#table" onclick="gtag('event', 'footer', {'event_category': 'sp','event_label': 'fixed_button'});">
        <img src="/wp-content/themes/xeory_base/img/button_top_sp.png">
      </a>
    </div>

    <div class="wrap">
      <div class="footer_nav">
        <nav>
          <ul>
            <li>
                <a href="/survey/">調査詳細</a>
            </li>
            <li>
                <a href="/about/">運営者情報</a>
            </li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy">
        © Copyright <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. All rights reserved.
      </p>
    </div><!-- /wrap -->
  </div><!-- /footer-02 -->
  <?php
  // }
  ?>
</footer>
<a href="#" class="pagetop"><span><i class="fa fa-angle-up"></i></span></a>
<?php wp_footer(); ?>


<script>
(function($){

$(function(){
  <?php if( !wp_is_mobile() ){?>
  $(".sub-menu").css('display', 'none');
  $("#gnav-ul li").hover(function(){
    $(this).children('ul').fadeIn('fast');
  }, function(){
    $(this).children('ul').fadeOut('fast');
  });
  <?php }?>
  // スマホトグルメニュー

  <?php if( is_front_page() ){ ?>
    $('#gnav').addClass('active');
  <?php }else{ ?>
    $('#gnav').removeClass('active');

  <?php } ?>


  $('#header-menu-tog a').click(function(){
    $('#gnav').toggleClass('active');
  });
});


})(jQuery);

</script>

<script>
jQuery(function($){
  var scrollPosition;
setTimeout(function(){
  scrollPosition = $(window).scrollTop();
      $('body').addClass('fixed').css({
        'top': -1 * scrollPosition
      });
      $('.js-modal').fadeIn();
      return false;
},90000);

$('.js-modal-close').click(function(){
    $('body').removeClass('fixed').css({'top':0});
    window.scrollTo( 0 , scrollPosition );
    $('.js-modal').fadeOut();
    return false;
});

});

</script>

<script>
jQuery(function($){
  var wh = $(window).height();
  var suntoryOffset = $('#suntory').offset().top;

  $(window).on('scroll',function(){
  var scrollPosition = $(window).scrollTop();
  if(scrollPosition > suntoryOffset + 3 * wh + 50){
    $('body').addClass('fixed').css({
        'top': -1 * scrollPosition
      });
    $('.js-modal-2').fadeIn();
    return false;
  };
});

$('.js-modal-close').click(function(){
    $('body').removeClass('fixed').css({'top':0});
    window.scrollTo( 0 , suntoryOffset + 3 * wh + 50);
    $('.js-modal-2').fadeOut();
    $(window).off();
    return false;
});

if('#column' == location.hash){
  $(window).off();
}
});

</script>

<script>
window.addEventListener('DOMContentLoaded', function(){
new ScrollHint('.js-scrollable', {
remainingTime: 2700,
i18n: {
scrollable: 'スクロールします'
}
});
});
</script>

</body>
</html>
