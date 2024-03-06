<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if (!empty($content['field_uswds_image'])): ?>
    <div class="aplenty-card-image">
      <?php print render($content['field_uswds_image'][0]) ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($content['field_uswds_title'])): ?>
    <h2 class="aplenty-title"><?php print render($content['field_uswds_title']) ?></h2>
  <?php endif; ?>

  <?php if (!empty($content['field_uswds_body'])): ?>
    <?php print render($content['field_uswds_body']) ?>
  <?php endif; ?>

  <?php if (!empty($content['field_uswds_button'])): ?>
    <?php print render($content['field_uswds_button']) ?>
  <?php endif; ?>
</div>
