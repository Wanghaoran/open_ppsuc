<?php
class AjaxAction extends Action {
  //ajax验证邮箱是否重复
  public function ajaxrepetaemail(){
    if(M('Member') -> getFieldByemail($_GET['email'], 'id')){
      echo 1;
    }else{
      echo 0;
    }
  }
}
