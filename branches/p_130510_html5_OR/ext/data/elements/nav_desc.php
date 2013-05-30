<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>nav 요소 상세설명 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/base.css">
</head>
<body>
<article>
	<!-- 스펙 명세 -->
	<section id="refer">
		<h3 class="blind">스펙 명세</h3>
		<dl>
		<dt class="first">[요소가 속하는 범주]</dt>
		<dd>
			<ul>
			<li>플로우 컨텐츠</li>
			<li>섹션 컨텐츠</li>
			<li>formatBlock이 될 수 있는 요소.</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>플로우 컨텐츠가 올 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>플로우 컨텐츠</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
Uses HTMLElement.
			</pre>
		</dd>
		</dl>
	</section>
	<!--//스펙 명세 -->
	<!-- 콘텐츠 분류 타입 -->
	<section id="flow">
		<h3 class="blind">콘텐츠 분류 타입</h3>
		<svg width="300" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svg">
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning on" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠, 섹션 컨텐츠, 전체 선택이 가능한 요소에 속하며 구문 컨텐츠의 위치에 사용할 수 있습니다.</li>
		<li>플로우 컨텐츠를 자식 요소로 포함할 수 있습니다.</li>
		<li>페이지의 모든 링크 그룹이 nav 요소 내에 있을 필요는 없습니다.</li>
		<li>주된 navigation 블럭을 형성하는 섹션이 nav 요소에 적합합니다.</li>
		<li>페이지의 하단에 사이트의 중요한 곳을 링크하는 것이 일반적이나 이러한 경우는 footer 요소로 충분하며 nav 요소를 사용할 필요는 없습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>HTML5에서 추가된 요소입니다.</li>
		<li>장애가있는 사용자를위한 스크린리더 같은 브라우저에서는 이 콘텐츠의 초기 렌더링을 생략할지 여부를 결정하기 위해 이 요소를 사용할 수 있습니다.</li>
		<li>IE8 및 이전 버전, nav 요소를 지원하지 않습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">article 요소</a>,
		<a href="#">aside 요소</a>,
		<a href="#">footer 요소</a>,
		<a href="#">header 요소</a>,
		<a href="#">nav 요소</a>,
		<a href="#">section 요소</a>
	</section>
	<!--//관련 요소 레벨 -->
	<!-- 지원 브라우저 -->
	<section id="browser">
		<h3 class="blind">지원 브라우저</h3>
		<p>
			<img src="ext/resources/css/images/custom/ico_support_ie6_none.png" width="25" height="25" alt="IE6 지원 안함">
			<img src="ext/resources/css/images/custom/ico_support_ie7_none.png" width="25" height="25" alt="IE7 지원 안함">
			<img src="ext/resources/css/images/custom/ico_support_ie8_none.png" width="25" height="25" alt="IE8 지원 안함">
			<img src="ext/resources/css/images/custom/ico_support_ie9.png" width="25" height="25" alt="IE9 지원">
			<img src="ext/resources/css/images/custom/ico_support_ie10.png" width="25" height="25" alt="IE10 지원">
			<img src="ext/resources/css/images/custom/ico_support_chrome.png" width="25" height="25" alt="Chrome 지원">
			<img src="ext/resources/css/images/custom/ico_support_firefox.png" width="25" height="25" alt="Firefox 지원">
			<img src="ext/resources/css/images/custom/ico_support_opera.png" width="25" height="25" alt="Opera 지원">
			<img src="ext/resources/css/images/custom/ico_support_safari.png" width="25" height="25" alt="Safari 지원">
		</p>
		<em>최신 브라우저에서 지원 합니다.</em>
	</section>
	<!-- //지원 브라우저 -->
</article>
</body>
</html>