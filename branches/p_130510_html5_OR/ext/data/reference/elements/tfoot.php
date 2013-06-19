<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>tfoot 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;caption&gt;지출 현황&lt;/caption&gt;
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th scope="col"&gt;과일이름&lt;/th&gt;
			&lt;th scope="col"&gt;가격&lt;/th&gt;
			&lt;th scope="col"&gt;갯수&lt;/th&gt;
			&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tfoot&gt;
			&lt;tr&gt;
			&lt;td&gt;합계&lt;/td&gt;
			&lt;td&gt;12&lt;/td&gt;
			&lt;td&gt;700원&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tfoot&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;td&gt;사과&lt;/td&gt;
			&lt;td&gt;5&lt;/td&gt;
			&lt;td&gt;500원&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td&gt;딸기&lt;/td&gt;
			&lt;td&gt;7&lt;/td&gt;
			&lt;td&gt;200원&lt;/td&gt;
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
		elem: 'tfoot',
		meaning: 'table footer',
		item: [{
			desc:'tfoot 요소는 열의 요약(푸터)으로 구성된 행의 집합을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Table'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'}
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