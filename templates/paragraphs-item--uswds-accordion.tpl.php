<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
      <?php foreach ($uswds_accordion_items as $accordion_item): ?>
      <?php print render($accordion_item); ?>
      <?php endforeach; ?>
  </div>

</div>
