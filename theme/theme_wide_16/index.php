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




<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com 
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
<div id="hdhd">

<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block3', 'content1_1',1,0);		// 최소설치시 자동생성되는 갤러리게시판
			?>

		<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block_12', 'content1',7,0);		// 최소설치시 자동생성되는 갤러리게시판
			?>

	
			<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block_12', 'content2',3,0);		// 최소설치시 자동생성되는 갤러리게시판
			?>

	
		<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block_12', 'content3',7,0);		// 최소설치시 자동생성되는 갤러리게시판
			?>
		
		

</div>
</header>
<!-------------------------- ./슬라이드 -------------------------->
<!----유튜브홍보 -->
<div id="hshs" class="py-md-5 py-3">
	
	<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_list', 'content4',1,100);		// 최소설치시 자동생성되는 갤러리게시판
			?>
		
	
</div>

<div id="hoho" class="video-background">
<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block_14', 'youtube',1,100);		// 최소설치시 자동생성되는 갤러리게시판
			?>
		
</div>

<!----유튜브홍보 끝 -->


<!---- POINT ------>
<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block15', 'point',3,100);		// 최소설치시 자동생성되는 갤러리게시판
			?>
		
<!---- 포인트 끝 ------>

<!---- 가격---->

<!---- 가격---->
<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_block16', 'LOCA',1,100);		// 최소설치시 자동생성되는 갤러리게시판
			?>
<!----- 지도---->

<?php
			// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
			// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
			// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
			echo latest('pic_list6', 'LOCATION',3,100);		// 최소설치시 자동생성되는 갤러리게시판
			?>
<!----- 지도끝---->

<!--- 퀵메뉴--->
<aside id="quick">
  <ul>
    <li><a href="https://gjeotjd123.cafe24.com/ganu/" target="_blank">
          <img src="/gnu/theme/ety_wide_theme/img/loo.png" title="">
          <strong>허대성 포토폴리오</strong>

        </a>
    </li>
    <li><a href="https://www.instagram.com/zooooooo_oooo/" target="_blank">
        <img src="/gnu/theme/ety_wide_theme/img/loo.png" title="">
          <strong>허대성 기획서</strong>

          </a></li>
    <li><a href="https://gjeotjd123.cafe24.com/0803/js.html/" target="_blank">
      <img src="/gnu/theme/ety_wide_theme/img/loo.png" title="">
        <strong>허대성 자기소개서</strong>

    </a></li>
  </ul>
</aside>



<?php
include_once(G5_THEME_PATH.'/tail.php');


