<?php
# MetInfo Enterprise Content Management System


defined('IN_MET') or exit('No permission');

load::mod_class('base/base_op');

class feedback_op extends base_op
{
    /**
     * 初始化
     */
    public function __construct()
    {
        global $_M;
        $this->database = load::mod_class('feedback/feedback_database', 'new');
    }

    public function list_copy($classnow = '', $toclass1 = '', $toclass2 = '', $toclass3 = '', $tolang = '', $paras = array())
    {
        return true;
    }

    public function list_move($nowclass1 = '', $nowclass2 = '', $nowclass3 = '', $toclass1 ='', $toclass2 ='', $toclass3 = '')
    {
        return true;
    }

}

# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>
