<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>li 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @순서형 목록 -->
			&lt;ol&gt;
			&lt;li&gt;웹표준&lt;/li&gt;
			&lt;li&gt;HTML&lt;/li&gt;
			&lt;li&gt;CSS&lt;/li&gt;
			&lt;/ol&gt;

			<!-- @비순서형 목록 -->
			&lt;ul&gt;
			&lt;li&gt;JavaScript&lt;/li&gt;
			&lt;li&gt;PHP&lt;/li&gt;
			&lt;li&gt;jQuery&lt;/li&gt;
			&lt;/ul&gt;

			<!-- @메뉴형 목록 -->
			&lt;menu&gt;
			&lt;li&gt;썸네일 유형&lt;/li&gt;
			&lt;li&gt;목록 유형&lt;/li&gt;
			&lt;/menu&gt;
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
		elem: 'li',
		meaning: 'list item',
		item: [{
			desc:'li 요소는 목록의 아이템을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'List'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'value', desc:'ol 요소의 자식일 때 사용되며 반드시 유효한 정수값이어야 합니다.', href:'http://naver.com'}
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