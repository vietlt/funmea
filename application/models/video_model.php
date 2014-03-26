<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class video_model extends MY_Model
{
    protected $_table = 'tbl_videos';
    protected $primary_key = 'video_id';
    // protected $_entity_name = 'admin_entity';
    public function getDetail($slug,$status)
    {
    	if($slug!=null)
    	{
	    	$array = array('post_slug' => $slug, 'post_status' => 1);
	    	$this->db->select('*');
	    	$this->db->from($this->_table);
	    	$this->db->where($array);
	    	return $this->db->get();
    	}
    	else
    	{
    		return 0;
    	}
    }
}