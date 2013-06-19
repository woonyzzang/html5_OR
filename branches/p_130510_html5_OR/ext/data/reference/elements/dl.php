<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>dl 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;dl&gt;
			&lt;dt&gt;World Wide Web Consortium&lt;/dt&gt;
			&lt;dd&gt;XHTML1.1 W3C Recommendation&lt;/dd&gt;
			&lt;dd&gt;XHTML1.0 W3C Working Draft&lt;/dd&gt;
			&lt;dd&gt;XHTML2.0 W3C Working Draft&lt;/dd&gt;
			&lt;dd&gt;XHTML1.0 Document Type Definitions&lt;/dd&gt;
			&lt;dd&gt;HTML 4.01 Specification&lt;/dd&gt;
			&lt;/dl&gt;
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
		elem: 'dl',
		meaning: 'description list',
		item: [{
			desc:'dl 요소는 어떠한 정의가 내려진 목록을 나타낼 때 사용되며, 반드시 dt(정의 목록의 항목들을 나타냅니다), dd(정의 목록의 항목들을 설명합니다) 요소와 함께 사용해야 합니다.'
		}],
		level: 'Block-Level',
		category: 'List'
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