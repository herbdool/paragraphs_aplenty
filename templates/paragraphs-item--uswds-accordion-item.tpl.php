<li class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <button class="usa-accordion-button" aria-expanded="<?php print $expanded ?>" aria-controls="<?php print $controls ?>">
    <?php print $accordion_title ?>
  </button>
  <div id="<?php print $controls ?>" class="usa-accordion-content">
    <?php hide($content['field_uswds_title']); ?>
    <?php print render($content) ?>
  </div>

</li>
