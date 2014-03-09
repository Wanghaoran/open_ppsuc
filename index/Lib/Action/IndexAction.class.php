<?php
class IndexAction extends CommonAction {
  public function index(){
    //新闻
    $News = M('News');
    $result_news = $News -> alias('n') -> field('n.id,n.title,nc.name as ncname,nc.color,n.addtime') -> join('open_news_category as nc ON n.cid = nc.id') -> limit(12) -> order('n.addtime DESC') -> select();
    $this -> assign('result_news', $result_news);
    $this -> display();
  }

    public function teacherlist(){
        $teacher = M('Teacher');
        $result = $teacher -> field('id,name,pic,small_content') -> select();
        $this -> assign('result', $result);
        $this -> display();
    }

    public function teacherinfo(){
        $teacher = M('Teacher');
        $result = $teacher -> field('id,name,pic,small_content,big_content') -> find($this -> _get('id', 'intval'));
        $this -> assign('result', $result);
        $this -> display();
    }

    //联盟高校
    public function unionschool(){
        $Unionschool = M('Unionschool');
        $result = $Unionschool -> select();
        $this -> assign('result', $result);
        $this -> display();
    }

    public function aboutus(){
        $this -> display();
    }

}
