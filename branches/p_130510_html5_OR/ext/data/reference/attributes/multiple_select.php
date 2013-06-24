<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>multiple 속성 (select) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form&gt;
			&lt;fieldset&gt;
			&lt;legend&gt;...&lt;/legend&gt;
				&lt;select multiple="multiple"&gt;
				&lt;option value="A-0"&gt;A-0&lt;/option&gt;
				&lt;option value="B-0"&gt;B-0&lt;/option&gt;
				&lt;optgroup label="C그룹"&gt;
					&lt;option value="C-0"&gt;C-0&lt;/option&gt;
					&lt;option value="C-1"&gt;C-1&lt;/option&gt;
					&lt;option value="C-2"&gt;C-2&lt;/option&gt;
				&lt;/optgroup&gt;
				&lt;/select&gt;
			&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-select-multiple" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'multiple',
		meaning: 'select',
		item: [{
			desc:'multiple 속성은 select 요소에서 여러개의 option 요소를 선택할 수 있습니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>