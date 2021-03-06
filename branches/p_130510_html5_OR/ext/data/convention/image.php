<?php require '../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Image Guide : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH_V1.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- Image 가이드 설명 -->
	<section>
		<h1 class="s_tit">Image Guide</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">네이밍 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">이미지 기본 규칙</a></li>
				<li><a href="#summary2" rel="bookmark">이미지 스프라이트 가이드</a></li>
				<li><a href="#summary3" rel="bookmark">이미지 용량 및 크기</a></li>
				<li><a href="#summary4" rel="bookmark">이미지 품질 관리</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>이미지 규칙</dt>
		<dd>이미지 사용 시 지켜야 할 규칙과 비용 최소화를 위한 방안을 중심으로 설명한다.</dd>
		</dl>
	</section>
	<!-- //Image 가이드 설명 -->
	<!-- 이미지 기본 규칙 -->
	<section id="summary1">
		<h3 class="s_tit">이미지 기본 규칙</h3>
		<p class="panel info">다음과 같은 기본 이미지 규칙을 준수한다.</p>

		<h4 class="tit_cont">이미지 스프라이트</h4>
		<p>운영성 이미지 성격이 아닌 아이콘 또는 장식을 위한 이미지 요소들은 스프라이트 기법을 활용하여 파일의 Size, Request 최소화를 도모한다.</p>
		<ul class="lst_type">
		<li>스프라이트는 수직정렬 (vertical)형과 바둑판(tile)형 중 서비스에 따라 선택하여 사용</li>
		<li>수직 정렬형 스프라이트는 개체 수가 늘어남에 따라 공간 또한 늘어나 용량 이슈가 발생하므로 모바일 환경에서는 바둑판형 스프라이트로 진행한다. (비교표 참조)</li>
		<li>각 스프라이트 집합은 타이틀, 버튼, 아이콘, 메뉴(GNB 또는 Tab), 숫자 등 용도별로 나누어 그룹핑</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 이미지 스프라이트 비교 표 ]</caption>
		<thead>
		<tr>
		<th scope="col">이미지</th>
		<th scope="col">바둑판 스프라이트</th>
		<th scope="col">수직정렬 스프라이트</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td><img src="<?php echo PATH; ?>resources/img/sprite_img.gif" width="475" height="165" alt="스프라이트 이미지 타입1"></td>
		<td>299KB</td>
		<td>3.15KB</td>
		</tr>
		<tr>
		<td><img src="<?php echo PATH; ?>resources/img/sprite_img2.gif" width="474" height="165" alt="스프라이트 이미지 타입2"></td>
		<td>2.79KB</td>
		<td>5.07KB</td>
		</tr>
		<tr>
		<td><img src="<?php echo PATH; ?>resources/img/sprite_img3.gif" width="474" height="165" alt="스프라이트 이미지 타입3"></td>
		<td>3.67KB</td>
		<td>9.58KB</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">이미지 타입 선택</h4>
		<table class="tb_grid">
		<caption>[ 프로젝트 종류에 따른 이미지 타입표 ]</caption>
		<thead>
		<tr>
		<th scope="col">종류</th>
		<th scope="col">PC web</th>
		<th scope="col">Mobile Web</th>
		<th scope="col">Mobile App</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>GIF</td>
		<td>기본</td>
		<td>사용 가능</td>
		<td>X</td>
		</tr>
		<tr>
		<td>JPG</td>
		<td>컬러수 많거나 운영성 이미지일 때</td>
		<td>운영성 이미지일 때</td>
		<td>X</td>
		</tr>
		<tr>
		<td>PNG-8</td>
		<td>X</td>
		<td>기본</td>
		<td>반투명효과 없고 컬러가 적을 때</td>
		</tr>
		<tr>
		<td>PNG-24</td>
		<td>반투명효과가 있을 때에만 사용</td>
		<td>컬러 수 많거나 반투명효과가 있을 때</td>
		<td>기본</td>
		</tr>
		<tr>
		<td>이미지 스프라이트</td>
		<td>O</td>
		<td>O</td>
		<td>X</td>
		</tr>
		</tbody>
		</table>
		<dl class="category">
		<dt>PC Web</dt>
		<dd>
			<ul>
			<li>기본 포맷은 GIF를 사용한다.</li>
			<li>JPG는 인물이나 실사 이미지와 같이, 색 변화 및 그라데이션이 풍부한 경우 및 운영성 이미지에 주로 사용한다.</li>
			<li>JPG로 저장 시 압축률 관리
				<ul>
				<li>- 일반 저장 시(File->Save): 압축률 10&frasl;12 이상으로 저장할 것.</li>
				<li>- Save for web 기준: Original 혹은 JPG Quality 90 이상</li>
				</ul>
			</li>
			<li>구형브라우저에서의 PNG 이미지 지원</li>
			</ul>
		</dd>
		<dt>Mobile Web</dt>
		<dd>
			<ul>
			<li>3G망을 이용하는 유저를 고려하여 용량 축소가 중요하다.</li>
			<li>PNG-8 포맷을 기본으로 저장하며, 색상 수가 많거나 반투명 효과가 있으면 PNG-24를 사용한다.</li>
			<li>용량 대비 이미지 품질을 고려하여 포맷을 변경할 수도 있다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //이미지 기본 규칙 -->
	<!-- 이미지 스프라이트 가이드 -->
	<section id="summary2">
		<h3 class="s_tit">이미지 스프라이트 가이드</h3>
		<h4 class="tit_cont">PC Web</h4>
		<dl class="category v2">
		<dt>타이틀 이미지</dt>
		<dd>
			<ul>
			<li>수직 정렬형 이미지에서 각 개체의 기본간격은 50px이나, 높이가 크지 않으면 25px 단위로 줄일 수 있다.</li>
			<li>수직 정렬형은 좌우에 텍스트가 배치되거나 사이즈가 고정이 아니면 적용한다.</li>
			</ul>
			<img src="<?php echo PATH; ?>resources/img/sprite_guide.gif" width="207" height="194" alt="타이틀 스프라이트 이미지 가이드">
		</dd>
		<dt>버튼 이미지</dt>
		<dd>
			<ul>
			<li>바둑판형에서 각 개체의 기본간격은 10px 단위로 한다.</li>
			<li>가로세로 사이즈가 고정일 경우 타일형으로 적용할 수 있다.</li>
			</ul>
			<img src="<?php echo PATH; ?>resources/img/sprite_guide2.gif" width="230" height="150" alt="버튼 스프라이트 이미지 가이드">
		</dd>
		<dt>아이콘 이미지</dt>
		<dd>
			<ul>
			<li>좌측에 배치되는 아이콘은 가장 좌측에, 우측으로 배치되는 아이콘은 가장 우측으로 배치한다.</li>
			</ul>
			<img src="<?php echo PATH; ?>resources/img/sprite_guide3.gif" width="176" height="206" alt="아이콘 스프라이트 이미지 가이드">
		</dd>
		<!--
		<dt>GNB와 Tab 이미지</dt>
		<dd>
			<ul>
			<li>Off 된 상태인 Default 개체가 On 된 상태 바로 위에 있도록 한다.</li>
			</ul>
			<img src="<?php echo PATH; ?>resources/img/sprite_guide4.gif" width="978" height="123" alt="GNB, Tab 이미지 가이드">
		</dd>
		-->
		</dl>

		<h4 class="tit_cont">Mobile Web</h4>
		<div class="panel info">
			<ul>
			<li>모바일은 최근 출시된 고해상도 기기에 또렷한(crispy) 서비스 제공을 위하여 고해상도 이미지 분기 대응한다.</li>
			<li>이외 일반 태그, 즉 일반 콘텐츠 이미지(썸네일등)는 기기 해상도별 분기하기가 어려워 @1.5x(480px) 이미지를 기본으로 사용함</li>
			</ul>
		</div>
		<dl class="category v2">
		<dt>CSS 이미지</dt>
		<dd>
			<ul>
			<li>모바일 고해상도 이미지 대응에 따라 디자인 표현을 위한 image 사용 및 image 폰트(text 표현을 위한 image) 사용을 최소화하며, CSS3 &frasl; 시스템 폰트 활용을 높임</li>
			</ul>
		</dd>
		<dt>프로모션 이미지</dt>
		<dd>
			<ul>
			<li>프로모션 디자인 권장 형태는 &#39;이미지 + 시스템폰트 혼합형&#39; 임</li>
			<li>통이미지 프로모션인 경우 이미지 용량에 따라 320 혹은 480 이미지로 대응 함</li>
			</ul>
		</dd>
		<dt>이미지 처리 프로세스</dt>
		<dd>
			<ol>
			<li>640 PSD 파일을 기준으로 마크업 진행</li>
			<li>640 PSD 기준 이미지 sprite 작업 결과물을 480과 320으로 각각 리사이징 하여 사용
				<ul>
				<li>image의 size는 4의 배수 ex) image size 40px * 120px, 600px * 800px..</li>
				<li>Merge 할 psd에 이미지를 배치할 시 20 * 20 그리드에 배치 한다. 단, shadow 효과가 들어간 이미지는 20 * 20 그리드에 배치하는데 이미지가 시작되는 지점은 4 * 4 그리드에 있도록 배치한다. (아래 그림 참고)</li>
				</ul>
			</li>
			</ol>
			<img src="<?php echo PATH; ?>resources/img/sprite_process_guide.jpg" width="953" height="800" alt="이미지 처리 프로세스 가이드">
		</dd>
		</dl>
	</section>
	<!-- //이미지 스프라이트 가이드 -->
	<!-- 이미지 용량 및 크기 -->
	<section id="summary3">
		<h3 class="s_tit">이미지 용량 및 크기</h3>
		<h4 class="tit_cont">PC Web</h4>
		<ul class="lst_type">
		<li>최대 사이즈 : 가로 1024px X 세로 1024px (모바일환경에서 PC 웹에 접속하였을 때, 다운로드된 이미지의 사이즈가 1024px이 넘어갈 때 해당 이미지가 올바르게 표시되지 않으므로 PC 웹에서 가로/세로 사이즈의 제한을 둔다.)</li>
		</ul>

		<h4 class="tit_cont">Mobile Web</h4>
		<ul class="lst_type">
		<li>CSS image: 스프라이트 된 이미지의 용량이 60KB 를 넘지 않도록 한다.</li>
		<li>promotion image: 스프라이트 된 이미지의 용량이 400KB 를 넘지 않도록 한다.</li>
		</ul>
	</section>
	<!-- //이미지 용량 및 크기 -->
	<!-- 이미지 품질 관리 -->
	<section id="summary4">
		<h3 class="s_tit">이미지 품질 관리</h3>
		<div class="panel info">
			<strong>JPG로 저장시 압축률</strong>
			<ul>
			<li>압축률 10&frasl;12 이상으로 저장할 것.(일반저장 시, File->Save (As))</li>
			<li>save for web 기준 original 혹은 JPG Quality 80 이상</li>
			</ul>
			<p>PNG로 저장시 이미지 Optimizing Tool을 통해 반드시 압축하여 저장</p>
		</div>

		<h4 class="tit_cont">이미지 최적화</h4>
		<ul class="lst_type">
		<li>이미지 최적화 툴을 이용하여 이미지 압축을 진행한다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 이미지 최적화 테스트 결과 사례 ]</caption>
		<thead>
		<tr>
		<th scope="col">이미지 종류</th>
		<th scope="col">파일 사이즈</th>
		<th scope="col">기존 용량(Byte)</th>
		<th scope="col">Filter 후</th>
		<th scope="col">압축률</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>logo.png</td>
		<td>320px 이미지</td>
		<td>867</td>
		<td>846</td>
		<td>약 3%</td>
		</tr>
		<tr>
		<td>ico_all_v1.png</td>
		<td>320px 이미지</td>
		<td>1,703</td>
		<td>1,650</td>
		<td>약 4%</td>
		</tr>
		<tr>
		<td>ico_service1_v1.png</td>
		<td>320px 이미지</td>
		<td>5,299</td>
		<td>4,901</td>
		<td>약 8%</td>
		</tr>
		<tr>
		<td>ico_weather_v1.png</td>
		<td>320px 이미지</td>
		<td>3,832</td>
		<td>3,523</td>
		<td>약 9%</td>
		</tr>
		<tr>
		<td>topbar_v1.png</td>
		<td>320px 이미지</td>
		<td>337</td>
		<td>321</td>
		<td>약 5%</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //이미지 품질 관리 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>