<?php if ($uswds_grid_class): ?>
<div class="container">
  <div class="row">
<?php endif; ?>

  <div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if ($uswds_accordion_items): ?>
    <?php foreach ($uswds_accordion_items as $accordion_item): ?>
    <?php print render($accordion_item); ?>
    <?php endforeach; ?>
  <?php endif; ?>
  </div>

<?php if ($uswds_grid_class): ?>
  </div>
</div>
<?php endif; ?>
