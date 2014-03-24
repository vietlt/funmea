<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class permission_model extends MY_Model
{
    protected $_table = 'tbl_permissions';
    protected $primary_key = 'permission_id';
}