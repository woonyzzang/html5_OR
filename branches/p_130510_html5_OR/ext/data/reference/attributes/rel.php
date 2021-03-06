<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>rel 속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @alternate 링크 타입:
				현재 문서의 대체품을 나타냅니다.-->
			&lt;link rel="alternate stylesheet" type="text/css" href="paul.css" title="스타일"&gt;
			&lt;link rel="alternate" type="application/rss+xml" href="rss.xml" title="RSS 2.0"&gt;

			<!-- @ archives 링크 타입:
				기록, 문서, 기타 역사적인 관점에서 흥미가 있을 컬렉션에 대한 링크를 제공합니다.
				블로그의 과거 포스트들을 rel="archives"와 함께 index를 링크시킬 수 있다. -->
			&lt;link rel="archives" href="http://www.example.com/blog/2013/03/" title="March 2013"&gt;
			&lt;link rel="archives" href="http://www.example.com/blog/2013/02/" title="February 2013"&gt;
			&lt;link rel="archives" href="http://www.example.com/blog/2013/01/" title="January 2013"&gt;

			<!-- @first 링크 타입:
				현재 문서가 시리즈의 일부분임을 나타내며, 참조하는 문서는 그 시리즈의 첫번째 문서입니다. -->
			&lt;link rel="first" type="text/html" href="http://html5_OR.co.kr/html5:attributes:name" title="5개의 name 속성 페이지중 1번째"&gt;

			<!-- @help 링크 타입:
				문맥에 접근한 도움말에의 링크를 제공합니다. -->
			&lt;link rel="help" href="help.html"&gt;

			<!-- @icon 링크 타입:
				현재 문서를 나타내기 위한 아이콘을 가져옵니다. icon을 쓸때는 shortcut과 함께 씁니다. -->
			&lt;link rel="shortcut icon" href="favicon.ico"&gt;

			<!-- @ index 링크 타입:
				현재 문서의 차례, 또는 인덱스를 갖고 있는 문서로의 링크를 제공합니다. -->
			&lt;link rel="index" href="http://html5_OR.co.kr/"&gt;

			<!-- @last 링크 타입:
				현재 문서가 시리즈의 일부분임을 나타내며, 참조된 문서는 그 시리즈의 마지막 것입니다. -->
			&lt;link rel="last" type="text/html" href="http://html5_OR.co.kr/html5:attribute:name_param" title="5개의 name 속성 페이지중 마지막 페이지"&gt;

			<!-- @next 링크 타입:
				현재 문서가 시리즈의 일부분임을 나타내며, 참조된 문서는 그 시리즈에서 현재 문서의 다음 문서입니다. -->
			&lt;link rel="next" href="chapter6.html"&gt;

			<!-- @pingback 링크 타입:
				현재 문서로의 핑백을 다루는 서버의 주소를 제공합니다. -->
			&lt;link rel="pingback" href="http://www.woonyzzang.com/html5_OR.co.kr/"&gt;

			<!-- @prefetch 링크 타입:
				목적지 문서가 미리 캐쉬되어야 함을 나타냅니다. -->
			&lt;link rel="prefetch" href="http://html5_OR.co.kr/lib"&gt;

			<!-- @prev 링크 타입:
				현재 문서가 시리즈의 일부분이며, 참조된 문서는 현재 문서의 앞 문서임을 나타냅니다. -->
			&lt;link rel="prev" href="chapter4.html"&gt;

			<!-- @search 링크 타입:
				현재 문서와, 연관된 페이지를 검색하는데 사용할 수 있는 자원으로의 링크를 제공합니다. -->
			&lt;link rel="search" type="application/opensearchdescription+xml" href="/lib/exe/opensearch.php" title="HTML5 Open Reference Guide"&gt;

			<!-- @stylesheet 링크 타입:
				스타일시트를 가져옵니다. -->
			&lt;link rel="stylesheet" type="text/css" href="http://html5_OR.co.kr/css/base.css"&gt;

			<!-- @author 링크 타입:
				현재 문서의 저자에 대한 링크입니다. 이것은 mailto: address 일 수도 있고, 페이지 저자에 대한 contact form 링크 일 수도 있습니다. -->
			&lt;a rel="author" href="mailto://seungwoonjjang@gmail.com"&gt;Contact me&lt;/a&gt;

			<!-- @bookmark 링크 타입:
				bookmark 링크 타입은 퍼머링크(permalink)를 나타낼 수 있습니다. 이경우 title 속성을 활용하여 제목을 써 두는 것이 좋습니다. -->
			&lt;a rel="bookmark" href="http://example.com" title="HTML5 오픈 레퍼런스"&gt;HTML5 Open Reference Guide&lt;/a&gt;

			<!-- @external 링크 타입:
				참조하는 문서가 현재 문서 사이트의 일부가 아님을 나타냅니다. -->
			&lt;a href="document.html" target="_blank"&gt;외부 link&lt;/a&gt;
			&lt;a rel="external" href="document.html"&gt;외부 link&lt;/a&gt;

			<!-- @license 링크 타입:
				현재 문서의 주된 컨텐츠가 저작권 라이센스를 갖고 있음을 나타내며, 참조된 문서는 그러한 라이센스를 설명합니다. -->
			&lt;a rel="license" href="http://www.apache.org/licenses/LICENSE-2.0"&gt;Apache 2.0&lt;/a&gt;

			<!-- @nofollow 링크 타입:
				현재 문서의 원래 저자, 혹은 출판자가 참조된 문서를 보증하지 않음을 나타냅니다. -->
			&lt;a rel="nofollow" href="http://blog.example.com"&gt;My blog&lt;/a&gt;

			<!-- noreferrer 링크 타입:
				하이퍼링크를 따라갈 경우, 사용자 에이전트가 HTTP Refferer 헤더를 전송하지 않을 것을 요구합니다. -->
			&lt;a rel="noreferrer" href="http://html5_OR.co.kr/" target="_blank"&gt;HTML5 오픈 레퍼런스 사이트 새창으로 열기&lt;/a&gt;

			<!-- @tag 링크 타입: 현재 문서에 적용되는 태그(주어진 주소에 의해 식별되는)를 제공합니다. -->
			&lt;a rel="tag" href="http://html5_OR.co.kr"&gt;html5&lt;/a&gt;

			<!-- @sidebar 링크 타입: 참조된 문서를 가져왔을 경우, 브라우저에 사이드바가 있다면 그곳에 표시될 의도를 가졌음을 나타냅니다. -->
			<!-- @up 링크 타입: 현재 문서에 대한 문맥을 제공하는 문서로의 링크를 제공합니다. -->
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>새로운 링크 타입은 WHATWG Wiki RelExtensions page를 통해서 등록할 수 있습니다. 자세한 설명은 명세 4.12.4.19 다른 링크 타입들을 참고해 주세요. * 명세와 WHATWG Wiki의 컬럼명이나 키워드가 일치하지 않는 경우가 있으나, 의미를 파악하거나 이용하는데에는 무리가 없습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/links.html#attr-hyperlink-rel" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/links.html#linkTypes" target="_blank">Link types 최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'rel',
		item: [{
			desc:'rel 속성은 a 요소, link 요소, area 요소에서 사용되며, 링크된 대상과의 관계를 지정합니다.'
		},{
			desc:'link 요소에서 rel 속성으로 생성한 하이퍼링크는 문서전체에 적용됩니다.'
		},{
			desc:'a 요소, area 요소에서 사용하는 rel 속성은 문서 내에서 링크 위치에 의해 정해지는 문맥에 따라 링크의 타입을 나타냅니다.'
		}],
		txt: '이 속성은 기본값이 없고, 계층구조를 명시하는 index, up 등과 같이 직접 명시되지 않는한 대부분은 하나의 키워드만 가질 수 있습니다.',
		txt1: '명세에서 이 속성의 값으로 사용될 수 있는 링크 타입들을 소개하고 있지만, 규범은 아닙니다. 누구든지 원하는 경우 새로운 링크 타입을 생성할 수 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>