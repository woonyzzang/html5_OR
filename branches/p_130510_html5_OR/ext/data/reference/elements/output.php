<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>output 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form&gt;
			&lt;p&gt;상품 가격: 10,000원&lt;/p&gt;
			&lt;p&gt;
				&lt;label for="num"&gt;구매 수량:&lt;/label&gt;
				&lt;input id="num" name="numb" type="number" min="1" value="1"&gt;
			&lt;/p&gt;
			&lt;p&gt;
				&lt;label&gt;총 상품 금액:&lt;/label&gt;
				&lt;output name="result" onforminput="value= 10000 * numb.valueAsNumber" for="num"&gt;&lt;/output&gt;
			&lt;/p&gt;
			&lt;/form&gt;

			&lt;form oninput="x.value=parseInt(a.value) + parseInt(b.value)"&gt;
			0 &lt;input type="range" id="a" value="50"&gt; 100 + &lt;input type="number" id="b" value="50"&gt; = &lt;output name="x" for="a b"&gt;&lt;/output&gt;
			&lt;/form&gt;
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
		elem: 'optput',
		meaning: 'result of a calculation in a form',
		item: [{
			desc:'output 요소는 계산의 결과를 나타냅니다.'
		}],
		level: 'Inline-Level',
		category: 'From'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'for', desc:'계산의 결과와 계산에 사용되었거나 계산에 영향을 미친 값을 나타내는 요소를 명시적으로 연결시켜줍니다.', href:'http://naver.com'},
			{tit:'form', desc:'폼 소유자와 요소를 명시적으로 연결시켜줍니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'}
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