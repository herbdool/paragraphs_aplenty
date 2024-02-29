<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content container"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="<?php print $uswds_grid_class ?>">
    <?php endif; ?>

      <?php if (!empty($content['field_uswds_image'])): ?>
      <?php print render($content['field_uswds_image']) ?>
      <?php endif; ?>

      <?php if (!empty($content['field_uswds_title'])): ?>
      <div class="aplenty-hero-callout aplenty-section">
        <h2 class="aplenty-title"><?php print render($content['field_uswds_title']) ?></h2>

        <?php if (!empty($content['field_uswds_body'])): ?>
        <?php print render($content['field_uswds_body']) ?>
        <?php endif; ?>

        <?php if (!empty($content['field_uswds_button'])): ?>
        <?php print render($content['field_uswds_button']) ?>
        <?php endif; ?>

      </div>
      <?php endif; ?>

    <?php if ($uswds_grid_class): ?>
    </div>
    <?php endif; ?>

  </div>
</div>
