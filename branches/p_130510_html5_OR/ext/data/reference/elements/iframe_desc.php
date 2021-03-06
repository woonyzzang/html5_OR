<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>iframe 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
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
			<li>포함된 컨텐츠</li>
			<li>대화형 컨텐츠</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>포함된 컨텐츠가 올 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>아래에서 설명하는 요구사항을 만족하는 텍스트</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>src</li>
			<li>srcdoc</li>
			<li>name</li>
			<li>sandbox</li>
			<li>seamless</li>
			<li>width</li>
			<li>height</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLIFrameElement : HTMLElement {
           attribute DOMString src;
           attribute DOMString srcdoc;
           attribute DOMString name;
  [PutForwards=value] readonly attribute DOMSettableTokenList sandbox;
           attribute boolean seamless;
           attribute DOMString width;
           attribute DOMString height;
  readonly attribute Document contentDocument;
  readonly attribute WindowProxy contentWindow;
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata " title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing " title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded on" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠, 구문 컨텐츠, 포함된 컨텐츠, 대화형 컨텐츠에 속합니다.</li>
		<li>포함된 컨텐츠의 위치에 사용할 수 있습니다.</li>
		<li>자식 요소로 아무것도 나타내지 않습니다. (iframe 요소를 지원하지 못하는 구형 사용자 에이전트에서는 요소의 내용이 마크업으로 파싱되어, 마치 폴백 컨텐츠인양 나타날 수 있습니다)</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>srcdoc 속성, sandbox 속성, seamless 속성이 추가되었습니다.</li>
		<li>longdesc 속성, frameborder 속성, marginwidth 속성, marginheight 속성, scrolling 속성, align 속성은 폐기deprecated된 속성입니다.</li>
		<li>지원하지 않는 브라우저를 위해 iframe 태그 내부에 원하는 문구를 넣어줄수 있습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">em 요소</a>,
		<a href="#">strong 요소</a>,
		<a href="#">small 요소</a>,
		<a href="#">s 요소</a>,
		<a href="#">cite 요소</a>,
		<a href="#">q 요소</a>,
		<a href="#">dfn 요소</a>,
		<a href="#">abbr 요소</a>,
		<a href="#">time 요소</a>,
		<a href="#">code 요소</a>,
		<a href="#">var 요소</a>,
		<a href="#">samp 요소</a>,
		<a href="#">kbd 요소</a>,
		<a href="#">sub 요소</a>,
		<a href="#">sup 요소</a>,
		<a href="#">i 요소</a>,
		<a href="#">b 요소</a>,
		<a href="#">mark 요소</a>,
		<a href="#">ruby 요소</a>,
		<a href="#">rt 요소</a>,
		<a href="#">rp 요소</a>,
		<a href="#">bdi 요소</a>,
		<a href="#">bdo 요소</a>,
		<a href="#">span 요소</a>,
		<a href="#">br 요소</a>,
		<a href="#">wbr 요소</a>,
		<a href="#">ins 요소</a>,
		<a href="#">del 요소</a>,
		<a href="#">iframe 요소</a>,
		<a href="#">param 요소</a>,
		<a href="#">source 요소</a>,
		<a href="#">map 요소</a>,
		<a href="#">area 요소</a>,
		<a href="#">summary 요소</a>,
		<a href="#">command 요소</a>
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