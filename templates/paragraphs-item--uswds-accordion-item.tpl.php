<details class="<?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?> <?php print $expanded; ?>>

  <summary>
    <?php print $accordion_title ?>
  </summary>
  <div id="<?php print $controls ?>" class="usa-accordion-content">
    <?php hide($content['field_uswds_title']); ?>
    <?php print render($content) ?>
  </div>

</details>
