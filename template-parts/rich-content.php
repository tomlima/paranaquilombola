<?php $img_url = get_option('img_url');
$linkbanner_url = get_option('linkbanner_url'); ?>

<?php if ($linkbanner_url !== "") : ?>
  <div class="richcontent__container">
    <div class="icon__container">
      <i class="far fa-star"></i>
    </div>
    <div onclick=" window.open('<?php echo $linkbanner_url;  ?>', '_blank' );" class="banner__container" style="background-image:url(<?php echo $img_url; ?>)"></div>
  </div>
<?php endif; ?>


<style>
  .icon__container {
    width: 60px;
    height: 60px;
    background-color: #CC151D;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    position: fixed;
    top: 0;
    right: 0;
    z-index: 9999;
    margin: 53vh 21vw;
  }

  .richcontent__container .icon__container i {
    color: #fff;
    font-size: 1.6rem;
  }

  .richcontent__container .banner__container {
    width: 273px;
    height: 320px;
    background: #747474 0% 0% no-repeat padding-box;
    border-radius: 8px;
    opacity: 1;
    position: fixed;
    top: 0;
    right: 0;
    z-index: 1;
    margin: 35vh 16vw;
    background-size: cover;
    cursor: pointer;
    opacity: 0;
    transition: opacity 1s;
  }

  @media only screen and (max-width: 600px) {
    .richcontent__container {
      display: none;
    }
  }
</style>

<script>
  jQuery(document).ready(function($) {
    $(document).on("click", ".icon__container", function() {
      $(this).css("display", "none");

      let el = $(".banner__container");
      el.css("opacity", "1");
    });
  });
</script>