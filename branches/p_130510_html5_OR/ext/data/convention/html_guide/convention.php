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
	<!-- HTML 가이드 -->
	<section>
		<h2 class="s_tit">HTML Convention</h2>
		<div id="docSummary" class="idx_summary on">
			<a href="#none" class="btn_lst view">목차보기</a>
			<div class="inner" style="display:none">
				<strong class="blind">색인</strong>
				<ul>
				<li><a href="#summary1" rel="bookmark">DOCTYPE</a></li>
				<li><a href="#summary2" rel="bookmark">문서 제목</a></li>
				<li><a href="#summary3" rel="bookmark">Layout Guide</a></li>
				<li><a href="#summary4" rel="bookmark">색인</a></li>
				<li><a href="#summary5" rel="bookmark">주석표기</a></li>
				<li><a href="#summary6" rel="bookmark">들여쓰기</a></li>
				<li><a href="#summary7" rel="bookmark">Attribute 우선순위</a></li>
				<li><a href="#summary8" rel="bookmark">Link target</a></li>
				<li><a href="#summary9" rel="bookmark">Table</a></li>
				<li><a href="#summary10" rel="bookmark">기타 참고사항</a></li>
				</ul>
				<a href="#none" class="btn_lst clse">목차닫기</a>
			</div>
		</div>

		<dl class="definition">
		<dt>DOCTYPE</dt>
		<dd>문서타입에 (X)HTML의 버전과 문서형을 지정하는데, 타입은 HTML 4.01, 하위 브라우져 호환성을 위해 Transitional 모드를 권장하고 있다. (Transition 모드를 사용하더라도, 웹표준 준수율의 향상을 위해 가급적 Strict 모드의 문법을 사용하는 것을 권장함) 시스템 식별자를 명시하여 Standards 모드 방식으로 지원해야 하나 예외적으로 메일, 개별카페, 개별블로그 등의 UCC영역에 해당하는 서비스는 과거 비표준 태그 허용을 위해 Quirks 모드로 지원할 수 있다.</dd>
		</dl>

		<p>HTML4.01 권장</p>
		<pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"&gt;</pre>

		<p>XHTML1.0</p>
		<pre class="brush:html">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</pre>

		<p>HTML5</p>
		<pre class="brush:html">&lt;!DOCTYPE html&gt;</pre>
	</section>
	<!-- //HTML 가이드 -->
	<!-- 문서 제목 -->
	<section>
		<h3 class="s_tit">문서 제목</h3>
		<p class="panel info">각 페이지마다 서로 다른 규칙으로 사용중인 문서 제목 (title 요소) 규칙을 일관성 있게 일원화함으로써, 서비스 통일성을 및 검색 엔진에 대한 최적화를 높인다. 또한 문서 제목에 컨텐츠 제목을 포함시킴으로써, 외부 검색서비스에서 해당 컨텐츠의 노출이 더 용이해진다.</p>

		<h4 class="tit_cont">기본 규칙</h4>
		<pre class="brush:html">&lt;title&gt;@컨텐츠 제목 &gt; @하위섹션명 : @서비스명&lt;/title&gt;</pre>

		<h4 class="tit_cont">문서제목 기본 요소</h4>
		<p>문서 제목에 포함되는 기본 요소를 정의한다.</p>

		<dl class="category">
		<dt>@서비스명</dt>
		<dd>
			<ul class="lst_type">
			<li>브랜드 서비스명</li>
			</ul>
		</dd>
		<dt>@컨텐츠 제목</dt>
		<dd>
			<ul class="lst_type">
			<li>서비스에서 제공하는 컨텐츠의 제목</li>
			</ul>
		</dd>
		<dt>@하위 섹션명</dt>
		<dd>
			<ul class="lst_type">
			<li>하나의 서비스내 하위 섹션명 (보통 서비스별 GNB에서 TAB으로 표현되는 구분)</li>
			</ul>
		</dd>
		</dl>

		<h4 class="tit_cont">각 요소별 상세규칙</h4>
		<dl class="category">
		<dt>서비스 명</dt>
		<dd>
			<ul class="lst_type">
			<li>모든 서비스는 문서 제목에 서비스명을 표기하는 것을 원칙으로 한다.</li>
			<li>서비스명은 문서 제목에서 가장 뒷부분에 위치한다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">&lt;title&gt;Bluewaves&lt;/title&gt;</pre>
		</dd>
		<dt>컨텐츠 제목</dt>
		<dd>
			<ul class="lst_type">
			<li>하나의 컨텐츠를 대표하는 페이지의 경우, 반드시 해당 컨텐츠 제목을 문서 제목에 표기한다.</li>
			<li>컨텐츠 제목은 문서 제목에서 가장 앞부분에 위치한다.</li>
			<li>컨텐츠 제목과 서비스명 간의 구분자는 반드시 &#39; : &#39; 기호를 사용한다.</li>
			<li>컨텐츠 제목의 특수기호가 들어갈시 엔티티코드로 변환가능한 기호는 반드시 escape 되어야 한다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">&lt;title&gt;Web&frasl;Mobile Integration : Bluewaves&lt;/title&gt;</pre>
		</dd>
		<dt>하위 섹션명</dt>
		<dd>
			<ul class="lst_type">
			<li>하위섹션명은 서비스명 앞에 표기한다.</li>
			<li>하위섹션명의 구분자는 &#39; &gt; &#39; (&amp;gt;) 를 사용한다.</li>
			<li>하위섹션명은 필수 요소는 아니다.</li>
			</ul>
		</dd>
		<dd>
			<pre class="brush:html">
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Overview : Bluewaves&lt;/title&gt;
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Web : Bluewaves&lt;/title&gt;
				&lt;title&gt;Web&frasl;Mobile Integration &gt; Mobile : Bluewaves&lt;/title&gt;
			</pre>
		</dd>
		</dl>

		<h4 class="tit_cont">Meta title 요소</h4>
		<ul class="lst_type">
		<li>검색 엔진 최적화를 위하여 meta 요소를 이용하여 문서 제목을 추가 명시한다.</li>
		<li>컨텐츠 상세 페이지에서는 컨텐츠 제목 만을 표기한다.</li>
		<li>서비스홈에서는 서비스명 만을 표기, 서브 섹션홈에서는 하위섹션명 : 서비스명 을 표기한다</li>
		<li>컨텐츠 제목의 특수기호가 들어갈시 엔티티코드로 변환가능한 기호는 반드시 escape 되어야 한다.</li>
		</ul>
		<pre class="brush:html">
			&lt;meta name="title" content="Bluewaves"&gt;
			&lt;meta name="title" content="Web&frasl;Mobile Integration : Bluewaves"&gt;
			&lt;meta name="title" content="Overview"&gt;
		</pre>
	</section>
	<!-- //문서 제목 -->
	<!-- 레이아웃 가이드 -->
	<section>
		<h3 class="s_tit">Layout Guide</h3>
		<h4 class="tit_cont">HTML4.01&frasl;XHTML 1.0 기본 레이아웃</h4>
		<p>신규 HTML문서를 작성할 때는 다음과 같은 기본 HTML문서 구조를 따른다.</p>
		<pre class="brush:html">
			&lt;body&gt;
			<!-- skip -->
			&lt;div id="skip"&gt;
				&lt;a href="#"&gt;본문 바로가기&lt;/a&gt;
				&lt;a href="#"&gt;메뉴 바로가기&lt;/a&gt;
			&lt;/div&gt;
			<!-- //skip -->
			&lt;div id="wrap"&gt;
				<!-- header -->
				&lt;div id="header"&gt;헤더 영역&lt;/div&gt;
				<!-- //header -->
				<!-- container -->
				&lt;div id="container"&gt;
					<!-- content -->
					&lt;div id="content"&gt;콘텐츠 영역&lt;/div&gt;
					<!-- //content -->
				&lt;/div&gt;
				<!-- //container -->
				<!-- footer -->
				&lt;div id="footer"&gt;푸터 영역&lt;/div&gt;
				<!-- //footer -->
			&lt;/div&gt;
			&lt;/body&gt;
		</pre>
		<ul class="lst_type">
		<li>스킵네비게이션 바로가기(목차) 위치는 가장 상단에 위치시킨다.</li>
		<li>레이아웃은 전체를 &#34;wrap&#34;으로 감싸고 &#34;header&#34;, &#34;container&#34;, &#34;footer&#34; 로 나눈다.</li>
		<li>h1(서비스명), h2(메인메뉴,본문,이용약관...), h3(세부컨텐츠, 핵심컨텐츠), h4(서브컨텐츠) , h5~h6(될 수 있으면 안쓴다.)</li>
		</ul>

		<h4 class="tit_cont">HTML5 기본 레이아웃</h4>
		<p>HTML5 DTD를 선언할시에는 다음과 같은 구조를 따른다.</p>
		<pre class="brush:html">
			&lt;body&gt;
			<!-- skip -->
			&lt;div id="skip"&gt;
				&lt;a href="#"&gt;본문 바로가기&lt;/a&gt;
				&lt;a href="#"&gt;메뉴 바로가기&lt;/a&gt;
			&lt;/div&gt;
			<!-- //skip -->
			&lt;div id="wrap"&gt;
				<!-- header -->
				&lt;header&gt;헤더 영역&lt;/header&gt;
				<!-- //header -->
				<!-- container -->
				&lt;div id="container"&gt;
					<!-- content -->
					&lt;article id="content"&gt;콘텐츠 영역&lt;/article&gt;
					<!-- //content -->
				&lt;/div&gt;
				<!-- //container -->
				<!-- footer -->
				&lt;footer&gt;푸터 영역&lt;/footer&gt;
				<!-- //footer -->
			&lt;/div&gt;
			&lt;/body&gt;
		</pre>
		<ul class="lst_type">
		<li>article : 태그 자체로 완전한 하나의 개별 컨텐츠 article은 그 안에 section을 가질 수 있음</li>
		<li>section : 제목 태그(Heading Tag)를 지닌 영역 구분</li>
		</ul>
	</section>
	<!-- //레이아웃 가이드 -->
	<!-- 색인 -->
	<section>
		<h3 class="s_tit">색인</h3>
		<p class="panel info">일반 문서를 HTML로 다음과 같은 규칙에 맞게 색인화 한다.</p>
		<ul class="lst_type">
		<li>H1 : 서비스명</li>
		<li>H2 : 메인메뉴, 본문, 이용약관 등</li>
		<li>H3 : 세부 컨텐츠, 핵심 컨텐츠 등</li>
		<li>H4 : 서브 컨텐츠</li>
		<li>H5, H6 : 헤딩요소의 파편화를 불러일으킬 여지가 있으므로 가급적 사용하지 않는다.</li>
		</ul>
		<img src="<?php echo PATH; ?>resources/img/html_guide_index.png" width="270" height="360" alt="색인화 예시 화면">
	</section>
	<!-- //색인 -->
	<!-- 주석표기 -->
	<section>
		<h3 class="s_tit">주석 표기</h3>
		<p class="panel info">HTML 주석의 시작과 종료는 다음과 같이 표기하며, 기본 형식에 맞게 작성한다.</p>
		<pre class="brush:html">
			@기본 형식
			시작 주석: <!-- 주석 내용-->
			종료 주석: <!-- //주석 내용 -->
		</pre>
		<ul class="lst_type">
		<li>주석기호와 주석 내용 사이에는 반드시 공백이 한 칸 있어야 한다.</li>
		<li>주석 기호와 주석 내용 사이의 줄 바꿈은 허용하지 않는다. 단, 주석 내용 사이의 줄바꿈은 허용한다.</li>
		<li>시작과 종료 주석의 주석 내용은 동일해야 한다.</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 주석 기본 형식 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;!--GNB--&gt;</td>
		<td rowspan="4">&lt;!-- GNB --&gt;<br>···<br>&lt;!-- //GNB --&gt;</td>
		</tr>
		<tr>
		<td>&lt;!--* GNB *--&gt;</td>
		</tr>
		<tr>
		<td>&lt;!-- GNB<br>--&gt;</td>
		</tr>
		<tr>
		<td>&lt;!-- GNB 시작 --&gt;<br>···<br>&lt;!-- //GNB 끝 --&gt;</td>
		</tr>
		<tr>
		<td colspan="2"><strong>마크업과 개발의 편위를 위해 작성한 주석은 실제 서비스를 적용할 때 반드시 삭제한다.</strong></td>
		</tr>
		</tbody>
		</table>
		<div class="panel alert">
			 <strong>주의사항</strong>
			 <ul class="lst_type">
			 <li>공통 : 너무 많은 주석은 유령문자버그를 생성하므로 되도록 자제 한다.</li>
			 <li>HTML : 시작하는 구분자(&#34;&lt;!&#34;)와 주석을 시작하는 구분자(&#34;--&#34;) 사이에는 공백 문자(white space)가 올 수 없다.</li>
			 <li>XHTML : 주석으로 감싼 내용 안에 "--"가 오거나, 파라미터 엔터티 참조가 인식되서는 안된다.</li>
			 </ul>
		</div>

		<h4 class="tit_cont">레이아웃 및 콘텐츠 영역의 주석 표기</h4>
		<p>&#34;wrap&#34;을 제외한 레이아웃과 독립된 컨텐츠 영역의 시작과 끝에 주석을 표기하며, 레이아웃은 id 값과 동일하게 주석을 넣는다. 독립된 콘텐츠 영역의 주석 표기는 선택 사항이다. HTML 코드와 주석은 줄을 바꿔서 작성한다.</p>
		<pre class="brush:html">
			<!-- content -->
			&lt;div id="content"&gt;
				<!-- 네임카드 -->
				&lt;div class="namecard"&gt;...&lt;/div&gt;
				<!-- //네임카드 -->
			&lt;/div&gt;
			<!-- //content -->
		</pre>

		<h4 class="tit_cont">개발 적용과 관련된 주석 표기</h4>
		<p>개발 적용과 관련된 주석은 해당되는 영역 위에 표기하며, 종료 주석은 표기하지 않는다. 주석 앞에는 [D]라는 말머리를 사용해서 담당 개발자가 반드시 확인할 수 있게 한다. 주석이 두줄 이상이 되더라도 주석 기호는 한 번만 표기한다.</p>
		<table class="tb_grid">
		<caption>[ 개발 적용 관련 주석 표기 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>&lt;!-- 케이스별 클래스 변화 --&gt;<br>&lt;!-- 활성화 클래스: on<br>비활성화 클래스: off --&gt;</td>
		<td>&lt;!-- [D] 케이스별 클래스 변화<br>활성화 클래스: on<br>비활성화 클래스: off --&gt;</td>
		</tr>
		<tr>
		<td>
			&lt;img src="@tmp_btn.gif" width="25" height="25" alt="버튼"&gt;<br>
			&lt;!-- 숨김처리<br>
			&lt;img src="@tmp_btn_on.gif" width="25" height="25" alt="버튼"&gt;<br>
			//숨김처리 --&gt;
		</td>
		<td>
			&lt;img src="@tmp_btn.gif" width="25" height="25" alt="버튼"&gt;<br>
			&lt;!-- [D] 활성화된 버튼은 파일명에 _on추가 요망<br>
			&lt;img src="@tmp_btn_on.gif" width="25" height="25" alt="버튼"&gt;<br>
			--&gt;
		</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">Script 엘리먼트 주석 표기</h4>
		<p>HTML</p>
		<pre class="brush:html">
			&lt;script type="text/javascript"&gt;
				alert('확인');
			&lt;/script&gt;
		</pre>
		<p>XHTML</p>
		<pre class="brush:html">
			&lt;script type="text/javascript"&gt;
			<![CDATA[
				alert('확인');
			]]>
			&lt;/script&gt;
		</pre>
	</section>
	<!-- //주석표기 -->
	<!-- 들여쓰기 -->
	<section>
		<h3 class="s_tit">들여쓰기</h3>
		<p class="panel info">코드의 가독성을 높이고 HTML 구조를 쉽게 파악하기 위하여 들여쓰기를 사용하며 탭 1개의 크기는 공백 4칸으로 설정한다.</p>
		<p class="panel alert">마크업의 깊이가 깊어질 때마다 탭 1개만큼 들여쓰지만 다음의 경우 들여쓰지 않는다.</p>
		<ul class="lst_type">
		<li>html 엘리먼트 의 자식 요소인 head 엘리먼트, body 엘리먼트</li>
		<li>head 엘리먼트의 자식 요소</li>
		<li>body 엘리먼트의 자식 요소</li>
		<li>table 엘리먼트의 자식 요소인 caption, colgroup, col, thead, tbody, tfoot, tr, th, td 엘리먼트</li>
		<li>ul, ol, dl 엘리먼트 자식 요소인 li, dt, dd 엘리먼트</li>
		</ul>
		<table class="tb_grid">
		<caption>[ 들여쓰기 사용 예 ]</caption>
		<thead>
		<tr>
		<th scope="col">잘못된 예</th>
		<th scope="col">올바른 예</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
			&lt;table&gt;<br>
			&lt;caption&gt;...&lt;/caption&gt;<br>
			&lt;colgroup&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;col&gt;<br>
			&lt;/colgroup&gt;<br>
			&lt;thead&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt...&lt;/th&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt<br>
			&lt;/thead&gt;<br>
			&lt;tbody&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt...&lt;/td&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt<br>
			&lt;/tbody&gt;<br>
			&lt;/table&gt;
		</td>
		<td>
			&lt;table&gt;<br>
			&lt;caption&gt;...&lt;/caption&gt;<br>
			&lt;colgroup&gt;<br>
			&lt;col&gt;<br>
			&lt;/colgroup&gt;<br>
			&lt;thead&gt;<br>
			&lt;tr&gt<br>
			&lt;th&gt...&lt;/th&gt<br>
			&lt;/tr&gt<br>
			&lt;/thead&gt;<br>
			&lt;tbody&gt;<br>
			&lt;tr&gt<br>
			&lt;td&gt...&lt;/td&gt<br>
			&lt;/tr&gt<br>
			&lt;/tbody&gt;<br>
			&lt;/table&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;ol&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt...&lt;/li&gt<br>
			&lt;/ol&gt;
		</td>
		<td>
			&lt;ol&gt;<br>
			&lt;li&gt...&lt;/li&gt<br>
			&lt;/ol&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;ul&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt...&lt;/li&gt<br>
			&lt;/ul&gt;
		</td>
		<td>
			&lt;ul&gt;<br>
			&lt;li&gt...&lt;/li&gt<br>
			&lt;/ul&gt;
		</td>
		</tr>
		<tr>
		<td>
			&lt;dl&gt;<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;dt&gt...&lt;/dt&gt<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&lt;dd&gt...&lt;/dd&gt<br>
			&lt;/dl&gt;
		</td>
		<td>
			&lt;dl&gt;<br>
			&lt;dt&gt...&lt;/dt&gt<br>
			&lt;dd&gt...&lt;/dd&gt<br>
			&lt;/dl&gt;
		</td>
		</tr>
		<tr>
		<td colspan="2">
			<strong>[참고] 드림위버와 에디터플러스에서 탭 간격 설정하는 방법</strong>
			<dl class="category v2">
			<dt>드림위버:</dt>
			<dd>Preference &gt Category &gt Code Format &gt Indent &amp; Tab Size &gt Indent width 1 Tabs, Tab size 4</dd>
			<dt>에디터플러스:</dt>
			<dd>Tools &gt Preference &gt Categories &gt Files &gt Settings and syntax &amp; Tab&frasl;Indent</dd>
			</dl>
		</td>
		</tr>
		</tbody>
		</table>
	</section>
	<!-- //들여쓰기 -->
	<!-- 어트리뷰트 우선순위 -->
	<section>
		<h3 class="s_tit">Attribute 우선순위</h3>
		<p class="panel info">일관성있는 코드를 작성하기 위해 속성 선언시 정해진 우선순위의 규칙을 준수한다.</p>

		<h4 class="tit_cont">Attribute 작성</h4>
		<p>Attribute 값은 큰따옴표(&#34; &#34;)로 묶는다.</p>

		<h4 class="tit_cont">Attribute 우선순위</h4>
		<p>Attribute의 우선 순위는 다음 순위를 따른다.</p>
		<table class="tb_grid">
		<caption>[ 요소 속성 우선순위 목록 ]</caption>
		<thead>
		<tr>
		<th scope="col">우선순위</th>
		<th scope="col">속성</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>rel</td>
		</tr>
		<tr>
		<td>2</td>
		<td>type</td>
		</tr>
		<tr>
		<td>3</td>
		<td>href, src</td>
		</tr>
		<tr>
		<td>4</td>
		<td>width, height</td>
		</tr>
		<tr>
		<td>5</td>
		<td>name</td>
		</tr>
		<tr>
		<td>6</td>
		<td>id</td>
		</tr>
		<tr>
		<td>7</td>
		<td>target</td>
		</tr>
		<tr>
		<td>8</td>
		<td>title, alt, value</td>
		</tr>
		<tr>
		<td>9</td>
		<td>기타 속성</td>
		</tr>
		<tr>
		<td>10</td>
		<td>class</td>
		</tr>
		<tr>
		<td>11</td>
		<td>style</td>
		</tr>
		</tbody>
		</table>

		<p>특정 요소에 class와 style을 선언할 때는 선언 순서를 제일 뒷부분에 선언한다.</p>
		<pre class="brush:html">
			&lt;a href="#" id="linkId" target="_blank" title="링크가기" class="link" style="display:block"&gt;링크&lt;/a&gt;
			&lt;img src="@이미지파일" width="100" height="100" id="imgId" title="이미지툴팁" alt="이미지내용" class="img" style="display:block"&gt;
			&lt;input type="text" name="tfname" id="tfId" title="입력창" size="10" maxlength="5" class="tf" style="width:100px"&gt;
		</pre>
	</section>
	<!-- //어트리뷰트 우선순위 -->
	<!-- 테이블 -->
	<section>
		<h3 class="s_tit">Table</h3>
		<dl class="category">
		<dt>caption</dt>
		<dd>
			<ul>
			<li>표 제목을 표현하는데 사용한다. &lt;caption&gt;요소는 반드시 선언하다.</li>
			</ul>
		</dd>
		<dt>summary</dt>
		<dd>
			<ul>
			<li>일반적으로 레이아웃을 표현하는데 사용하지 않고, 2차원의 격자형 데이터를 표현하는데 사용한다. 표의 요약 내용을 표기해야 할때 summary 속성을 선택적으로 사용할 수 있다.</li>
			<li>단, HTML5 DTD 선언 시 summary속성은 선언하지 않는다.(HTML5에서 이 속성은 폐기 되었다.)</li>
			</ul>
		</dd>
		<dt>colgroup</dt>
		<dd>
			<ul>
			<li>세로열 전체를 그룹화 할때 선언한다. 이 요소는 선택적으로 할 수 있지만 되도록 사용하는것을 권장한다.</li>
			</ul>
		</dd>
		<dt>col</dt>
		<dd>
			<ul>
			<li>표 각 열의 너비를 지정하기 위해 선언한다. width, span 속성이 있으며 이 속성은 필요에 따라 선택적으로 사용한다.</li>
			<li>테이블에 border가 없는 경우에는 &lt;col width=&#34;&#34;&gt; 사용을 한다. border가 있는 경우에 크로스브라우징시 1px 밀리는 이슈가 발생할 수 있는데 이럴경우 &lt;col class=""&gt; 를 사용하여 CSS에서 width를 핸들링 한다.</li>
			<li>단, HTML5 DTD 선언 시 &lt;col&gt; width 속성은 전부 class 속성을 줘서 CSS로 핸들링 하거나 &lt;col style=width:&#34;&#34;&gt; 인라인 style로 핸들링 한다.</li>
			</ul>
		</dd>
		<dt>thead, tbody, tfoot</dt>
		<dd>
			<ul>
			<li>thead 요소는 표 머리글을 그룹으로 나눌 때 선언한다. 이 요소는 &lt;th&gt; 요소만으로 그룹을 나눌 수 없으면 선언하지 않는다.</li>
			<li>tfoot 요소는 표 바닥글을 그룹으로 나눌 때 선언한다. &lt;thead&gt; 와 &lt;tbody&gt; 요소 사이에 위치해야 하며, 이 요소는 선택적으로 사용한다.</li>
			<li>tbody 요소는 표 본문을 그룹으로 나누기 위해 선언한다. 테이블의 본문이 하나이고 &lt;thead&gt; 나 &lt;tfoot&gt; 요소가 없으면 생략  수 있다.</li>
			</ul>
		</dd>
		<dt>th</dt>
		<dd>
			<ul>
			<li>scope, abbr, id 순서로 속성을 선언한다.</li>
			<li>표에 셀 제목이 명시되지 않는 경우에도 &lt;th&gt; 요소를 필수로 선언해서 의미에 맞는 제목을 명시한다.(화면에 표시되지 않도록 CSS로 숨김 처리)</li>
			<li>scope 속성은 반드시 선언해야 한다.(scope=&#34;col&#34;의 뜻은 세로(column), row는 가로(row) 이다.)</li>
			<li>abbr과 id 속성은 선택적으로 사용한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //테이블 -->
	<!-- //기타 참고사항 -->
	<section>
		<h3 class="s_tit">기타 참고사항</h3>
		<h4 class="tit_cont">중첩 리스트 적용 지양</h4>
		<p>단, GNB 및 서브메뉴 등에서는 키보드 사용성 확보를 위해 2depth까지는 제한적 허용함</p>

		<h4 class="tit_cont">dl 요소 안에는 여러개의 dt,dd 구조 적용 가능</h4>
		<pre class="brush:html">
			&lt;dl&gt;
			&lt;dt&gt;제목1&lt;dt&gt;
			&lt;dd&gt;정의내용1&lt;dd&gt;
			&lt;dt&gt;제목2&lt;dt&gt;
			&lt;dd&gt;정의내용2&lt;dd&gt;
			&lt;dl&gt;
		</pre>

		<h4 class="tit_cont">title 속성 적용 범위</h4>
		<p>IR기법을 사용한 링크에서는 title 미적용 : 내용이 중복 제공되는 현상 방지(단, 중요한 내용인 경우에는 사용 가능)</p>
		<p>단, GNB 및 서브메뉴 등에서는 키보드 사용성 확보를 위해 2depth까지는 제한적 허용함 label로 적용하기 어려운 input 요소에 적용 가능</p>

		<h4 class="tit_cont">layer 페이지 제목요소</h4>
		<p>페이지내 레이어는 STRONG 요소로 제목 구현함 (단, 레이어가 아닌 별도의 팝업 페이지는 제목을 헤딩으로 구조화 한다.)</p>

		<h4 class="tit_cont">a &amp; strong의 중첩관계</h4>
		<pre class="brush:html">
			// 권장사항 (단일 중첨관계일 경우)
			&lt;strong&gt;&lt;a href="#"&gt;썸네일 타이틀&lt;/a&gt;&lt;/strong&gt;

			// 예외처리 (앵커 안에 많은 요소들을 포함할 때)
			&lt;a href="#"&gt;
				&lt;strong&gt;썸네일 타이틀&lt;/strong&gt;
			&lt;/a&gt;
		</pre>

		<h4 class="tit_cont">role 속성 적용</h4>
		<p>HTML5 DTD 적용 시 User Add Custom 속성은 role 속성을 사용해야 한다.</p>
		<p>이 속성은 HTML5 문서타입 외에서는 적용하지 않는다.(사용시 validation 문법 오류 발생)</p>
	</section>
	<!-- //기타 참고사항 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>