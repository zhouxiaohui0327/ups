<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
//获取父级分类名
function topcategory($category) {
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $rs = $db->fetchRow($db->select()->from($prefix.'metas')->where('slug = ?', $category)->limit(1));


    if(isset($rs['parent']) && $rs['parent']==0){
        return $rs['slug'];
    }
    elseif(isset($rs['parent']) ) {
        $rs2 = $db->fetchRow($db->select()->from($prefix.'metas')->where('mid = ?', $rs['parent'])->limit(1));
        return $rs2['slug'];
    }
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
function thumbnail($content) {
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i';

    if (preg_match_all($pattern, $content, $thumbUrl)) {
        $imgSrc = $thumbUrl[1][0];
        echo $imgSrc;
    } else {
        echo 'http://ups.cn/usr/uploads/2015/12/logo.png';
    }
}

