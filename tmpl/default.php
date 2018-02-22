<?php
defined('_JEXEC') or die;
$domain = $params->get('domain', 'https://www.joomla.org');
?>
<div style="font-size: 0.7em;"><?php echo JText::_('MOD_ONLINESTAT_WELCOME'); ?></div>
<div style="width: 100%;">
    <table style="width: 100%;">
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
                <td style="<?php if ($item->dir == 'Суммарно') echo "font-weight: bold;"; ?>">
                    <?php echo $item->dir;?>
                </td>
                <td style="text-align: center; <?php if ($item->dir == 'Суммарно') echo "font-weight: bold;"; ?>">
                    <?php echo $item->day;?> <span style="font-size: 0.7em;">%</span>
                </td>
                <td style="text-align: center; <?php if ($item->dir == 'Суммарно') echo "font-weight: bold;"; ?>">
                    <?php echo $item->week;?> <span style="font-size: 0.7em;">%</span>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div style="text-align: right;">
    <a style="font-size: 0.8em; font-style: italic;" class="jutooltip" title="<?php echo JText::_('MOD_ONLINESTAT_HELP_TEXT'); ?>"><?php echo JText::_('MOD_ONLINESTAT_HELP'); ?>?</a>
</div>