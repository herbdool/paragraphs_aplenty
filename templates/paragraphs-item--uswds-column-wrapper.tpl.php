<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <?php if ($column_items): ?>
      <?php foreach ($column_items as $column_item): ?>
        <?php print render($column_item); ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
