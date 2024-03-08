<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <div class="aplenty-media_block-image">
      <?php print render($content['field_aplenty_image'][0]) ?>
    </div>
    <div class="aplenty-media_block-body">
      <h2><?php print render($content['field_aplenty_title'][0]) ?></h2>
      <?php print render($content['field_aplenty_body'][0]) ?>
    </div>
  </div>
</div>
