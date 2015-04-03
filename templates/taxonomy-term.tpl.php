<?php if ($content): ?>
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?>">
  <?php print render($content); ?>
</div>
<?php endif; ?>
