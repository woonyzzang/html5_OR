<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>time 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
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
			<li>구문 컨텐츠Phrasing content.</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>구문 컨텐츠를 쓸 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>구문 컨텐츠. 하지만 그러한 것은 time 요소를 포함할 수 없습니다.</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>Global attributes</li>
			<li>datetime</li>
			<li>pubdate</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLTimeElement : HTMLElement {
           attribute DOMString dateTime;
           attribute boolean pubDate;
  readonly attribute Date valueAsDate;
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
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing on" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠와 구문 컨텐츠에 속합니다.</li>
		<li>구문 컨텐츠의 위치에 사용할 수 있습니다.</li>
		<li>time 요소가 아닌 구문 컨텐츠를 자식 요소로 포함할 수 있습니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>HTML5에서 추가된 요소입니다.</li>
		<li>이 요소는 근대의 날짜와 시간을 기계가 이해할 수 있는 형태로 인코드할 목적을 갖고 있습니다. 예를 들어, 사용자 에이전트는 생일이라든가, 스케줄된 이벤트를 사용자의 달력에 추가할 수 있습니다.</li>
		<li>time 요소는 정확한 날짜나 시간을 성립시킬수 없는 때의 시간을 인코드하려는 목적을 갖고 있지는 않습니다. 예를 들어, 시간대를 인코드하려는 목적으로 이 요소를 사용하는 것은 적합하지 않습니다 : &#34;빅뱅 이후 1 밀리초&#34;, &#34;초기 쥬라기&#34;, &#34;기원전 250년 겨울&#34; 그레고리력 제정 이전의 날짜는 time 요소를 쓰지 않기를 권고합니다. 사용해야 한다면 그레고리력의 날짜와 시간을 변환하는데에 주의를 기울여야 할 것입니다. 그레고리력을 받아들인 시기가 각 나라마다 다르므로 이것은 매우 복잡한 문제입니다 - 어떤 나라는 16세기부터 그레고리력을 받아들였고, 어떤 나라는 20세기 초에야 받아들였습니다.</li>
		<li>IE8 및 이전 버전, time 요소를 지원하지 않습니다.</li>
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