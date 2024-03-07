<div class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <div class="container">
      <div class="row">
        <?php foreach ($uswds_cards as $card): ?>
        <?php print render($card); ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>
