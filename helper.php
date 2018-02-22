<?php
class ModOnlinestatHelper {
	static function getStat()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query
			->select('*')
			->from("#__rw2_online_stat");
		return $db->setQuery($query)->loadObjectList();
	}
}