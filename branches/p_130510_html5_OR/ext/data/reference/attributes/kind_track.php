<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>kind 속성 (track) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;video src="opening.mp4"&gt;
				&lt;track kind="subtitles" src="caption_kr01.srt" srclang="ko" label="한글 자막 (Korean)"&gt;
				&lt;track kind="captions" src="caption_kr02.srt" srclang="ko" label="자세한 한글 자막 (Korean for the Hard of Hearing)"&gt;
				&lt;track kind="subtitles" src="caption_en.srt" srclang="en" label="영어 자막 (English)"&gt;
			&lt;/video&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>동일한 미디어 요소에서 kind 속성, srclang 속성, label 속성의 값이 모두 같은 track 요소를 사용할 수는 없습니다. 이러한 비교는 속성이 양쪽 모두 생략되었을 경우에는 같은 값을 갖는 것으로 간주합니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/video.html#attr-track-kind" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'kind',
		meaning: 'track',
		item: [{
			desc:'kind 속성은 track 요소의 종류를 정의합니다.'
		}],
		txt: '나열 속성입니다.',
		grid: true,
		txt2: '속성이 생략되었을 때 Subtitles 상태가 기본값이 됩니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status','content'],
		data: {'items':[
			{keyword:'subtitles', status:'Subtitles', content:'미디어가 제공하는 언어에 대한 자막 또는 번역, 영상에 오버레이됩니다.'},
			{keyword:'captions', status:'Captions', content:'미디어가 음소거 되거나, 사용자가 청각 장애를 갖고 있는 경우 필요한 대화, 음향 효과, 오디오 정보에 대한 단서와 정보, 자막, 번역. 영상에 오버레이됩니다. 소리를 듣기 힘든 사용자에게 적합하다는 표식이 붙습니다.'},
			{keyword:'descriptions', status:'Descriptions', content:'미디어의 영상 부분에 대한 텍스트 형태의 설명입니다. 시각 장애가 있거나 운전 중인 경우 등 영상을 볼 수 없는 환경에서 제공됩니다. 분리된 오디오 트랙으로 재생됩니다.'},
			{keyword:'chapters', status:'Chapters', content:'미디어를 탐색하기 위한 챕터입니다.'},
			{keyword:'metadata', status:'Metadata', content:'스크립트에서 사용할 트랙입니다.'}
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
			{header:'상태', dataIndex:'status'},
			{header:'내용', dataIndex:'content', flex:1}
		]
	})
});
</script>
</body>
</html>