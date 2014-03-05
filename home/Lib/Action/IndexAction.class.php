<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	import('ORG.Util.Page');
        $domainDao = M('domain');
        $count = $domainDao->count();
        $page = new Page($count);
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        
        $domainList = $domainDao->field(array('id', 'name', 'org', 'uts'))->order('id asc')->page($nowPage.','.$page->listRows)->select();//->limit('30')->select();
        
        $this->assign('page', $page->show());
        $this->assign('domainList', $domainList);
        C('TOKEN_ON',false);
        
        $keyword = $_GET['keyword'];
        $com = $_GET['com'];
        $cn = $_GET['cn'];
        $net = $_GET['net'];
        $this->assign('keyword', $keyword);
        $this->assign('com', $com);
        $this->assign('cn', $cn);
        $this->assign('net', $net);
        $this->display();
    }
}