
<div id="page">

  <header id="header">
    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <section id="pre-content">
    <?php print render($page['pre_content']); ?>
  </section> <!-- /#pre-content -->

  <section id="content">
    <a id="main-content"></a>
    <?php print render($page['content']); ?>
  </section> <!-- /#content -->

  <section id="post-content">
    <?php print render($page['post_content']); ?>
  </section> <!-- /#post-content -->

  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" class="sidebar">
      <?php print render($page['sidebar_first']); ?>
    </aside> <!-- /#sidebar-first -->
  <?php endif; ?>

  <section id="pre-footer">
    <?php print render($page['pre_footer']); ?>
  </section> <!-- /#pre-footer -->

  <footer id="footer">
    <?php print render($page['footer']); ?>
  </footer> <!-- /#footer -->

</div> <!-- /#page -->
