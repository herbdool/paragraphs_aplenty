<div class="<?php print implode(' ', $classes_array); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div class="content"<?php print backdrop_attributes($content_attributes); ?>>
      <?php foreach ($uswds_graphic_list_rows as $graphic_list_row): ?>
        <div class="aplenty-graphic_list-row">
          <?php print render($graphic_list_row) ?>
        </div>
      <?php endforeach; ?>
  </div>
</div>
