<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="<?php print $uswds_grid_class ?>">
    <?php endif; ?>

      <?php print render($content); ?>

    <?php if ($uswds_grid_class): ?>
    </div>
    <?php endif; ?>

  </div>
</div>
