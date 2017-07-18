<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>

    <?php if ($uswds_grid_class): ?>
    <div class="<?php print $uswds_grid_class ?>">
    <?php endif; ?>

      <div class="usa-width-one-third">

        <?php if ($content['field_uswds_text_left']): ?>
        <?php print render($content['field_uswds_text_left'][0]) ?>
        <?php endif; ?>

      </div>

      <div class="usa-width-two-thirds">

        <?php if ($content['field_uswds_text_right']): ?>
        <?php print render($content['field_uswds_text_right'][0]) ?>
        <?php endif; ?>

      </div>

    <?php if ($uswds_grid_class): ?>
    </div>
    <?php endif; ?>

  </div>
</div>
