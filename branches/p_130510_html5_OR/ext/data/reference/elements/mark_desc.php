<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>mark 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
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
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>구문 컨텐츠를 쓸 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>구문 컨텐츠</dd>
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing on" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠와 구문 컨텐츠에 속합니다.</li>
		<li>구문 컨텐츠의 위치에 사용할 수 있습니다.</li>
		<li>구문 컨텐츠를 자식 요소로 포함할 수 있습니다.</li>
		<li>인용구의 특정한 부분으로 주의를 환기시키기 위해 mark 요소를 사용합니다.</li>
		<li>이것은 &#34;구문 강조&#34; 와는 다릅니다. 구문 강조에 쓰기엔 span 요소가 좀 더 적절합니다.</li>
		<li>원래는 강조되지 않았었던 텍스트를 인용문 일부에서 mark 요소로 하이라이트할 경우 일반적인 표현 관습대로 인용문 내의 mark 요소를 이탤릭체로 표시할 수 있습니다.</li>
		<li>텍스트에서 “중요성”(strong)을 나타내는 것과 &#34;연관성&#34;(mark)을 나타내는 것의 차이가 있습니다. 예를 들어 실험과 관련된 내용 중 실험의 안전성에 관한 경고의 경우 중요한 내용이긴 하지만 실험과는 별 관련이 없으므로 mark 요소보다는 strong 요소를 사용하는 것이 더 적합합니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>HTML5에서 추가된 요소입니다.</li>
		<li>텍스트에 형광펜으로 칠한 것과 같은 강조 효과를 표시 합니다.</li>
		<li>IE8 및 이전 버전, mark 요소를 지원하지 않습니다.</li>
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
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie6_none.png" width="25" height="25" alt="IE6 지원 안함">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie7_none.png" width="25" height="25" alt="IE7 지원 안함">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie8_none.png" width="25" height="25" alt="IE8 지원 안함">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie9.png" width="25" height="25" alt="IE9 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie10.png" width="25" height="25" alt="IE10 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_chrome.png" width="25" height="25" alt="Chrome 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_firefox.png" width="25" height="25" alt="Firefox 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_opera.png" width="25" height="25" alt="Opera 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_safari.png" width="25" height="25" alt="Safari 지원">
		</p>
		<em>최신 브라우저에서 지원 합니다.</em>
	</section>
	<!-- //지원 브라우저 -->
</article>
</body>
</html>