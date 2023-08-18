<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

<header id="header" class="header">
    <div class="top_bar">
        <ul class="inner">
            <li>부산아파트입주청소 부산 양산 김해 기장 아파트입주청소 이사청소 오피스텔청소 상가청소 전문업체 깔끄미청소</li>
            <li>
                <a href="/adm"><i class="bi bi-pause-fill"></i></a>
            </li>
        </ul>
    </div>
    <div class="head_wrap">
        <div class="inner">
            <h1>
                <a href="/">
                    <img src="<?=G5_THEME_URL;?>/images/logo.png" alt="깔끄미청소">
                </a>
            </h1>
            <nav id="gnb" class="gnb">
                <ul>
                    <li><a href="<?=G5_THEME_URL;?>/doc/m011.php">깔끄미청소 소개</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/doc/m021.php">아파트입주청소</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/doc/m031.php">이사 상가청소</a></li>
                    <li><a href="<?=G5_THEME_URL;?>/doc/m041.php">사무실청소</a></li>
                    <li><a href="/bbs/board.php?bo_table=gallery">청소갤러리</a></li>
                    <li><a href="/bbs/board.php?bo_table=qa">질문과답변</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="mopen">
        <span class="material-symbols-outlined">
            menu
        </span>
    </div>
</header>




<?php
    if(!defined('_INDEX_')) { // index가 아닐 때만 실행
        include G5_THEME_PATH.'/sub_head.php'; // 파일 집어넣기
    }
    ?>

<script>
    $(function(){
        let num = <?=$cate_num;?>;
        $('.gnb li').eq(num - 1).addClass('on');
    });
</script>