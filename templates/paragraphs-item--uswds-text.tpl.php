<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="container">
      <div class="row">
    <?php endif; ?>

      <?php print render($content); ?>

    <?php if ($uswds_grid_class): ?>
      </div>
    </div>
    <?php endif; ?>

  </div>
</div>
