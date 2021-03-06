<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>doctype 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article>
	<!-- 스펙 명세 -->
	<section id="refer">
		<h3 class="blind">스펙 명세</h3>
		<dl>
		<dt class="first">DOCTYPE은 필요한 서두입니다.</dt>
		<dd>DOCTYPE은 오래된 것들 때문에 필요합니다. 이것이 누락된다면, 브라우저들은 일부 명세와는 호환되지 않는 렌더링 모드를 사용하는 경향이 있습니다.</dd>
		<dd>DOCTYPE을 포함하면 문서에 대해 다음의 관련되는 명세들에 대해 최선의 시도를 할 것을 보장할 수 있습니다.</dd>
		</dl>

		<p><strong>DOCTYPE은 다음의 문자들을, 다음의 순서대로 포함해야 합니다.</strong></p>
		<ol>
		<li>!DOCTYPE 아스키, 대소문자 구분없이.</li>
		<li>하나 이상의 공백문자</li>
		<li>HTML 아스키, 대소문자 구분없이.</li>
		<li>선택적으로, 구형 DOCTYPE 문자열 또는 폐기되었지만 허용되는 DOCTYPE 문자열</li>
		<li>0개 이상의 공백문자</li>
		</ol>
	</section>
	<!--//스펙 명세 -->
	<!-- 콘텐츠 분류 타입 -->
	<section id="flow">
		<h3 class="blind">콘텐츠 분류 타입</h3>
		<svg width="300" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svg">
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow on" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata " title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing " title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>대소문자 구분 없이 &lt;!DOCTYPE html&gt;입니다.</li>
		<li>폐기되었지만 HTML4와 XHTML1 문서의 변환을 위해 다음 DOCTYPE 선언을 사용할 수 있습니다. 하지만 불필요하게 긴 탓에 사용하지 않는 것을 권장합니다.</li>
		<li>HTML 4.01은 SGML에 기반했기 때문에 HTML 4.01에서 DOCTYPE 선언은 DTD를 말합니다. DTD는 브라우저가 제대로 내용을 렌더링 있도록 마크 업 언어에 대한 규칙을 지정합니다. HTML5는 SGML 기반으로하지 않습니다. 따라서 DTD에 대한 참조가 필요하지 않습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>&lt;!DOCTYPE&gt; 선언 html 요소 전에 HTML 문서에서 가장 먼저해야합니다.</li>
		<li>짧은 &lt;!DOCTYPE html&gt; 선언을 이해하지 못하는 HTML 생성기를 위해 &lt;!DOCTYPE html SYSTEM &#34;about:legacy-compat&#34;&gt; 선언을 사용할 수 있습니다. 대소문자 구분은 없고 따옴표는 짝이 맞아야 합니다.</li>
		<li>doctype 선언은 문서의 맨 앞에 선언되는데, 간혹 서버사이드 개발 언어로 인해 선언 앞에 공백이나 다른 문자열이 먼저 나타나는 경우 선언이 무시될 수 있습니다.</li>
		<li>브라우저는 Doctype과 DTD를 참조하여 문서의 표시형태를 결정하게 되며, 문서의 언어 버전만 사용하고 참조 DTD 유무 따라서도 문서의 표시 형태가 달라질 수 있습니다.</li>
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