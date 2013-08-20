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


}
