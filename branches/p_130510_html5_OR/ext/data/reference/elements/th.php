<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>th 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;table&gt;
			&lt;caption&gt;표 목록 요약&lt;/caption&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;th scope="row"&gt;셀의 제목을 선언해주세요.&lt;/th&gt;
			&lt;td&gt;셀의 데이터를 선언해주세요.&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'th',
		meaning: 'table header cell',
		item: [{
			desc:'th 요소는 table의 헤더 셀을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Table'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'colspan', desc:'해당 셀이 미치는 범위의 열 수를 지정합니다.', href:'http://naver.com'},
			{tit:'rowspan', desc:'해당 셀이 미치는 범위의 행 수를 지정합니다.', href:'http://naver.com'},
			{tit:'header', desc:'해당 셀에 대응하는 헤더 셀(th 요소)의 id 콘텐츠 속성의 값을 지정합니다.', href:'http://naver.com'},
			{tit:'scope', desc:'해당 헤더 셀이 영향을 미치는 셀의 범위를 나타내는 키워드를 지정합니다.', href:'http://naver.com'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>