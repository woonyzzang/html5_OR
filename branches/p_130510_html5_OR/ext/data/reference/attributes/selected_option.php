<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>selected 속성 (option) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;label for="baseball_list"&gt;야구단&lt;/label&gt;
			&lt;select id="baseball_list"&gt;
			&lt;option value="lg" label="LG"&gt;LG 트윈스&lt;/option&gt;
			&lt;option value="doosan" label="두산"&gt;두산 베어스&lt;/option&gt;
			&lt;option value="kia" label="KIA" selected&gt;KIA 타이거즈&lt;/option&gt;
			&lt;option value="sk" label="SK"&gt;SK 와이번스&lt;/option&gt;
			&lt;option value="samsung" label="삼성"&gt;삼성 라이온스&lt;/option&gt;
			&lt;option value="hwanhaw" label="한화"&gt;한화 이글스&lt;/option&gt;
			&lt;option value="nexen" label="넥센"&gt;넥센 히어로즈&lt;/optio&gt;
			&lt;option value="lotte" label="롯데"&gt;롯데 자이언츠&lt;/option&gt;
			&lt;/select&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 속성은 동적으로 설정되거나 제거될 수 있습니다. 렌더링 업데이트가 동시에 일어납니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5//the-button-element.html#attr-option-selected" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'selected',
		meaning: 'option',
		item: [{
			desc:'selected 속성은 선택 여부에 대한 기본 값을 나타냅니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>