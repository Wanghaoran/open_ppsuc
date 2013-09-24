<?php
class CourseAction extends CommonAction {
  //最新课程
  public function index(){
    $CourseCategory = M('CourseCategory');
    $Course = M('Course');
    $result_course = $CourseCategory -> field('id,name') -> order('id DESC') -> select();
    foreach($result_course as $key => $value){
      $result_course[$key]['list'] = $Course -> field('id,name,pic') -> where(array('cid' => $value['id'])) -> order('addtime DESC') -> select();
    }
    $this -> assign('result_course', $result_course);
    $this -> display();
  }

  //课程列表
  public function lists(){
    $CourseCategory = M('CourseCategory');
    $result = $CourseCategory -> field('name,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $Course = M('Course');
    $result_c = $Course -> field('id,name,addtime,content') -> where(array('cid' => $this -> _get('id', 'intval'))) -> order('addtime DESC') -> select();
    $this -> assign('result_c', $result_c);
    $this -> display();
  }

  //观看课程
  public function info(){
    $Course = M('Course');
    $result = $Course -> alias('c') -> field('c.id,c.cid,c.name,c.pic,c.file,c.content,cc.name as cname') -> join('open_course_category as cc ON c.cid = cc.id') -> where(array('c.id' => $this -> _get('id', 'intval'))) -> find();
    $this -> assign('result', $result);
    $this -> display();
  }


}
