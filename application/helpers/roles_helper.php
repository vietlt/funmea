<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_action'))
{
    function load_action()
    {
        return array(
            'backend/config',
            'backend/roles',
            'backend/permission',
            'backend/admin',
            'backend/post',
            'backend/product'
        );
    }
}