<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>base 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;head&gt;
			&lt;title&gt;문서의 제목&lt;/title&gt;
			&lt;base href="index.html" target="_self"&gt;
			&lt;/head&gt;
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
		elem: 'base',
		meaning: 'base',
		item: [{
			desc:'base 요소는 문서의 기본 URL을 명시할 수 있습니다. 기본 URL은 상대 URL을 해석하는 용도로 사용되며 하이퍼링크를 따라갈 때 기본 브라우징 문맥의 이름을 제공하는 용도로 사용됩니다. 이 요소는 기본 URL 정보 이외의 어떠한 것도 나타내지 않습니다.﻿'
		}],
		level: 'Inline-Level',
		category: 'Meta Info'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'href', desc:'문서의 기준이 되는 URL을 지정합니다', href:'http://naver.com'},
			{tit:'target', desc:'하이퍼링크의 대상이 되는 브라우징 콘텍스트 이름이나 키워드를 지정합니다', href:'http://naver.com'}
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