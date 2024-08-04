<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print render($admin_links); ?>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if (!empty($content['field_aplenty_image'])): ?>
    <?php print render($content['field_aplenty_image']) ?>
    <?php endif; ?>

    <?php if (!empty($content['field_aplenty_title'])): ?>
    <div class="aplenty-hero-callout">
      <?php print render($content['field_aplenty_title']) ?>

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
