<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>step 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @범위 컨트롤은 0부터 1까지의 값으로 제한하며 11 단계를 허용합니다. -->
			&lt;p&gt;&lt;label&gt;투명도: &lt;input type="range" name="opacity" min="0" max="1" step="0.1"&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @시간 컨트롤은 하루중 어떤 시간도 선택할 수 있으며, 그 정확도에도 제한이 없습니다. (1 밀리초 단위의 정확도도 상관없으며, 더 세밀해도 좋습니다.) (하지만 일반적으로, 시간 컨트롤은 분 단위 정확도로 제한됩니다.) -->
			&lt;p&gt;&lt;label&gt;출발시간: &lt;input type="time" name="startTime" step="any"&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-step" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'step',
		meaning: 'input',
		item: [{
			desc:'step 속성은 허용되는 값을 제한하여, 값이 예상되는(그리고 요구되는) 단계성을 나타냅니다. max 속성의 값(최대값)은 min 속성의 값(최소값)보다 작을 수 없습니다.'
		}],
		txt: 'step 속성을 명시하였다면, 그 값은 0 이상의 값으로 파싱될 수 있는 유효한 부동소수점 숫자이거나, 혹은 문자열 \"any\"와 매칭되는 ASCII 값이어야 합니다(대소문자는 구분하지 않습니다).'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>