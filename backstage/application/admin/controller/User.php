<?php
/**
 * 作者 廖桂钦
 * 开发时间2019/11/19
 * QQ 309865580
 */

namespace app\admin\controller{
    class User  extends  Base{

        public function  index(){
        }

        public function login(){
            $post_data = input('post.');
            $post_data = array('code'=>2000,'data'=>array('token'=>'admin-token'));
            return  json($post_data);
        }
    }
}
