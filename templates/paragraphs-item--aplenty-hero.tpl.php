<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content container"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if (!empty($content['field_aplenty_image'])): ?>
    <?php print render($content['field_aplenty_image']) ?>
    <?php endif; ?>

    <?php if (!empty($content['field_aplenty_title'])): ?>
    <div class="aplenty-hero-callout">
      <h2><?php print render($content['field_aplenty_title']) ?></h2>

      <?php if (!empty($content['field_aplenty_body'])): ?>
      <?php print render($content['field_aplenty_body']) ?>
      <?php endif; ?>

      <?php if (!empty($content['field_aplenty_link'])): ?>
      <?php print render($content['field_aplenty_link']) ?>
      <?php endif; ?>

    </div>
    <?php endif; ?>

  </div>
</div>