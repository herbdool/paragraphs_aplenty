<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content container"<?php print backdrop_attributes($content_attributes); ?>>

    <div class="container">
      <div class="row">
        <?php foreach ($uswds_columns as $column): ?>
        <?php print render($column); ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>
