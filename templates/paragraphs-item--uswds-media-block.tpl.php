<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="aplenty-media_block-image">
    <?php print render($content['field_uswds_image'][0]) ?>
  </div>
  <div class="aplenty-media_block-body">
    <h2><?php print render($content['field_uswds_title'][0]) ?></h2>
    <?php print render($content['field_uswds_body'][0]) ?>
  </div>
</div>

