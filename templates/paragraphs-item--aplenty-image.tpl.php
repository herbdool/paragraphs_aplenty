<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php print render($admin_links); ?>
  <?php print render($title_prefix); ?>
  <?php print render($title_suffix); ?>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
    <figure>
      <?php print render($content['field_aplenty_image']); ?>
      <figcaption>
        <?php print render($caption); ?>
        <?php print render($caption_link); ?>
      </figcaption>
    </figure>
  </div>
</div>
