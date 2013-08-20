<?php
class NewsAction extends CommonAction {
  //新闻列表
  public function index(){
    //新闻
    $News = M('News');
    $result_news = $News -> alias('n') -> field('n.id,n.title,nc.name as ncname,nc.color,n.addtime') -> join('open_news_category as nc ON n.cid = nc.id') -> order('n.addtime DESC') -> select();
    $this -> assign('result_news', $result_news);
    $this -> display();
  }

  //新闻详情
  public function info(){
    $News = M('News');
    $result = $News -> field('title,content,addtime') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
