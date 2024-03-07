<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content container"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if (!empty($content['field_uswds_image'])): ?>
    <?php print render($content['field_uswds_image']) ?>
    <?php endif; ?>

    <?php if (!empty($content['field_uswds_title'])): ?>
    <div class="aplenty-hero-callout">
      <h2><?php print render($content['field_uswds_title']) ?></h2>

      <?php if (!empty($content['field_uswds_body'])): ?>
      <?php print render($content['field_uswds_body']) ?>
      <?php endif; ?>

      <?php if (!empty($content['field_uswds_button'])): ?>
      <?php print render($content['field_uswds_button']) ?>
      <?php endif; ?>

    </div>
    <?php endif; ?>

  </div>
</div>
