<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <?php foreach ($cards as $card): ?>
      <?php print render($card); ?>
    <?php endforeach; ?>
  </div>

</div>
