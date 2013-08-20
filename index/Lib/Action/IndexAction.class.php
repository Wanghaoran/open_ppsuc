<?php
class IndexAction extends CommonAction {
  public function index(){
    //新闻
    $News = M('News');
    $result_news = $News -> alias('n') -> field('n.id,n.title,nc.name as ncname,nc.color,n.addtime') -> join('open_news_category as nc ON n.cid = nc.id') -> order('n.addtime DESC') -> select();
    $this -> assign('result_news', $result_news);
    $this -> display();
  }

}
