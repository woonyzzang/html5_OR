<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>noscript 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
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
			<li>메타데이터</li>
			<li>플로우 컨텐츠</li>
			<li>구문 컨텐츠</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>HTML 문서의 head 요소 내부. 단, noscript 요소 내부는 안됩니다.</dd>
		<dd>HTML 문서에서 구문 컨텐츠가 나타날 수 있는 곳. 단, noscript 요소 내부는 안됩니다.</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>스크립팅이 비활성화되었을 때 head 요소 내부에 있으면: link, style, meta 요소를 순서나 개수에 무관하게 포함할 수 있습니다.</dd>
		<dd>스크립팅이 비활성화되었을 때 head 요소 내부에 없으면: 투명한 요소. 하지만, noscript 요소는 포함할 수 없습니다.</dd>
		<dd>그렇지 않으면: 아래에서 주어진 요구사항을 만족하는 텍스트를 포함할 수 있습니다.</dd>
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata on" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>메타데이터, 플로우 컨텐츠이면서 구문 컨텐츠에 속합니다.</li>
		<li>head 요소 내부와 구문 컨텐츠가 나타날 수 있는 곳에 위치할 수 있습니다. 단, 두가지 경우에도 noscript 요소를 중첩해서 사용할 수 없습니다.</li>
		<li>스크립트가 비활성화되어 있을 때 head 요소 내부에 있으면, link, style 요소, meta 요소를 포함할 수 있고, head 요소 내부에 없으면 투명한 요소가 됩니다. 단, noscript 요소는 중첩될 수 없습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>이 요소는 스크립트를 사용할 수 없는 브라우저를 가진 사용자나 클라이언트 스크립팅을 지원하지 않는 브라우저를 가진 사용자를 위해 대체 콘텐트를 제공할때 사용합니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">doctype</a>,
		<a href="#">html 요소</a>,
		<a href="#">head 요소</a>,
		<a href="#">title 요소</a>,
		<a href="#">base 요소</a>,
		<a href="#">link 요소</a>,
		<a href="#">meta 요소</a>,
		<a href="#">style 요소</a>,
		<a href="#">body 요소</a>,
		<a href="#">noscript 요소</a>,
		<a href="#">script 요소</a>
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