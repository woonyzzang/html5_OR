<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>rowspan 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;table&gt;
			&lt;tr&gt;
			&lt;th&gt;과일이름&lt;/th&gt;
			&lt;th&gt;가격&lt;/th&gt;
			&lt;th&gt;갯수&lt;/th&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td rowspan="2"&gt;사과&lt;/td&gt;
			&lt;td&gt;2,000원&lt;/td&gt;
			&lt;td&gt;5개&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td&gt;10,000원&lt;/td&gt;
			&lt;td&gt;1box(특가)&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-rowspan" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'rowspan',
		item: [{
			desc:'rowspan 속성은 확장될 행의 숫자를 정의합니다.',
			child: [
				{item:'row group 상태는 헤더가 동일한 행 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 행 집합을 가리키는 경우에만 이 상태를 사용 할 수 있습니다.'},
				{item:'td 요소, th 요소 모두 rowspan 속성을 포함 할 수 있습니다.'},
				{item:'이러한 속성을 셀을 오버랩하기 위해서 사용해서는 안됩니다.'}
			]
		}],
		txt: 'rowspan 속성의 속성 값은 0보다 큰 유효한 양의 정수이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>