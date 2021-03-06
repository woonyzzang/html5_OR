<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>b 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;article&gt;
				&lt;h1&gt;요구르트 라면 조리법&lt;/h1&gt;
				&lt;ol&gt;
				&lt;li&gt;먼저 &lt;b&gt;면&lt;/b&gt;을 익힌 후 물기를 빼서 차게 식힙니다.&lt;/li&gt;
				&lt;li&gt;&lt;b&gt;복숭아맛 떠먹는 요구르트&lt;/b&gt;를 붓습니다.&lt;/li&gt;
				&lt;li&gt;기호에 따라 &lt;b&gt;오이&lt;/b&gt;, &lt;b&gt;피망&lt;/b&gt; 등 신선한 야채를 넣으면 더욱 좋습니다.&lt;/li&gt;
				&lt;/ol&gt;
			&lt;/article&gt;
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
		elem: 'b',
		meaning: 'bold',
		item: [{
			desc:'b 요소는 폰트와 관련된 요소이며 단순히 글자를 굵게 볼드체로 표현하는 텍스트에 사용합니다.﻿'
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