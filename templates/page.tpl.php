
<div id="page">

  <header id="header">
    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <section id="content" class="column">
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <a id="main-content"></a>
    <?php print render($page['content']); ?>
  </section> <!-- /#content -->

  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" class="column sidebar">
      <?php print render($page['sidebar_first']); ?>
    </aside> <!-- /#sidebar -->
  <?php endif; ?>
  
  <?php if ($page['sidebar_second']): ?>
    <aside id="sidebar-second" class="column sidebar">
      <?php print render($page['sidebar_second']); ?>
    </aside> <!-- /#sidebar -->
  <?php endif; ?>

  <footer id="footer">
    <?php print render($page['footer']); ?>
  </footer> <!-- /#footer -->

</div> <!-- /#page -->
