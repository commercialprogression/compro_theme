
<div id="page">

  <header id="header">
    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <section id="content" class="column">
    <a id="main-content"></a>
    <?php print render($page['content']); ?>
  </section> <!-- /#content -->

  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" class="column sidebar">
      <?php print render($page['sidebar_first']); ?>
    </aside> <!-- /#sidebar-first -->
  <?php endif; ?>

  <footer id="footer">
    <?php print render($page['footer']); ?>
  </footer> <!-- /#footer -->

</div> <!-- /#page -->
