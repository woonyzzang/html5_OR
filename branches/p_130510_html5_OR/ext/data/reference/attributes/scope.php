<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>scope 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th&gt;과일명&lt;/th&gt;
			&lt;th&gt;수확량 평균&lt;/th&gt;
			&lt;th&gt;수확량 최고&lt;/th&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;th scope="rowgroup"&gt;사과&lt;/th&gt;
			&lt;td&gt;10&lt;/td&gt;
			&lt;td&gt;30&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;th&gt;토마토&lt;th&gt;
			&lt;td&gt;25&lt;/td&gt;
			&lt;td&gt;40&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;th scope="rowgroup"&gt;배&lt;/th&gt;
			&lt;td&gt;50&lt;/td&gt;
			&lt;td&gt;20&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;th&gt;딸기&lt;th&gt;
			&lt;td&gt;15&lt;/td&gt;
			&lt;td&gt;40&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-th-scope" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'scope',
		item: [{
			desc:'scope 속성은 셀의 범위를 정합니다.'
		}],
		txt: '나열 속성인 scope 속성은 다섯개의 상태를 가집니다. 그 중 네개는 명시적인 키워드입니다.',
		lst: [
			{item:'row 상태는 헤더가 같은 행에 있는 그 다음 셀들 중 일부에 적용됨을 의미합니다.'},
			{item:'col 상태는 해더가 같은 열에 있는 그 다음 셀들 중 일부에 적용됨을 의미합니다.'},
			{item:'row group 상태는 헤더가 동일한 행 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 행 집합을 가리킬 때만 사용할 수 있습니다.'},
			{item:'col group 상태는 헤더가 동일한 열 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 요소가 열 집합을 가리킬 때만 사용할 수 있습니다.'},
			{item:'속성을 사용하지 않을 경우 기본 값은 auto 상태이며 셀 집합을 문맥에 기초하여 선택하게 됩니다.'}
		]
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>