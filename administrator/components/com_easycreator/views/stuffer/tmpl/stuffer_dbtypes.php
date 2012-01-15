<?php defined('_JEXEC') || die('=;)');
/**
 * @package    EasyCreator
 * @subpackage Views
 * @author     Nikolai Plath (elkuku)
 * @author     Created on 14-Jan-2012
 * @license    GNU/GPL, see JROOT/LICENSE.php
 */
?>

<div class="ecr_floatbox">
    <div class="infoHeader img icon-24-database"><?= jgettext('Database support') ?></div>
    <?php echo EcrHtml::drawDbOptions($this->project); ?>
</div>
