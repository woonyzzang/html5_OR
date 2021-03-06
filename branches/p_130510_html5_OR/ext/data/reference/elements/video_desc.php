<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>video 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
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
			<li>요소에 controls 속성이 있으면: 대화형 컨텐츠</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>포함된 컨텐츠가 올 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>src 속성이 있는 경우: 0개 이상의 track 요소 → 투명한 요소. 하지만 미디어 요소를 자손으로 가질 수는 없습니다.</dd>
		<dd>src 속성이 없는 경우: 0개 이상의 source 요소 → 0개 이상의 track 요소 → 투명한 요소. 하지만 미디어 요소를 자손으로 가질 수는 없습니다.</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>src</li>
			<li>poster</li>
			<li>preload</li>
			<li>autoplay</li>
			<li>loop</li>
			<li>audio</li>
			<li>controls</li>
			<li>width</li>
			<li>height</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLVideoElement : HTMLMediaElement {
           attribute unsigned long width;
           attribute unsigned long height;
  readonly attribute unsigned long videoWidth;
  readonly attribute unsigned long videoHeight;
           attribute DOMString poster;
  [PutForwards=value attribute DOMSettableTokenList audio;
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded on" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠, 구문 컨텐츠, 포함된 컨텐츠에 속하며, controls 속성을 사용하면 대화형 컨텐츠에 속할 수 있습니다.</li>
		<li>포함된 컨텐츠가 올 수 있는 곳에 위치할 수 있습니다.</li>
		<li>src 속성이 있으면 track 요소를 자식 요소로 포함할 수 있습니다.
			<ul>
			<li>src 속성이 없으면 source 요소와 track 요소를 자식 요소로 포함할 수 있습니다.</li>
			<li>video 요소, audio 요소와 같은 미디어 요소는 자식 요소로 포함할 수 없습니다.</li>
			</ul>
		</li>
		<li>video 요소를 지원하지 않는 오래된 웹 브라우저에서 구형 비디오 플러그인을 시도하거나 사용자가 비디오 컨텐츠에 접근할 수 있는 방법을 제시하는 텍스트를 보여줄 수 있도록 요소 내부에 컨텐츠를 제공할 수 있습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>HTML5에서 추가된 요소입니다.</li>
		<li>내부에 컨텐츠를 제공하는 것이 접근성을 고려한 것은 아닙니다. 시각이나 청각, 기타 장애를 가진 사람이 비디오 컨텐츠를 이용할 수 있으려면 대체 수단으로 다른 미디어 스트림, 접근성 도구(자막 등)를 미디어 스트림에 병합하는 방법을 고려해야 합니다.</li>
		<li>IE8 및 이전 버전, article 요소를 지원하지 않습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">audio 요소</a>,
		<a href="#">canvas 요소</a>,
		<a href="#">embed 요소</a>,
		<a href="#">img 요소</a>,
		<a href="#">math 요소</a>,
		<a href="#">object 요소</a>,
		<a href="#">svg 요소</a>,
		<a href="#">video 요소</a>
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