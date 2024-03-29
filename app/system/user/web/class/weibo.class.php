<?php
# MetInfo Enterprise Content Management System 
 

defined('IN_MET') or exit('No permission');

load::mod_class('user/web/class/other');

class weibo extends other {

	public function __construct() {
		global $_M;
		if(!$_M['config']['met_weibo_open']){
			okinfo($_M['url']['login'], $_M['word']['userwenboclose']);
		}
		$this->appid = $_M['config']['met_weibo_appkey'];
		$this->appkey = $_M['config']['met_weibo_appsecret'];
		$this->table = $_M['table']['user_other'];
		$this->type = 'weibo';
	}	
	
	public function get_login_url(){
		global $_M;
		$redirect_uri = $_M['url']['web_site'].'member/login.php?a=doother_login&type=weibo';
		$url .= "https://api.weibo.com/oauth2/authorize?";
		$url .= "client_id={$this->appid}";
		$url .= "&redirect_uri=".urlencode($redirect_uri);
		$url .= "&response_type=code";
		$url .= "&state=".$this->get_state();			
		return $url;
	}
	
	public function get_access_token_by_curl($code){
		global $_M;		
		$redirect_uri = $_M['url']['web_site'].'member/login.php?a=doother_login&type=weibo';
		$url = "https://api.weibo.com/oauth2/access_token";
		$send['code'] = $code;
		$send['client_id'] = $this->appid;
		$send['client_secret'] = $this->appkey;
		$send['grant_type'] = 'authorization_code';
		$send['redirect_uri'] = $redirect_uri;

        $data = json_decode(load::mod_class('user/web/class/curl_ssl', 'new')->curl_post($url, $send), true);
		$data['openid'] = $data['uid'];
		if($this->error_curl($data)){
			return false;
		}else{
			return $data;
		}		
	}
	
	public function get_info_by_curl($unionid){
		global $_M;
		$data = $this->get_other_user($unionid);
		$url = "https://api.weibo.com/2/users/show.json";
		$send['access_token'] = $data['access_token'];
		$send['uid'] = $data['openid'];
		$send['source'] = $this->appkey;
        $data = json_decode(load::mod_class('user/web/class/curl_ssl', 'new')->curl_post($url, $send, 'get'), true);
		$data['username'] = $data['screen_name'];
		if($this->error_curl($data)){
			return false;
		}else{
			return $data;	
		}
	}
	
	public function error_curl($data){
		if($data['error']){
			$this->errorno = $data['error_description'] ? $data['error_description'] : $data['error'];
			return true;
		}else{
			return false;
		}
	}
}


# This program is an open source system, commercial use, please consciously to purchase commercial license.

?>