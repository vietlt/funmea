<?php
class post_entity extends entity
{
    public function getCreate_by() {
    	$info = json_decode($this->getData('create_by'));
        return $info->name;
    }

    public function getLinkFb()
    {
    	$info = json_decode($this->getData('create_by'));
    	return $info->link;
    }
}