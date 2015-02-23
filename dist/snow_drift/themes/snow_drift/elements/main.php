<?php defined('C5_EXECUTE') or die('Access Denied.') ?>
<main id="snow-drift-main">
    <?php
        $a = new Area('Main');
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
    ?>
</main>
