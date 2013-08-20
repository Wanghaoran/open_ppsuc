<?php
class IndexAction extends CommonAction {
  public function index(){
    //会员相关信息
    $member_info = M('MemberLoginLog') -> field('login_time,login_ip') -> where(array('mid' => session(C('USER_AUTH_KEY')))) -> order('id DESC') -> limit('2,1') -> select();
    $member_info = $member_info[0];
    $member_info['login_count'] = M('Member') -> getFieldByid(session(C('USER_AUTH_KEY')), 'login_count');
    $this -> assign('member_info', $member_info);
    //登陆信息
    $login_info = M('MemberLoginLog') -> field('id,login_time,login_ip') -> where(array('mid' => session(C('USER_AUTH_KEY')))) -> order('id DESC') -> limit(5) -> select();
    $this -> assign('login_info', $login_info);
    $this -> display();
  }

  //更改资料
  public function changeinfo(){
    $member = M('Member');
    if(!empty($_POST['change'])){
      $data = array();
      if(!empty($_POST['password'])){
	$data['password'] = $this -> _post('password', 'md5');
      }
      $data['name'] = $this -> _post('name');
      if($member -> where(array('id' => session(C('USER_AUTH_KEY')))) -> save($data)){
	$this -> success(L('DATA_UPDATE_SUCCESS'), U('Index/index'));
	exit();
      }else{
	$this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $member -> field('name,email') -> find(session(C('USER_AUTH_KEY')));
    $this -> assign('result', $result);
    $this -> display();
  }

  //登陆日志
  public function loginlog(){
    //登陆信息
    $login_info = M('MemberLoginLog') -> field('id,login_time,login_ip') -> where(array('mid' => session(C('USER_AUTH_KEY')))) -> order('id DESC') -> select();
    $this -> assign('login_info', $login_info);
    $this -> display();
  }

}
