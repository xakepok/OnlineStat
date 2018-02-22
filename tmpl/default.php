<?php
defined('_JEXEC') or die;
$domain = $params->get('domain', 'https://www.joomla.org');
?>
<div style="font-size: 0.7em;"><?php echo JText::_('MOD_ONLINESTAT_WELCOME'); ?></div>
<div>
    <table>
        <thead>
            <tr>
                <th><?php echo JText::_('MOD_ONLINESTAT_HEAD_DIRECTION'); ?></th>
                <th><?php echo JText::_('MOD_ONLINESTAT_HEAD_TODAY'); ?></th>
                <th style="font-size: 0.7em;"><?php echo JText::_('MOD_ONLINESTAT_HEAD_WEEK'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stat as $item): ?>
            <tr>
                <td><?php echo $item->dir;?></td>
                <td><?php echo $item->day;?> %</td>
                <td><?php echo $item->week;?> %</td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>