<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>HTML Convention : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- CSS 가이드 -->
	<section>
		<h1 class="s_tit">CSS Convention</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">CSS 컨벤션 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">CSS 코드 기본 규칙</a></li>
				<li><a href="#summary2" rel="bookmark">들여쓰기</a></li>
				<li><a href="#summary3" rel="bookmark">공백</a></li>
				<li><a href="#summary4" rel="bookmark">주석</a></li>
				<li><a href="#summary5" rel="bookmark">빈 줄</a></li>
				<li><a href="#summary6" rel="bookmark">줄 바꿈</a></li>
				<li><a href="#summary7" rel="bookmark">선택자</a></li>
				<li><a href="#summary8" rel="bookmark">속성 선언 순서</a></li>
				<li><a href="#summary9" rel="bookmark">z-index</a></li>
				<li><a href="#summary10" rel="bookmark">important</a></li>
				<li><a href="#summary11" rel="bookmark">핵</a></li>
				<li><a href="#summary12" rel="bookmark">미디어 타입</a></li>
				<li><a href="#summary13" rel="bookmark">초기 스타일시트</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>CSS 코드 작성 규칙</dt>
		<dd>CSS 코드의 기본 작성 규칙과 인코딩 선언방법, 선택자, 속성 등의 작성 규칙, 파일 분기 방법을 설명한다.</dd>
		</dl>
	</section>
	<!-- //CSS 가이드 -->
	<!-- CSS 기본 규칙 -->
	<section id="summary1">
		<h3 class="s_tit">CSS 코드 기본 규칙</h3>
		<p class="panel info">CSS 코드를 작성할 때 다음과 같은 기본 규칙을 준수한다.</p>

		<h4 class="tit_cont">W3C Validation</h4>
		<p>모바일에서 CSS는 사용 가능한 핵(hack)과 CSS3 속성을 제외하고는 W3C Validation을 통과해야 한다.</p>

		<h4 class="tit_cont">CSS 로드</h4>
		<ul class="lst_type">
		<li>CSS 데이터를 로딩할 경우 @import 방식은 사용하지 않는다. (일부 브라우저에서 이미지 로딩 후 적용되는 이슈 등이 있다.)</li>
		<li>External방식에서는 인코딩 선언인 charset은 반드시 표기한다.</li>
		</ul>

		<h4 class="tit_cont">인코딩</h4>
		<p>글꼴 이름이 영문이 아닐 때 브라우저에서 컨텐츠를 바르게 표시하고, HTML에서 불러온 스타일을 제대로 렌더링 하려면 반드시 CSS 인코딩을 선언해야 한다. HTML과 동일한 인코딩을 문서 첫줄에 공백 없이 선언한다.</p>
		<pre class="brush:html">@charset "utf-8"</pre>
		<p class="panel alert">파일을 저장할 때는 반드시 선언한 인코딩과 동일한 인코딩을 선택한다.</p>

		<h4 class="tit_cont">영문 소문자 사용</h4>
		<p>모든 속성은 영문 소문자로만 작성한다.</p>
		<table class="tb_grid">
		<caption>[ 소문자 작성 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>.class{Font-Family:AppleGothic}</td>
		<td>.class{font-family:AppleGothic}</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">따옴표 사용 범위</h4>
		<p class="panel info">공백이 포함된 글꼴 이름, 한글 글꼴 이름, &lt;strong&gt; 데이터 타입, filter 속성의 파라미터 값은 작은 따옴표(&#39;&#39;)로 감싸고, @charset 을 선언할 때는 속성값을 큰 따옴표(&#34;&#34;)로 감싼다. 그 외의 경우에는 따옴표를 사용하지 않는다. filter 속성의 파라미터값에 따옴표를 사용하는 것은 선택 사항이다.</p>
		<p>&lt;url&gt; 데이터 타입에서는 작은 따옴표를 사용하지 않는다.</p>
		<table class="tb_grid">
		<caption>[ 따옴표 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>font-family:돋움;</td>
		<td>font-family:'돋움'</td>
		</tr>
		<tr>
		<td>filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="bg.png",sizingMethod="scale")</td>
		<td>filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='bg.png',sizingMethod='scale')</td>
		</tr>
		<tr>
		<td>background:url('bg.gif') no-repeat</td>
		<td>background:url(bg.gif) no-repeat</td>
		</tr>
		<tr>
		<td>content:"Chapter"</td>
		<td>content:'Chapter'</td>
		</tr>
		<tr>
		<td>@chaset 'utf-8'</td>
		<td>@chaset "utf-8"</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">마지막 세미클론 사용 지양</h4>
		<p>마지막 속성의 세미클론(;)은 삭제한다.</p>
		<table class="tb_grid">
		<caption>[ 마지막 세미클론 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>.class{font-size:12px;color:#333;}</td>
		<td>.class{font-size:12px;color:#333}</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //CSS 기본 규칙 -->
	<!-- 들여쓰기 -->
	<section id="summary2">
		<h3 class="s_tit">들여쓰기</h3>
		<p class="panel info">CSS 파일의 용량이 커지지 않도록 CSS 코드를 작성할 때는 들여쓰기를 하지 않는다.</p>
		<table class="tb_grid">
		<caption>[ 마지막 세미클론 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			#content{border:1px solid #ccc}<br>
			&nbsp;&nbsp;&nbsp;&nbsp;#content .class{color:#f00}
		</td>
		<td>
			#content{border:1px solid #ccc}<br>
			#content .class{color:#f00}
		</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //들여쓰기 -->
	<!-- //공백 -->
	<section id="summary3">
		<h3 class="s_tit">공백</h3>
		<p class="panel info">CSS 파일의 용량이 커지지 않도록 불필요한 공백을 최소화한다.</p>

		<h4 class="tit_cont">선택자 간 공백 제거</h4>
		<p>쉼표로 구분되는 선택자 간 공백은 제거한다.</p>
		<table class="tb_grid">
		<caption>[ 선택자 간 공백 제거 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>a:hover, a:active, a:focus{text-decoration:underline}</td>
		<td>a:hover,a:active,a:focus{text-decoration:underline}</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">속성 간 공백 제거</h4>
		<p>속성 간 공백 및 속성값 사이 공백은 제거한다.</p>
		<table class="tb_grid">
		<caption>[ 속성 간 공백 제거 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>.class p{color:#333; line-height:16px}</td>
		<td>.class p{color:#333;line-height:16px}</td>
		</tr>
		<tr>
		<td>.class a{font-size:13px ;background-color:#eee}</td>
		<td>.class a{font-size:13px;background-color:#eee}</td>
		</tr>
		<tr>
		<td>body{font-family:'돋움', dotum}</td>
		<td>body{font-family:'돋움',dotum}</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">중괄호 좌우 공백 제거</h4>
		<p>중괄호의 좌우 공백은 제거한다.</p>
		<table class="tb_grid">
		<caption>[ 중괄호 좌우 공백 제거 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>.class p {color:#000}</td>
		<td>.class p{color:#000}</td>
		</tr>
		<tr>
		<td>.class p{ color:#000; line-height:18px }</td>
		<td>.class p{color:#000;line-height:18px}</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //공백 -->
	<!-- 주석 -->
	<section id="summary4">
		<h3 class="s_tit">주석</h3>
		<h4 class="tit_cont">기본 형식</h4>
		<p class="panel info">CSS 주석은 다음과 같이 표기하며, 기본 형식에 맞게 작성한다.</p>
		<pre class="brush:html">
			/* =주석내용 */ (한글일 경우)

			/* =List Type */ (영문일 경우)
		</pre>
		<ul class="lst_type">
		<li>주석 기호와 주석 사이에는 반드시 공백 한 칸이 있어야 한다.</li>
		<li>주석 기호와 주석 내용 사이의 줄 바꿈은 허용하지 않는다. 단, 주석 내용 간 줄바꿈은 허용한다.</li>
		<li>종료 주석은 사용하지 않는다.</li>
		<li>주석 작성시 접두어(prifix)로 = 기호를 표기해서 작성한다.</li>
		<li>주석을 영문으로 작성할때는 카멜 표기법으로 작성한다.</li>
		</ul>
		<p class="panel info">유지보수 시 추가 및 수정이 되어 주석을 기입하는 경우 해당 수정날짜(YYMMDD 형식)로 시작하며, 한 줄일 경우 해당 선언 마지막 뒤에 표시한다.</p>
		<pre class="brush:html">
			/* =130625 GNB 수정 */
			.gnb_comm {overflow:hidden;width:978px;clear:both}
			.gnb_comm li {float:left;height:38px}
			.gnb_comm .menu {display:block;overflow:hidden;height:38px}
			.gnb_comm .home {width:79px}
			.gnb_comm .roadmap {width:98px}
			.gnb_comm .on .menu {margin:0 -1px}

			.news .on .menu {margin:0 -1px} /* =130625 수정 */
		</pre>
		<p class="panel alert">
			<strong>주의:</strong>
			마크업과 개발의 편의를 위해 작성한 주석 및 불필요한 주석은 실제 서비스를 적용할 때 반드시 삭제한다. 단, 작성자 정보는 삭제하지 않는다.
		</p>

		<h4 class="tit_cont">작성자 정보 표기</h4>
		<p class="panel info">작성자 정보에는 소속 부서, 영문 이름 이니셜, CSS 파일 생성 날짜(YYMMDD 형식)를 작성하며, 유지보수만 담당하는 경우라도 모두 기입한다. 작성자 정보 및에는 빈줄을 한 둘 둬서 스타일을 선언한 문장돠 구분되게 한다.</p>

		<pre class="brush:html">
			/* BlueWaves Web Standard Group JSW 130628, HSJ 130707 */

			/* =Reset */
			...
		</pre>
		<p class="panel alert">
			<strong>참고:</strong>
			작성자 정보 주석일 경우에는 접두어(prifix) = 기호를 작성하지 않는다.
		</p>
	</section>
	<!-- //주석 -->
	<!-- //빈 줄 -->
	<section id="summary5">
		<h3 class="s_tit">빈 줄</h3>
		<p class="panel info">의미 있는 객체를 구분할 목적으로 코드 그룹 사이에 빈 줄을 넣을 수 있다. 단, 빈 줄은 한 줄을 넘지 않게 한다. 빈줄의 사용은 선택 사항이다.</p>
		<table class="tb_grid" style="width:800px">
		<caption>[ 빈 줄 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			<pre class="brush:html">
				&lt;style type="text/css"&gt;
				/* =의미 있는 그룹1 */
				.class1{border:1px solid #000}
				.class1 img{vertical-align:top}


				/* =의미 있는 그룹1 */
				.class2{border:1px solid #000}
				.class2 img{vertical-align:top}
				&lt;/style&gt;
			</pre>
		</td>
		<td>
			<pre class="brush:html">
				&lt;style type="text/css"&gt;
				/* =의미 있는 그룹1 */
				.class1{border:1px solid #000}
				.class1 img{vertical-align:top}

				/* =의미 있는 그룹1 */
				.class2{border:1px solid #000}
				.class2 img{vertical-align:top}
				&lt;/style&gt;
			</pre>
		</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //빈 줄 -->
	<!-- //줄 바꿈 -->
	<section id="summary6">
		<h3 class="s_tit">줄 바꿈</h3>
		<p class="panel info">선택자와 속성, 속성값 사이 줄 바꿈은 허용하지 않는다.</p>
		<table class="tb_grid" style="width:910px">
		<caption>[ 줄 바꿈 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			<pre class="brush:html">
				&lt;style type="text/css"&gt;
				.class,
				.class2,
				.class3{
					width:
						100px;
					color:
						#999;
					letter-sapcing:-1px
				}
				&lt;/style&gt;
			</pre>
		</td>
		<td>
			<pre class="brush:html">
				&lt;style type="text/css"&gt;
				.class,.class2,.class3{width:100px;color:#999;letter-sapcing:-1px}
				&lt;/style&gt;
			</pre>
		</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //줄 바꿈 -->
	<!-- 선택자 -->
	<section id="summary7">
		<h3 class="s_tit">선택자</h3>
		<h4 class="tit_cont">공통 선택자 사용 지양</h4>
		<p>공통 선택자(*)는 웹페이지의 성능을 떨어뜨리고, 인터넷 익스플로러에서는 주석에도 영향을 줄 수 있으므로 사용하지 않는다.</p>
		<p class="panel alert">단, 모바일 이나 익스플로러9 이상, 기타 최신 브라우저에서만 코드를 사용한다면 공통 선택자(*)의 사용이 가능하다.</p>


		<h4 class="tit_cont">아이디 선택자 범위</h4>
		<p>아이디 선택자는 &#34;아이디 및 클래스 네이밍 규칙&#34;에서 정의한 레이아웃(wrap. header, container, content, footer)에만 사용한다.</p>

		<h4 class="tit_cont">교차 속성 사용</h4>
		<p>코드 확장 개념으로 아이디와 클래스, 클래스와 클래스 간 교차 속성을 사용할 수 있다.</p>
		<pre class="brush:html">
			&lt;style type="text/css"&gt;
			.class{width:980px}
			.class.bg{background-color:#0f0}
			.class.bg.v1{background-color:#00f}
			&lt;/style&gt;
		</pre>
		<div class="panel alert">
			<strong>참고:</strong>
			교차속성이란 두 선택자의 조합에 의해 속성이 부여되는 경우를 의미한다.
			<p>인터넷 익스플로러6 브라우저 환경에서 교차속성을 사용하면 두 번째 선언된 교차 속성을 무시하고, 클래스와 클래스 간의 교차속성을 잘못 해석하는 버그가 있다. 인터넷 익스플로러6 브라우저 버전까지 고려해야 한다면 이와 같은 오류를 방지하기 위해 교차속성을 사용하지 않는다.</p>
			<p>교차속성을 사용하지 않으면 한가지 장점은 코드의 양을 줄이고 각 클래스 사이의 독립성을 유지할 수 있다.</p>
		</div>
	</section>
	<!-- //선택자 -->
	<!-- 속성 선언 순서 -->
	<section id="summary8">
		<h3 class="s_tit">속성 선언 순서</h3>
		<h4 class="tit_cont">공통 선택자 사용 지양</h4>
		<p>속성은 레이아웃과 관련이 큰 것부터 선언한다. 관련 속성은 대표되는 속성 다음으로 선언하며, 다음 표에 표기된 순서대로 선언한다.</p>
		<table class="tb_grid">
		<caption>[ 속성 선언 순서 ]</caption>
		<thead>
		<tr>
		<th scope="col">순서</th>
		<th scope="col">의미</th>
		<th scope="col">대표되는 속성(그룹)</th>
		<th scope="col">관련 속성</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>표시</td>
		<td>display</td>
		<td>visibility</td>
		</tr>
		<tr>
		<td>2</td>
		<td>넘침</td>
		<td>overflow</td>
		<td>-</td>
		</tr>
		<tr>
		<td>3</td>
		<td>흐름</td>
		<td>float</td>
		<td>clear</td>
		</tr>
		<tr>
		<td>4</td>
		<td>위치</td>
		<td>position</td>
		<td>top, right, bottom, left, z-index</td>
		</tr>
		<tr>
		<td>5</td>
		<td>크기</td>
		<td>width & height</td>
		<td>-</td>
		</tr>
		<tr>
		<td>6</td>
		<td>간격</td>
		<td>margin & padding (그룹)</td>
		<td>-</td>
		</tr>
		<tr>
		<td>7</td>
		<td>테두리</td>
		<td>border (그룹)</td>
		<td>-</td>
		</tr>
		<tr>
		<td>8</td>
		<td>배경</td>
		<td>background (그룹)</td>
		<td>-</td>
		</tr>
		<tr>
		<td>9</td>
		<td>글꼴</td>
		<td>font (그룹)</td>
		<td>color, letter-spacing, text-align, text-decoration, text-indent, vertical-align, white-space 등</td>
		</tr>
		<tr>
		<td>10</td>
		<td>동작</td>
		<td>animation</td>
		<td>animation, transform, transition, marquee 등</td>
		</tr>
		<tr>
		<td>11</td>
		<td>기타</td>
		<td>-</td>
		<td>위에 언급 되지 않은 나머지 속성, 글꼴 관련 속성 이후에 선언하며 기타 속성 내의 선언 순서는 무관함.</td>
		</tr>
		</tbody>
		</table>
		<div class="panel info">
			<dl class="category">
			<dt>속성 선언 순서 기준</dt>
			<dd>
				<ul>
				<li>1~6: 레이아웃</li>
				<li>7~8: 테두리&frasl;배경</li>
				<li>9: 글꼴</li>
				<li>10: 동작</li>
				<li>11: 기타</li>
				</ul>
			</dd>
			</dl>
		</div>

		<p>대표되는 속성 중 (그룹)으로 표기된 것은 약식 속성으로, 약식속성을 선언했을때 속성값의 순서와 동일하게 전체 속성을 선언한다. 다음 표의 선언 순서를 참고한다.</p>
		<table class="tb_grid" style="width:850px">
		<caption>[ 약식 속성의 전체 속성 선언 순서 ]</caption>
		<thead>
		<tr>
		<th scope="col">약식 속성</th>
		<th scope="col">전체 속성 선언 순서</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>margin</td>
		<td>margin-top, margin-right, margin-bottom, margin-left</td>
		</tr>
		<tr>
		<td>padding</td>
		<td>padding-top, padding-right, padding-bottom, padding-left</td>
		</tr>
		<tr>
		<td>border</td>
		<td>border-top, border-right, border-bottom, border-left, border-width, border-top-width, border-right-width, border-bottom-width, border-left-width, border-style, border-top-style, border-right-style, border-bottom-style, border-left-style, border-color, border-top-color, border-right-color, border-right-color, border-bottom-color, border-left-color, border-image, border-radius, border-collapse, border-spacing</td>
		</tr>
		<tr>
		<td>background</td>
		<td>background-color, background-image, background-repeat, background-position, background-size, background-attachment, background-origin, background-clip</td>
		</tr>
		<tr>
		<td>font</td>
		<td>font-style, font-variant, font-weight, font-size, font-family, line-height</td>
		</tr>
		<tr>
		<td>animation</td>
		<td>animation-name, animation-duration, animation-timing-function, animation-delay, animation-iteration-count, animation-direction</td>
		</tr>
		<tr>
		<td>transition</td>
		<td>transition-property, transition-duration, transition-timing-function, transition-delay</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">속성값 축약</h4>
		<p>CSS 최적화를 위해 다음과 같이 속성값을 축약한다.</p>
		<table class="tb_grid" style="width:920px">
		<caption>[ 속성값 축약 예 ]</caption>
		<colgroup>
		<col style="width:30%">
		<col style="width:30%">
		<col style="width:40%">
		</colgroup>
		<thead>
		<tr>
		<th scope="col">축약 전</th>
		<th scope="col">축약 후</th>
		<th scope="col">설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>#555555</td>
		<td>#555</td>
		<td rowspan="2">
			<strong>16진수 컬러 코드값</strong>
			<p>동일한 값으로 이루어진 16진수 컬러 코드값은 세 자릿수로 축약해서 사용한다. 단, 인터넷 익스플로러 전용 속성인 CSS filter를 사용하면 축약 속성을 인식 못하는 오류가 있으므로 filter 컬러 코드값의 속성값은 축약하지 않는다.</p>
		</td>
		</tr>
		<tr>
		<td>#ff6600</td>
		<td>#f60</td>
		</tr>
		<tr>
		<td>background-position:left center</td>
		<td>background-position:0 50%</td>
		<td>
			<strong>위치값</strong>
			<p>문자로 표현한 위치값은 숫자로 변경한다.</p>
		</td>
		</tr>
		<tr>
		<td>top:0px</td>
		<td>top:0</td>
		<td>
			<strong>0 단위</strong>
			<p>속성값이 0이면 단위를 표시하지 않는다.</p>
		</td>
		</tr>
		<tr>
		<td>padding:20px 20px 20px 20px</td>
		<td>padding:20px</td>
		<td rowspan="4">
			<strong>동일한 속성값</strong>
			<p>상, 우, 하, 좌의 속성값이 동일하면 축약한다.</p>
		</td>
		</tr>
		<tr>
		<td>margin:0 auto 0 auto</td>
		<td>margin:0 auto</td>
		</tr>
		<tr>
		<td>padding:20px 30px 50px 30px</td>
		<td>padding:20px 30px 50px</td>
		</tr>
		<tr>
		<td>border-color:#ccc #eee #ccc #eee</td>
		<td>border-color:#ccc #eee</td>
		</tr>
		</tbody>
		</table>
		<div class="panel alert">
			<strong>참고:</strong>
			문자로 표현된 위치값을 숫자로 변환할 때 다음과 같이 한다.
			<ul class="lst_type">
			<li>top, left: 0</li>
			<li>right, bottom: 100%</li>
			</ul>
		</div>

		<h4 class="tit_cont">약식 속성 사용 범위</h4>
		<p>border와 background는 약식 속성을 우선적으로 사용하고, font 약식 속성은 사용하지 않는다.</p>
		<dl class="category v2">
		<dt>border</dt>
		<dd>
			속성값은 border-width, border-style, border-color 순으로 선언한다. 테두리 스타일 속성을 초기 선언할 때는 반드시 border 단일 속성을 사용하고, 이후 테두리의 부분적인 속성이 변경되면 border 관련 속성(border-width, border-style, border-color)을 선언한다.
			<pre class="brush:html">
				.class{border:1px solid #ccc}
				.class_v1{border-color:#666}
				.class_v2{border-style:dotted}

				.class2{border-top:1px solid #ccc}
				.class2_v1{border-top-color:#666}
				.class2_v2{border-top-style:dotted}
			</pre>
			테두리의 상, 우, 하, 좌 스타일이 2개이상 다르면 공통 스타일을 약식 속성으로 선언한 후 다른 부분은 관련 속성으로 선언한다.
		</dd>
		<dt>background</dt>
		<dd>
			속성값은 background-color, background-image, background-repeat, background-position, background-size, background-attachment, background-origin, background-clip 순서로 선언한다. 배경 스타일 속성을 초기 선언할 때는 반드시 background 단일 속성을 사용하고, 이후 배경의 부분적인 속성이 변경되면 background 관련속성(background-color, background-image, background-repeat, background-position, background-size, background-attachment, background-origin, background-clip)을 선언한다.
			<pre class="brush:html">
				.class{background:#ccc url(bg.gif) no-repeat}
				.class_v1{backgrond-position:0 -50px}
				.class_v2{backgrond-position:0 -100px}
			</pre>
			<table class="tb_grid">
			<caption>[ 테두리 스타일이 2개 이상 다를 경우 약식 속성 선언의 예 ]</caption>
			<thead>
			<tr>
			<th scope="col">잘못된 예</th>
			<th scope="col">올바른 예</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<td>.class{border:1px solid #ddd;border-bottom:1px solid #eee;border-left:1px solid #eee}</td>
			<td>.class{border:1px solid;border-color:#ddd #eee #eee}</td>
			</tr>
			<tr>
			<td>.class{border-top:1px solid #ddd;border-right:1px dotted #ddd;border-bottom:1px solid #eee;border-left:1px dotted #eee}</td>
			<td>.class{border:1px;solid-style:solid dotted;border-color:#ddd #ddd #eee #eee}</td>
			</tr>
			</tbody>
			</table>
		</dd>
		<dt>font</dt>
		<dd>
			글꼴 스타일 선언시 font-style &gt; font-variant &gt; font-weight &gt; font-size &gt; line-height &gt; font-family 순서로 선언하며, 약식 속성으로 선언하지 않는다. 예를 들어 다음과 같이 약식 속성으로 선언하면 font-weight:bold는 상속되지 않고 font 속성의 기본값인 font-weight:normal로 변경되기 때문에 불필요한 속성값을 선언해야 하는 문제가 있다.
			<pre class="brush:html">
				.class{font-weight:bold;font-size:12px;font-family:dotum}
				.class p{font:15px gulim}
			</pre>
		</dd>
		<dd>
			결국, .class p의 글꼴 스타일은 다음과 같아진다.
			<pre class="brush:html">.class{font-family:gulim;font-style:normal;font-variant:normal;font-weight:normal;font-size:15px;line-height:normal}</pre>
		</dd>
		</dl>

		<h4 class="tit_cont">한글 글꼴 선언</h4>
		<p>한글 글꼴을 선언할 때 한글이나 영문 이름 중 하나로만 표기하면 특정 브라우저에서 글꼴을 올바르게 출력하지 못하는 경우가 있으므로 반드시 한글과 영문 이름을 모두 선언한다.</p>
		<table class="tb_grid">
		<caption>[ 글꼴 선언 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td rowspan="2">font-family:&#39돋움&#39</td>
		<td>font-family:&#39돋움&#39,dotum</td>
		</tr>
		<tr>
		<td>font-family:dotum</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //속성 선언 순서 -->
	<!-- z-index -->
	<section id="summary9">
		<h3 class="s_tit">z-index</h3>
		<div class="panel info">
			<ul class="lst_type">
			<li>z-index 속성값의 수치 간격은 10 단위로 증감한다.</li>
			<li>z-index 속성값의 최소범위(기본값)는 10 으로 지정한다.</li>
			<li>z-index 속성값의 최고범위 1000 까지 사용할 수 있다.</li>
			<li>팝업레이어의 경우는 z-index 속성값 1000부터 시작한다.</li>
			</ul>
		</div>
		<p class="panel alert">단, 10 단위 사이의 예외 변수가 발생하면 1 단위값을 지정할 수 있다.</p>
	</section>
	<!-- //z-index -->
	<!-- Important 필터 -->
	<section id="summary10">
		<h3 class="s_tit">important</h3>
		<p class="panel alert">!important 필터는 사용시 유지보수 시 문제나 렌더링 이슈가 있으므로 최대한 자제해서 사용한다.</p>
	</section>
	<!-- //Important 필터 -->
	<!-- 핵 필터 -->
	<section id="summary11">
		<h3 class="s_tit">핵</h3>
		<p class="panel info">핵(hack)을 사용해야 할 경우에는 다음 표에 제시된 핵을 사용할 수 있다.</p>
		<table class="tb_grid">
		<caption>[ 사용 가능한 브라우저 핵 ]</caption>
		<thead>
		<tr>
		<th scope="col">브라우저</th>
		<th colspan="3" scope="col">표준 DTD</th>
		<th colspan="3" scope="col">쿼크모드</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>인테넷 익스플로러6</td>
		<td rowspan="2">S{*P:V}</td>
		<td>S{_P:V}</td>
		<td>&nbsp;</td>
		<td rowspan="3">S{_P:V}</td>
		<td>&nbsp;</td>
		<td rowspan="3">&nbsp;</td>
		</tr>
		<tr>
		<td>인테넷 익스플로러7</td>
		<td>S,x:-moz-any-link,x:default{P:V}</td>
		<td>*+html S{P:V}</td>
		<td>S,x:-moz-any-link,x:default{P:V}</td>
		</tr>
		<tr>
		<td>인테넷 익스플로러8</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td rowspan="3">&nbsp;</td>
		</tr>
		<tr>
		<td>인테넷 익스플로러9</td>
		<td rowspan="4">:root S{P:V}</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td rowspan="4">:root S{P:V}</td>
		</tr>
		<tr>
		<td>파이어폭스</td>
		<td>S,x:-moz-any-link,x:default{P:V}</td>
		<td rowspan="3">&nbsp;</td>
		<td rowspan="3">&nbsp;</td>
		</tr>
		<tr>
		<td>크롬&frasl;'사파리</td>
		<td rowspan="2">&nbsp;</td>
		<td rowspan="2">&nbsp;</td>
		</tr>
		<tr>
		<td>오페라</td>
		</tr>
		</tbody>
		</table>
		<p class="panel alert">핵(hack)은 가능한 사용하지 않는다. 불가피하게 사용해야 할 경우에만 제시된 핵을 사용하는 것을 원칙으로한다.</p>
		<p>브라우저 핵(hack)에 대한 자세한 사항은 <a href="<?php echo BLOG_PATH; ?>archives/1110" target="_blank">참조 문서</a>에서 확인할 수 있다.</p>
	</section>
	<!-- //핵 필터 -->
	<!-- 미디어 타입 -->
	<section id="summary12">
		<h3 class="s_tit">미디어 타입</h3>
		<p class="panel info">미디어 타입 선언을 위한 명령문(중괄호 포함)은 다음과 같이 세부 스타일을 지정하는 명령문과 줄로 구분한다. 인쇄를 위한 미디어 타입은 기본 CSS파일의 가장 아랫부분에 선언하며 별도의 CSS생성은 허용하지 않는다.</p>
		<pre class="brush:html">
			...
			...
			/* =For Print */
			@media print{
			#header,.snb,.aside{display:none}
			}
		</pre>
		<div class="panel alert">
			<strong>참고:</strong>
			미디어 타입은 각종 미디어(프린트, 모바일, 보조공학기기 등)에 대응하는 별도의 CSS 코드를 작성할 수 있게 한다. CSS2.1 명세(Sprecification)에 따라 대응 가능한 미디어 타입은 다음과 같으며, 가장 범용적으로 사용하는 타입은 print 타입이다.
			<ul class="lst_type">
			<li>all(모든 출력 장치)</li>
			<li>aural(음성 출력)</li>
			<li>braille(점자 출력)</li>
			<li>handheld(포켓, 모바일)</li>
			<li>print(인쇄)</li>
			<li>projection(투사 장치)</li>
			</ul>
		</div>
	</section>
	<!-- //미디어 타입 -->
	<!-- 초기 스타일시트 -->
	<section id="summary13">
		<h3 class="s_tit">초기 스타일시트</h3>
		<p class="panel info">크로스브라우징을 위해 각 태그관련 속성을 초기화 시켜주는 CSS로 PC와 Mobile에서의 환경을 고려하여 각각 초기 스타일 시트 파일을 사용한다. 각 프로젝트나 서비스 개편시 해당 문서를 활용하여 초기화시켜준다. 그리고 기능적으로 공통적으로 자주 사용되는 속성은 Global Class로 정의하여 선택적으로 사용한다.</p>

		<h4 class="tit_cont">PC - CSS 초기 문서</h4>
		<pre class="brush:html">
			@charset "utf-8";
			/* BlueWaves Web Standard Group JSW 130628 */

			/* =Common */
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,textarea,p,blockquote,th,td,input,select,textarea,button{margin:0;padding:0}
			fieldset,img{border:0 none}
			dl,ul,ol,menu,li{list-style:none}
			blockquote,q{quotes: none}
			blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
			input,select,textarea,button{vertical-align:middle}
			button{border:0 none;background-color:transparent;cursor:pointer}
			body{background:#fff}
			body,th,td,input,select,textarea,button{font-size:12px;line-height:1.5;font-family:'돋움',dotum,sans-serif;color:#333} /* color값은 디자인가이드에 맞게사용 */
			a{color:#333;text-decoration:none}
			a:active,a:hover{text-decoration:underline}
			address,caption,cite,code,dfn,em,var{font-style:normal;font-weight:normal}
		</pre>

		<h4 class="tit_cont">Mobile - CSS 초기 문서</h4>
		<pre class="brush:html">
			@charset "utf-8";
			/* BlueWaves Web Standard Group JSW 130628 */

			/* =Common */
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,textarea,p,blockquote,th,td,input,select,textarea,button{margin:0;padding:0}
			fieldset,img{border:0 none}
			dl,ul,ol,menu,li{list-style:none}
			blockquote,q{quotes:none}
			blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
			input,select,textarea,button{font-size:100%;vertical-align:middle}
			button{border:0 none;background-color:transparent;cursor:pointer}
			table{border-collapse:collapse;border-spacing:0}
			body{-webkit-text-size-adjust:none} /* 뷰표트 변환시 폰트크기 자동확대 방지 */
			input[type=text],input[type=password],input[type=submit],input[type=search]{-webkit-appearance:none;border-radius:0}
			input:checked[type=checkbox]{background-color:#666;-webkit-appearance:checkbox}
			button,input[type=button],input[type=submit],input[type=reset],input[type=file]{-webkit-appearance:button;border-radius:0}
			input[type=search]::-webkit-search-cancel-button{-webkit-appearance:none}
			body{background-color:#fff}
			body,th,td,input,select,textarea,button{font-size:14px;line-height:1.5;font-family:'Malgun Gothic','맑은 고딕',sans-serif;color:#333} /* color값은 디자인가이드에 맞게사용 */
			a{color:#333;text-decoration:none}
			a:active,a:hover{text-decoration:none}
			address,caption,cite,code,dfn,em,var{font-style:normal;font-weight:normal}
		</pre>

		<h4 class="tit_cont">PC&frasl;Mobile - Global Class (선택적 사용)</h4>
		<pre class="brush:html">
			/* =Set Class */
			#skipNav{overflow:hidden;position:absolute;left:-9999px;width:0;height:1px;margin:0;padding:0} /* 스킵네비게이션 */
			.ir_pm{display:block;overflow:hidden;font-size:0px;line-height:0;text-indent:-9999px} /* 사용된 이미지내 의미있는 텍스트의 대체텍스트를 제공할때 */
			.ir_wa{display:block;overflow:hidden;position:relative;z-index:-10;width:100%;height:100%} /* 중요한 이미지 대체텍스트로 이미지off시에도 대체 텍스트를 보여주고자 할때 */
			.screen_out{display:block;overflow:hidden;position:absolute;left:-9999px;width:1px;height:1px;font-size:0;line-height:0;text-indent:-9999px} /* 대체텍스트가 아닌 접근성을 위한 숨김텍스트를 제공할때 */
			.screen_hide{font-size:0;line-height:0;visibility:hidden} /* screen_out클래스를 사용할 수 없으며, 해당 텍스트를 숨겨야 할때 */
			.show{display:block}
			.hide{display:none}
			.fl{float:left}
			.fr{float:right}
			.clb{width:0;height:0;font-size:0;line-height:0;clear:both}
			.tbl{border-collapse:collapse;border-spacing:0}
		</pre>
		<p class="panel alert">
			<strong>참고:</strong>
			각 프로젝트나 작업시 상황에 따라 CSS 초기 문서는 약간씩 변경해서 사용될 수 있다.
		</p>
	</section>
	<!-- //초기 스타일시트 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>