<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>cite 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;
				내가 제일 좋아하는 책은 피터 F. 해밀턴의 &lt;cite&gt;현실 부전&lt;/cite&gt;입니다.
				내가 제일 좋아하는 만화는 스테판 패스티스의 &lt;cite&gt;돼지 목에 진주목걸이&lt;/cite&gt; 입니다.
				내가 가장 좋아하는 트랙은 &lt;cite&gt;자이브 삼바&lt;/cite&gt;의 캐논볼 애덜리 육중창주 입니다.
			&lt;/p&gt;
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
		elem: 'cite',
		meaning: 'cited title of a work',
		item: [{
			desc:'cite 요소는 작품의 제목(예: 책, 음악, 영화, TV 쇼, 회화, 조각 등)을 정의합니다. 이러한 작품은 인용되었거나 자세하게 참조(citation)되었을 수 있고, 혹은 지나가면서 간략히 언급한 것일 수 있습니다.'
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