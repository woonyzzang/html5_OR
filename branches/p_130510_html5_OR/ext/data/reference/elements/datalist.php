<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>datalist 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;input type="text" list="browsers"&gt;
			&lt;datalist id="browsers"&gt;
			&lt;option value="Internet Explorer"&gt;인터넷 익스플로러&lt;/option&gt;
			&lt;option value="Firefox"&gt;파이어 폭스&lt;/option&gt;
			&lt;option value="Chrome"&gt;구글 크롬&lt;/option&gt;
			&lt;option value="Opera"&gt;오페라&lt;/option&gt;
			&lt;option value="Safari"&gt;사파리&lt;/option&gt;
			&lt;/datalist&gt;
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
		elem: 'datalist',
		meaning: 'predefined options for other controls',
		item: [{
			desc:'datalist 요소는 다른 컨트롤에서 사용할 수 있도록 input 요소에 대해 미리 정의된 옵션 집합을 나타냅니다. 요소의 내용은 미리 정의된 옵션을 나타내는 option 요소와 섞여서 자동 완성기능을 제공하며 입력 데이터로 사용자는 미리 정의 된 옵션의 드롭 다운 목록이 표시됩니다.'
		}],
		level: 'Inline-Level',
		category: 'Structural Elements'
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