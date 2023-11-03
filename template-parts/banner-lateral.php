<div id="float-banner" class="float-banner float-right">
    <?php echo do_shortcode('[masterslider id="2"]'); ?>
</div>

<script>
    jQuery(function() {
            var top = $('#float-banner').offset().top - parseFloat($('#float-banner').css('marginTop').replace(/auto/, 0));
            var footTop = $('#final-post').offset().top - parseFloat($('#final-post').css('marginTop').replace(/auto/, 0));

            var maxY = footTop - $('#float-banner').outerHeight();

            jQuery(window).scroll(function(evt) {
                var y = jQuery(this).scrollTop();
                if (y >= top - $('#site-header').height()) {
                    if (y < maxY) {
                        jQuery('#float-banner').addClass('fixed').removeAttr('style');
                    } else {
                        jQuery('#float-banner').removeClass('fixed').css({
                            position: 'absolute',
                            top: (maxY - top) + 'px'
                        });
                    }
                } else {
                    jQuery('#float-banner').removeClass('fixed');
                }
            });
        });
</script>
<style>


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>