<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>rp 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @루비를 지원하지 않는 에이전트에서는 漢 (かん) 字 (じ) 형태로 표시됩니다. -->
			&lt;ruby&gt;
				漢 &lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;かん&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
				字 &lt;rp&gt;(&lt;/rp&gt;&lt;rt&gt;じ&lt;/rt&gt;&lt;rp&gt;)&lt;/rp&gt;
			&lt;/ruby&gt;
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
		elem: 'rp',
		meaning: 'ruby parenthesis',
		item: [{
			desc:'ruby 요소는 루비 주석을 지원하지 않는 사용자 에이전트에서 루비 텍스트를 괄호로 둘러싸서 표현하기 위해 사용됩니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
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