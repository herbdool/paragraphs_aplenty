<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print render($content['field_uswds_image'][0]) ?>
  <div class="usa-media_block-body">
    <h3><?php print render($content['field_uswds_title'][0]) ?></h3>
    <?php print render($content['field_uswds_text_right'][0]) ?>
  </div>
</div>

