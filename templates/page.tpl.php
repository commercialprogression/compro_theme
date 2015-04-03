<?php if ($page['header']) print render($page['header']) ?>
<?php if ($page['pre_content']) print render($page['pre_content']) ?>
<div class ="content-and-sidebar">
  <?php if ($page['content']) print render($page['content']) ?>
  <?php if ($page['sidebar_first']) print render($page['sidebar_first']) ?>
</div>
<?php if ($page['post_content']) print render($page['post_content']) ?>
<?php if ($page['pre_footer']) print render($page['pre_footer']) ?>
<?php if ($page['footer']) print render($page['footer']) ?>
