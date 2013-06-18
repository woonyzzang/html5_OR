<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (menu) : HTML5 Open Reference Guide</title>
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
		<h2 class="s_tit">type 속성 (menu)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>type 속성은 선언되는 메뉴의 종류를 나타냅니다.</dd>
		</dl>

		<h3 class="s_tit">속성 값</h3>
		<p>속성은 context, toolbar, list 3개의 상태를 가집니다. 각각의 상태는 동일한 이름의 키워드에 연결됩니다. 이것은 단순히 커맨드의 목록일 뿐이며, 콘텍스트 메뉴를 선언하거나 툴바를 정의하는 것이 아닙니다.</p>
		<div id="gridAttr"></div>
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @context 상태 -->
			<menu type="context">
			<command label="실행 취소" disabled="disabled" onclick="exeCancel()">
			<command label="잘라내기" disabled="disabled" onclick="objCut()">
			<command label="복사" disabled="disabled" onclick="objCopy()">
			<command label="붙여넣기" onclick="objPaste()">
			<command label="삭제" disabled="disabled" onclick="objDelte()">
			<command label="모두 선택" onclick="allSelect()">
			<command label="사전 추가" onclick="addDic()">
			<command label="요소 검사" onclick="elFind()">
			</menu>

			<!-- @toolbar 상태 -->
			<menu type="toolbar">
			<li>
				<menu label="마이미투">
				<a href="myme2.html">마이미투</a>
				<a href="settings.html">환경설정</a>
				<a href="mobile_setting.html">휴대폰설정</a>
				<button type="button" onclick="logout()">로그아웃</button>
				</menu>
			</li>
			<li>
				<menu label="내친구들">
				<a href="myfriends.html">내친구들</a>
				<a href="fri_request.html">친구신청</a>
				<a href="fri_find.html">친구찾기</a>
				<a href="fri_recommend.html">친구추천</a>
				</menu>
			</li>
			<li><a href="mailet.html">쪽지</a></li>
			<li><a href="noti.html">알림</a></li>
			</menu>

			<!-- @list 상태 -->
			<h3>미투하기</h3>
			<menu>
			<li><input id="limit_opt_recive" type="checkbox" name="limit_me2"><label for="limit_opt_not_delivery">내가 쓴 글은 미투를 받더라도 다른 회원에게 배달되지 않도록 제한합니다.</label></li>
			<li><input id="limit_opt_me2" type="checkbox" name="limit_me2"><label for="">내가 미투한 글이 내 친구들에게 배달되지 않도록 제한합니다.</label></li>
			</menu>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-menu-typed" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','content'],
		data: {'items':[
			{keyword:'context', status:'context', content:'콘텍스트 메뉴를 나타내며, 활성화되어 있을때 상호작용합니다.'},
			{keyword:'toolbar', status:'toolbar', content:'툴바 메뉴를 나타냅니다.'},
			{keyword:'toolbar', status:'list', content:'순서 없는 목록을 나타내는 경우 각각의 커맨드는 li 요소로 표현되며, 각각의 아이템은 사용자가 수행하거나 활성화시킬 수 있는 커맨드를 나타냅니다.<br>자식 요소로 li 요소를 갖지 않는다면 순서 없는 목록이 아닌 경우가 되는데, 이 경우 요소는 사용 가능한 커맨드들을 설명하는 플로우 컨텐츠를 나타냅니다.'}
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
			{header:'설명', dataIndex:'status'},
			{header:'설명', dataIndex:'content', flex:1}
		]
	});
});
</script>
</body>
</html>