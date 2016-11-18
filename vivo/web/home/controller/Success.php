<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/15
 * Time: 0:51
 */
    namespace web\home\controller;
    class Success extends isLogin
    {
        public function success()
        {
            //先传递过去css
            $css = array(
                "success.css",
            );
            View::with('css', $css);

            $orderForm_id = q('get.orderForm_id','0','intval');
            $data = Db::table('orderform')->where("orderForm_id",$orderForm_id)->first();
            //这是加入会员名称
            $data["member_user_nickname"] = Db::table('member_user')->where("member_user_id",$data['member_user_member_user_id'])->pluck("member_user_nickname");
            $commodity_id = Db::table("orderformlist")->where("orderForm_orderForm_id",$orderForm_id)->lists("commodity_commodity_id");
            foreach ($commodity_id as $key => $value){
                $data["commodity_info"][$key][] = Db::table("commodity")
                    ->where("commodity_id",$value)
                    ->pluck("commodity_name");
            }
            $orderFormList_id = Db::table('orderformlist')->where("orderForm_orderForm_id",$orderForm_id)->lists("orderFormList_id");
            foreach ($orderFormList_id as $key => $value){
                $data["commodity_info"][$key][] = Db::table("orderformlist")
                    ->where("orderFormList_id",$value)
                    ->pluck("orderFormList_attr");
            }
            foreach ($data["commodity_info"] as $key => $value){
                $data["commodity_info"][$key][1] = explode('|',rtrim($value[1],"|"));
                foreach ($data["commodity_info"][$key][1] as $k => $v){
                    $data["commodity_info"][$key][1][$k] = explode(":",$v);
                    unset($data["commodity_info"][$key][1][$k][0]);
                }
            }
            foreach ($data["commodity_info"] as $key => $value){
                $arr = array();
                foreach ($value[1] as $k => $v){
                    $arr[] = $v[1];
                }
                $data["commodity_info"][$key][1] = $arr;
            }
            View::with("data",$data);
            View::make();
        }
    }