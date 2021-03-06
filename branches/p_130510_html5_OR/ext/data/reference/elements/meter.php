<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>meter 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;C 드라이브 현황 : &lt;meter min="0" max="1000" value="600"&gt;&lt;/p&gt;

			<!-- @게이지 상태를 텍스트로 작성 -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter min="0" max="1000" value="600"&gt;1000GB 중에 600GB 사용&lt;/meter&gt;&lt;/p&gt;

			<!-- @title 속성을 이용한 단위 작성 -->
			&lt;p&gt;C 드라이브 현황 : &lt;meter min="0" max="1000" value="600" title="gigabyte"&gt;1000GB 중에 600GB 사용&lt;/meter&gt;&lt;/p&gt;
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
		elem: 'meter',
		meaning: 'scalar gauge',
		item: [{
			desc:'meter 요소는 알려진 범위 내에서의 스칼라 측정 또는 분포 비율을 나타냅니다. 예를 들어 디스크 사용 현황, 쿼리 결과의 관련성, 특정 후보에 대한 투표율 등에 사용 될 수 있습니다. 이것을 게이지라고도 합니다.'
		}],
		level: 'Inline-Level',
		category: 'Scope Data'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'value', desc:'게이지에 표시하는 측정 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'min', desc:'범위의 최소 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'max', desc:'범위의 최대 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'low', desc:'\'낮음\' 범위의 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'high', desc:'\'높음\' 범위의 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'optimum', desc:'\'최적\' 범위의 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'form', desc:'명시적으로 폼 소유자를 정의합니다.', href:'http://naver.com'}
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