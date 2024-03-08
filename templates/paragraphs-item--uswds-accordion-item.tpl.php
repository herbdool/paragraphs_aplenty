<details class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?> <?php print $expanded; ?>>
  <summary>
    <?php print $accordion_title ?>
  </summary>
  <div class="aplenty-accordion-content">
    <?php hide($content['field_aplenty_title']); ?>
    <?php print render($content) ?>
  </div>
</details>
