<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="<?php print $uswds_grid_class ?>">
    <?php endif; ?>

      <?php if (!empty($content['field_uswds_image'])): ?>
      <?php print render($content['field_uswds_image']) ?>
      <?php endif; ?>

      <?php if (!empty($content['field_uswds_title'])): ?>
      <div class="aplenty-hero-callout aplenty-section-dark">
        <h2><?php print render($content['field_uswds_title']) ?></h2>

        <?php if (!empty($content['field_uswds_link'])): ?>
        <?php print render($content['field_uswds_link']) ?>
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
