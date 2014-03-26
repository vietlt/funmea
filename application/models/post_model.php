<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class post_model extends MY_Model
{
    protected $_table = 'tbl_post';
    protected $primary_key = 'post_id';
    // protected $_entity_name = 'admin_entity';
    
    public function get_new_videos($limit)
    {
        $this->limit($limit);
        $this->order_by($this->primary_key,'DESC');
        return $this->get_many_by(array('post_status' => 1));
    }
    public function get_seemore_videos($limit,$offset)
    {
        $this->limit($limit,$offset);
        $this->order_by($this->primary_key,'DESC');
        return $this->get_many_by(array('post_status' => 1));
    }
    public function get_unwatch_videos($limit)
    {
    	$this->limit($limit);
    	return $this->get_many_by(array('post_status' => 1));
    }

    public function check_video_code($video_code)
    {
    	return $this->get_by('video_code',$video_code);
    }

}