<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>accesskey 속성 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<h2 class="s_tit">accesskey 속성</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>accesskey 속성은 사용자 에이전트에 의해 요소를 활성화시키거나 포커스를 갖게끔 하는 단축키를 생성하기 위한 가이드로 사용됩니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>공백문자로 구분된 토큰(token)이며, 유니코드 값이어야 합니다.</p>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<dl>
			<dt><label for="uid">아이디</label></dt>
			<dd class="uid"><input name="id" type="text" id="uid" maxlength="25" class="input_text" title="아이디" accesskey="L"></dd>
			<dt><label for="upw">비밀번호</label> </dt>
			<dd class="upw"><input name="pw" type="password" id="upw" maxlength="16" class="input_text" title="비밀번호"></dd>
			</dl>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>Accesskey 속성은명세에 Ctrl + Alt 조합키로 사용될수 있다고 명시되어 있지만, 사용자 에이전트별로 차이가 있을 수 있습니다. 또한, 윈도우와 매킨토시에서의 조합키도 다를 수도 있습니다.</p>
		<div id="gridAttr"></div>
		<p>오페라 브라우저는 Shift + Esc 조합키를 누르면 접근키 목록이 별도의 팝업으로 나타납니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/editing.html#the-accesskey-attribute" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['browser','windows','mac'],
		data: {'items':[
			{browser:'Internet Explorer', windows:'alt', mac:'-'},
			{browser:'Firefox 2+', windows:'Alt + Shift', mac:'Ctrl'},
			{browser:'Opera', windows:'Shift + Esc', mac:''},
			{browser:'Safari 3+', windows:'Alt', mac:'Ctrl'},
			{browser:'Google Chrome', windows:'Alt ( + Shift)', mac:'Ctrl + Opt'}
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
		title: '주요 브라우저별, 윈도우, 매킨토시 조합키 목록',
		store: storeData,
		columns: [
			{header:'웹 브라우저', dataIndex:'browser', flex:1},
			{header:'윈도우', dataIndex:'windows', flex:1},
			{header:'맥킨토시', dataIndex:'mac', flex:1}
		]
	})
});
</script>
</body>
</html>