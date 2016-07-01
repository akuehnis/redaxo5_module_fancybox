<?php
/* Diese Zeilen ins Template 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo rex_url::assets('/fancybox/source/jquery.fancybox.pack.js?v=2.1.5');?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo rex_url::assets('/fancybox/source/jquery.fancybox.css?v=2.1.5');?>" />
*/
?>
<?php
$preview_type = 'Bildergalerie';
if ( '' == 'REX_MEDIALIST[id=1]' ) {
    $image_list = array();
} else {
  $image_list = explode(',', 'REX_MEDIALIST[id=1]');
}
foreach ($image_list as $image) : ?>
<a  class="fancybox" rel="galleryREX_SLICE_ID" href="<?php echo rex_url::media($image);?>"
    data-rel="fancybox">
    <img src="index.php?rex_media_type=<?php echo $preview_type;?>&rex_media_file=<?php echo $image;?>"
      alt="Physiotherapie in Winterthur - Praxis" />
</a> 
<?php  endforeach; ?>
<script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: 'none',
        closeEffect: 'none'
    });
});
</script>
