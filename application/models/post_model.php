<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class post_model extends MY_Model
{
    protected $_table = 'tbl_post';
    protected $primary_key = 'post_id';
    protected $_entity_name = 'post_entity';
    
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

    public function get_top_view($limit)
    {
        $this->limit($limit);
        $this->db->where('count_view >', 0);
        $this->order_by('count_view','desc');
        return $this->get_all();
    }

    public function get_top_comment($limit)
    {
        $this->limit($limit);
        $this->order_by('count_comment','desc');
        return $this->get_all();
    }

    public function get_waiting_browse($limit)
    {
        $this->limit($limit);
        $this->db->where('post_status', 0);
        return $this->get_all();
    }

    public function get_detail($slug,$status)
    {
        if($slug!=null)
        {
            $array = array('post_slug' => $slug, 'post_status' => 1);
            return $this->get_by($array);
        }
        else
        {
            return 0;
        }
    }

    public function get_random($limit)
    {
        $this->limit($limit);
        $this->order_by($this->primary_key,'random');
        return $this->get_many_by('post_status',1);
    }
}