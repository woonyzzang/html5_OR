<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>formtarget  속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;form&gt;
			&lt;input type="submit" value="등록" formtarget="_blank"&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-formtarget" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'formtarget',
		item: [{
			desc:'formtarget 속성은 유효한 브라우징 문맥 이름이나 키워드를 지정하여 폼 제출 후 결과를 표시할 브라우징 문맥을 지정합니다.'
		},{
			desc:'제출 버튼이고 formtarget 속성을 갖고 있다면, target 속성의 값이 아닌 formtarget 속성의 값으로 처리합니다. formtarget 속성이 명시 되지 않았다면, 폼 소유자의 target 속성의 값으로 처리합니다. 폼 소유자의 target 속성도 명시 되지 않았다면, head 요소의 자식 노드중 하나가 base 요소이고 그 요소에 target 속성이 있을 경우 그 값으로 처리합니다. 그러한 요소도 없다면, 빈 문자열입니다.'
		}],
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'_self', desc:'현재 브라우징 문맥를 나타냅니다.'},
			{keyword:'_parent', desc:'현재 브라우징 문맥에 부모 창이 있다면 그 부모 브라우징 문맥에 결과가 표시됩니다.'},
			{keyword:'_top', desc:'최상위 브라우징 문맥에 결과가 표시됩니다.'},
			{keyword:'_black', desc:'새로운 브라우징 문맥에 결과가 표시됩니다.'},
			{keyword:'사용자 정의', desc:'설정 값이 브라우징 문맥의 이름이 되는 텍스트라면 해당 브라우징 문맥에 결과가 표시됩니다.'}
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
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>