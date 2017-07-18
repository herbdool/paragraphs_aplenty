<div class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php if ($uswds_grid_class): ?>
  <div class="<?php print $uswds_grid_class ?>">
  <?php endif; ?>

    <?php foreach ($graphic_list_rows as $graphic_list_row): ?>
    <div class="usa-graphic_list-row">
      <?php print render($graphic_list_row) ?>
    </div>
    <?php endforeach; ?>

  <?php if ($uswds_grid_class): ?>
  </div>
  <?php endif; ?>

</div>
<?php /*
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    'usa-graphic_list',
    'usa-section',
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}

      {% if uswds_grid_class %}
      <div class="{{ uswds_grid_class }}">
      {% endif %}

      {% for graphic_list_row in graphic_list_rows %}
        <div class="usa-graphic_list-row">
          {{ graphic_list_row }}
        </div>
      {% endfor %}

      {% if uswds_grid_class %}
      </div>
      {% endif %}

    {% endblock %}
  </div>
{% endblock paragraph %}
*/
?>
