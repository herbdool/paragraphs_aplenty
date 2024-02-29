<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content container"<?php print backdrop_attributes($content_attributes); ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="<?php print $uswds_grid_class ?>">
    <?php endif; ?>

      <?php foreach ($uswds_columns as $column): ?>
      <?php print render($column); ?>
      <?php endforeach; ?>

    <?php if ($uswds_grid_class): ?>
    </div>
    <?php endif; ?>

  </div>
</div>
