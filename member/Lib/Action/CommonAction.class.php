<?php
class CommonAction extends Action {
  //登录验证
  public function _initialize(){
    if(!$_SESSION[C('USER_AUTH_KEY')]){
      $this->error(L('NOT_LOGIN'), U(C('USER_AUTH_GATEWAY')) . '/module_name/' . MODULE_NAME . '/action_name/' . ACTION_NAME);
    }
  }
}
