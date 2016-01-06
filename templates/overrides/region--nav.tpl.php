<?php if ($content): ?>
  <div class="sliding-panel-button">Menu</div>
  <nav class="<?php print $classes; ?> sliding-panel-content"><div class="inner">
    <div class="sliding-panel-close">x</div>
    <?php print $content; ?>
  </div></nav>
  <div class="sliding-panel-fade-screen"></div>
<?php endif; ?>
