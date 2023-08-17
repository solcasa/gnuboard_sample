<?php
if($board['bo_table'] == 'qa') {
    $page_title = '문의게시판';
    $cate_title = '고객지원';
    $page_num = 1;
    $cate_num = 6;
}

if($board['bo_table'] == 'gallery') {
    $page_title = '청소갤러리';
    $cate_title = '고객지원';
    $page_num = 1;
    $cate_num = 5;
}
?>

<main id="sub" class="sub" role="main">
    <article class="subpage">
        <div class="inner">
            <div class="page">
                <strong><?=$page_title;?></strong> / <span><?=$cate_title;?></span>
            </div>