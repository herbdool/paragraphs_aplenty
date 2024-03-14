<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <div class="row">
      <?php foreach ($aplenty_media_list as $media_item): ?>
      <?php print render($media_item); ?>
      <?php endforeach; ?>
    </div>
  </div>

</div>
