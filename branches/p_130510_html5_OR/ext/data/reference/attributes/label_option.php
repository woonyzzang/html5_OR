<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>label 속성 (option) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;option value="kia" label="KIA" selected="selected"&gt;KIA 타이거즈&lt;/option&gt;
			&lt;option value="sk" label="SK"&gt;SK 와이번스&lt;/option&gt;
			&lt;option value="samsung" label="삼성"&gt;삼성 라이온스&lt;/option&gt;
			&lt;option value="hwanhaw" label="한화"&gt;한화 이글스&lt;/option&gt;
			&lt;option value="nexen" label="넥센"&gt;넥센 히어로즈&lt;/option&gt;
			&lt;option value="lotte" label="롯데"&gt;롯데 자이언츠&lt;/option&gt;
			&lt;/select&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-option-label" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'label',
		meaning: 'option',
		item: [{
			desc:'label 속성은 option 요소의 레이블을 나타냅니다.'
		}],
		txt: 'label 속성을 사용하게 되면 그 값이 option 요소의 레이블이 되며, 없다면 요소내의 텍스트가 레이블이 됩니다. 둘 다 제공되는 경우 label 속성의 값이 표시됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>