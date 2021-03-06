<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>size 속성 (select) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;legend&gt;size 예제&lt;/legend&gt;
				&lt;select size="2"&gt;
				&lt;option value="A"&gt;A&lt;/option&gt;
				&lt;option value="B"&gt;B&lt;/option&gt;
				&lt;option value="C"&gt;C&lt;/option&gt;
				&lt;option value="D"&gt;D&lt;/option&gt;
				&lt;/select&gt;
				&lt;select size="4"&gt;
				&lt;option value="A"&gt;A&lt;/option&gt;
				&lt;option value="B"&gt;B&lt;/option&gt;
				&lt;option value="C"&gt;C&lt;/option&gt;
				&lt;option value="D"&gt;D&lt;/option&gt;
				&lt;/select&gt;
			&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>이 레퍼런스를 작성하는 시점에서 윈도우용 크롬은 두개의 select 요소 모두 4개를 보여주는 버그가 있으므로 주의하시기 바랍니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-select-size" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'size',
		meaning: 'select',
		item: [{
			desc:'size 속성은 사용자에게 보여줄 select 요소 목록의 개수를 정의합니다.'
		}],
		txt: '유효한 양의 정수를 사용합니다.',
		txt1: 'multiple 속성 존재한다면, size 속성의 기본 값은 4입니다. 그렇지 않다면 기본 값은 1입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>