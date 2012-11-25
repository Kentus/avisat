<?php
i18n_gallery_register('fancybox', 'fancybox', 
  '<strong>FancyBox</strong> is a tool for displaying images and can display a title along with the image. It does not have a slideshow feature.<br/>'.
  'License: MIT and GPL<br/>'.
  '<a target="_blank" href="http://fancybox.net/">http://fancybox.net/</a>',
  'i18n_gallery_fancybox_edit', 'i18n_gallery_fancybox_header', 'i18n_gallery_fancybox_content');

function i18n_gallery_fancybox_edit($gallery) {
?>
  <p>
    <label for="fancybox-thumbwidth"><?php i18n('i18n_gallery/MAX_THUMB_DIMENSIONS'); ?></label>
    <input type="text" class="text" id="fancybox-thumbwidth" name="fancybox-thumbwidth" value="<?php echo @$gallery['thumbwidth']; ?>" style="width:5em"/>
    <input type="text" class="text" id="fancybox-thumbheight" name="fancybox-thumbheight" value="<?php echo @$gallery['thumbheight']; ?>" style="width:5em"/>
  </p>
  <script type="text/javascript">
    function changeFancyboxThumbSize() {
      var show = $.trim($('#fancybox-thumbwidth').val()) != '' && $.trim($('#fancybox-thumbheight').val()) != '';
      if (show) $('#fancybox-thumbcrop-span').show(); else $('#fancybox-thumbcrop-span').hide().find('input').attr('checked',false);
    }
    function changeFancyboxSize() {
        var show = $.trim($('#fancybox-width').val()) != '' && $.trim($('#fancybox-height').val()) != '';
        if (show) $('#fancybox-crop-span').show(); else $('#fancybox-crop-span').hide().find('input').attr('checked',false);
    }
    function changeFancyboxPagify() {
        var show = $('#fancybox-pagify:checked').size() > 0;
        if (show) $('#fancybox-pagify-span').show(); else $('#fancybox-pagify-span').hide().find('input').val('');
    }
    $(function() {
      $('#fancybox-thumbwidth, #fancybox-thumbheight').change(changeFancyboxThumbSize);
      $('#fancybox-width, #fancybox-height').change(changeFancyboxSize);
      $('#fancybox-pagify').click(changeFancyboxPagify);
      changeFancyboxThumbSize();
      changeFancyboxSize();
      changeFancyboxPagify();
    });
  </script>
<?php
}

function i18n_gallery_fancybox_header($gallery) {
}

function i18n_gallery_fancybox_content($gallery, $pic) {
	$id = i18n_gallery_id($gallery);
    foreach ($gallery['items'] as $item) {
//    var_dump($item);
?>
<a class="fancybox" href="data/uploads/<?php echo $item['filename']; ?>" data-fancybox-group="<?php echo $id; ?>" title="<?php echo htmlspecialchars(@$item['description']); ?>"><img src="<?php i18n_gallery_thumb_link($gallery,$item); ?>" alt="<?php echo htmlspecialchars(@$item['_title']); ?>" /></a>
<?php
    } 
}
