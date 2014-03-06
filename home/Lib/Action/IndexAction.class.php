<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	import('ORG.Util.Page');
    	C('TOKEN_ON',false);

        $nowPage 	= isset($_GET['p'])?$_GET['p']:1;
        $keyword 	= isset($_GET['keyword'])?$_GET['keyword']:'';
        $org 		= isset($_GET['org'])?$_GET['org']:'';
        
        // 构建查询条件
        $condition = array();
        if($keyword != '') {
        	$condition['name'] = array('like', '%'.$keyword.'%');
        }
        if($org != '') {
        	$condition['org'] = array('eq', $org);
        }
        
        // 开始查询
        $domainDao = M('domain');
        $count = $domainDao
        		->where($condition)
        		->count();
        $page = new Page($count);
        $domainList = $domainDao
        		->field(array('id', 'name', 'org', 'uts'))
        		->where($condition)
        		->order('id asc')
        		->page($nowPage.','.$page->listRows)
        		->select();
        
        $this->assign('page', $page->show());
        $this->assign('domainList', $domainList);
        

        $this->assign('keyword', $keyword);
        $this->assign('org', $org);
        $this->display();
    }
}