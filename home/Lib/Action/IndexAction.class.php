<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $domain = M('domain');
        $domainList = $domain->field(array('id', 'name', 'org', 'uts'))->order('id asc')->limit('30')->select();
        $this->assign('domainList', $domainList);
        $this->display();
    }
}