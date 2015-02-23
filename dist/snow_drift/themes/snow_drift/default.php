<?php
defined('C5_EXECUTE') or die('Access Denied.');

ob_start();
?>
<!DOCTYPE html>
<html lang="<?= Localization::activeLanguage() ?>">
  *head
  <body>
    <div id="snow-drift-wrapper" class="<?= $c->getPageWrapperClass() ?><?= $c->getCollectionID() == 1 ? ' ccm-page-home' : '' ?>">
      *nav
      <div id="snow-drift-body-wrapper" class="snow-drift-body-wrapper">
        *header
        *main
        *footer
      </div><!-- end .snow-drift-body-wrapper -->
    </div><!-- #end-wrapper -->
    *templates/nav_button
    *foot
  </body>
</html>
<?php
$template = ob_get_clean();

foreach (explode("\n", $template) as $ele) {
    $ele = trim($ele);
    if (strpos($ele, '*') === 0) {
        $this->inc('elements/' . preg_replace('/^\*/', '', $ele) . '.php');
    } else {
        echo $ele . "\n";
    }
}
