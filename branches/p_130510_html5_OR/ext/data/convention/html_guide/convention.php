<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>HTML Convention : HTML Guide</title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- HTML 가이드 -->
	<section>
		<h2 class="s_tit">HTML Convention</h2>

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
		<img src="<?php echo PATH; ?>resources/img/html_guide_index.png" width="300" height="374" alt="색인화 화면">
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
	</section>
	<!-- //들여쓰기 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>