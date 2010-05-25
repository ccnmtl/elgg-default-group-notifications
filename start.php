<?php

function set_notifications($event, $object_type, $object){
  global $CONFIG;

  $user = $object['user'];
  $group = $object['group'];

  add_entity_relationship($user->guid, 'notifyemail',
			  $group->guid);
  
  }
register_elgg_event_handler('join',
			    'group',
			    'set_notifications');
register_elgg_event_handler('added',
			    'group',
			    'set_notifications');

?>