<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>header 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
				&lt;header&gt;
					&lt;h1&gt;블로그&lt;/h1&gt;
					&lt;nav&gt;
						&lt;ul&gt;
						&lt;li&gt;&lt;a href="#"&gt;메뉴1&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;메뉴2&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href="#"&gt;메뉴3&lt;/a&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/nav&gt;
				&lt;/header&gt;
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

<script src="<?php echo PATH ; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'header',
		meaning: 'header for a section or page',
		item: [{
			desc:'header 요소는 문서의 머리말을 나타내는 요소로써 사이트 전체의 머리말이 될 수도 있고, 블로그 포스트 같은 글의 머리말이 될 수도 있습니다. 해당 문서의 소개, 제목 또는 네비게이션 등의 그룹을 나타냅니다.'
		}],
		level: 'Block-Level',
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