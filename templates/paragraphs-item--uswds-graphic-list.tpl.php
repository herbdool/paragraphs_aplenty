<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <?php if ($uswds_grid_class): ?>
  <div class="container">
      <div class="row">
  <?php endif; ?>

    <?php foreach ($graphic_list_rows as $graphic_list_row): ?>
    <div class="aplenty-graphic_list-row">
      <?php print render($graphic_list_row) ?>
    </div>
    <?php endforeach; ?>

  <?php if ($uswds_grid_class): ?>
    </div>
  </div>
  <?php endif; ?>

</div>
