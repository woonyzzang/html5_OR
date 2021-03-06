<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>area 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
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
			<li>구문 컨텐츠</li>
			</ul>
		</dd>
		<dt>[이 요소가 사용될 수 있는 문맥]</dt>
		<dd>구문 컨텐츠가 올 수 있는 곳. 하지만 map 요소를 조상으로 가져야 합니다.</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>이 요소는 비어 있어야 합니다.</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>alt</li>
			<li>coords</li>
			<li>shape</li>
			<li>href</li>
			<li>target</li>
			<li>rel</li>
			<li>media</li>
			<li>hreflang</li>
			<li>type</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLAreaElement : HTMLElement {
           attribute DOMString alt;
           attribute DOMString coords;
           attribute DOMString shape;
  stringifier attribute DOMString href;
           attribute DOMString target;
           attribute DOMString rel;
  readonly attribute DOMTokenList relList;
           attribute DOMString media;
           attribute DOMString hreflang;
           attribute DOMString type;

  // URL decomposition IDL attributes
           attribute DOMString protocol;
           attribute DOMString host;
           attribute DOMString hostname;
           attribute DOMString port;
           attribute DOMString pathname;
           attribute DOMString search;
           attribute DOMString hash;
};
			</pre>
		</dd>
		</dl>
	</section>
	<!--//스펙 명세 -->
	<!-- 콘텐츠 분류 타입 -->
	<section id="flow">
		<h3 class="blind">콘텐츠 분류 타입</h3>
		<svg width="300" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svg">
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow on" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing on" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠와 구문 컨텐츠에 속합니다.</li>
		<li>구문 컨텐츠의 위치에 사용할 수 있습니다. 단, 부모 요소가 map 요소이여야 합니다.</li>
		<li>href 속성이 있으면, 요소는 하이퍼링크를 나타냅니다. href 속성이 있으면 반드시 alt 속성도 함께 써야 합니다.</li>
		<li>href 속성이 없으면 target 속성, rel 속성, media 속성, hreflang 속성, type 속성을 사용할 수 없습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li><a href="#" title="html5:attribute:rel">rel 속성</a>, <a href="#" title="html5:attribute:media_hyperlink"></a>media 속성</a>, <a href="#" title="html5:attribute:hreflang">hreflang 속성</a>, <a href="#" title="html5:attribute:type_hyperlink">type 속성</a>은 HTML5에서 추가된 속성입니다.</li>
		<li>nohref 속성은 폐기된 속성입니다.</li>
		<li>HTML5에서는 <a href="#" title="html5:attribute:href_hyperlink">href 속성</a>을 생략된 형태로 사용할 수 있습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">a 요소</a>,
		<a href="#">button 요소</a>,
		<a href="#">details 요소</a>,
		<a href="#">input 요소</a>,
		<a href="#">keygen 요소</a>,
		<a href="#">label 요소</a>,
		<a href="#">menu 요소</a>,
		<a href="#">select 요소</a>,
		<a href="#">textarea 요소</a>
	</section>
	<!--//관련 요소 레벨 -->
	<!-- 지원 브라우저 -->
	<section id="browser">
		<h3 class="blind">지원 브라우저</h3>
		<p>
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie6.png" width="25" height="25" alt="IE6 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie7.png" width="25" height="25" alt="IE7 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie8.png" width="25" height="25" alt="IE8 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie9.png" width="25" height="25" alt="IE9 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie10.png" width="25" height="25" alt="IE10 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_chrome.png" width="25" height="25" alt="Chrome 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_firefox.png" width="25" height="25" alt="Firefox 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_opera.png" width="25" height="25" alt="Opera 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_safari.png" width="25" height="25" alt="Safari 지원">
		</p>
		<em>모든 주요 브라우저에서 지원 합니다.</em>
	</section>
	<!-- //지원 브라우저 -->
</article>
</body>
</html>