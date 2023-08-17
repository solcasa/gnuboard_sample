<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main id="index" class="main" role="main">
    <section id="main_visual">
        <div class="main_slide">
            <div class="itm">
                <strong>아파트입주청소</strong>
                <span>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</span>
                <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
            </div>
            <div class="itm">
                <strong>아파트입주청소</strong>
                <span>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</span>
                <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
            </div>
            <div class="itm">
                <strong>아파트입주청소</strong>
                <span>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</span>
                <p>보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
            </div>
        </div>
    </section>
    <section id="main_customer">
        <ul class="inner">
            <li>
                <a href="<?=G5_THEME_URL;?>/doc/m011.php">
                    <strong>금맥 소개</strong>
                </a>
            </li>
            <li>
                <a href="<?=G5_THEME_URL;?>/doc/m021.php">
                    <strong>아파트입주청소</strong>
                </a>
            </li>
            <li>
                <a href="<?=G5_THEME_URL;?>/doc/m031.php">
                    <strong>이사 상가청소</strong>
                </a>
            </li>
            <li>
                <a href="<?=G5_THEME_URL;?>/doc/m041.php">
                    <strong>청소 갤러리</strong>
                </a>
            </li>
            <li class="tel">
                <span class="material-symbols-outlined">
                    person_add
                </span>
                <a href="tel:051-783-2317">051-783-2317</a>
                <p>
                    부산아파트입주청소 부산 양산 김해 기장 아파트입주청소 이사청소 오피스텔청소 상가청소 전문업체 깔끄미청소
                </p>
            </li>
        </ul>
    </section>
    <section id="main_content" class="sec">
        <div class="inner">
            <figure>
                <a href="">
                    <div class="img_box">
                        <img src="<?=G5_THEME_URL;?>/images/main_s011.jpg" alt="깔끄미청소">
                    </div>
                    <h3>부산 아파트입주청소</h3>
                    <p>
                        신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                        보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                        구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다
                    </p>
                </a>
            </figure>
            <figure>
                <a href="">
                    <div class="img_box">
                        <img src="<?=G5_THEME_URL;?>/images/main_s012.jpg" alt="깔끄미청소">
                    </div>
                    <h3>부산 아파트입주청소</h3>
                    <p>
                        신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                        보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                        구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다
                    </p>
                </a>
            </figure>
            <figure>
                <a href="">
                    <div class="img_box">
                        <img src="<?=G5_THEME_URL;?>/images/main_s013.jpg" alt="깔끄미청소">
                    </div>
                    <h3>부산 아파트입주청소</h3>
                    <p>
                        신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                        보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                        구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다
                    </p>
                </a>
            </figure>
        </div>
    </section>
    <section id="main_notice" class="sec">
        <div class="inner">
            <div class="left">
                <h3>부산아파트입주청소 공지
                    <a href="/bbs/board.php?bo_table=notice">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                    </a>
                </h3>
                <div class="main_notice">
                    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	echo latest('theme/notice', 'notice', 3, 35);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
                </div>
            </div>
            <!-- <div class="center">
                <div class="movie_box">
                    <iframe src="https://www.youtube.com/embed/eOlZJDNKLCw"
                        title="&quot;VALHALLA&quot; | Most Epic Viking &amp; Nordic Rise Music | Danheim"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div> -->
            <div class="right">
                <div class="map_box">
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1690857611779"
                        class="root_daum_roughmap root_daum_roughmap_landing _map"></div>

                    <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                    <script charset="UTF-8" class="daum_roughmap_loader_script"
                        src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1690857611779",
                        "key": "2fpmb",
                        // "mapWidth": "640",
                        // "mapHeight": "360"
                    }).render();
                    </script>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once(G5_THEME_PATH.'/tail.php');