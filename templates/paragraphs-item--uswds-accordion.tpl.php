<?php if ($uswds_grid_class): ?>
<div class="<?php print $uswds_grid_class ?>">
<?php endif; ?>

  <ul class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <?php foreach ($uswds_accordion_items as $accordion_item): ?>
    <?php print render($accordion_item); ?>
    <?php endforeach; ?>

  </ul>

<?php if ($uswds_grid_class): ?>
</div>
<?php endif; ?>
