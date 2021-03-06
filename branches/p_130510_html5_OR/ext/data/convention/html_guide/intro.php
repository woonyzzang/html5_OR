<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>Intro : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- HTML 가이드 설명 -->
	<section>
		<h1 class="s_tit">HTML Guide</h1>

		<dl class="definition">
		<dt>개요</dt>
		<dd>버그를 수정하거나 기능을 개선하려면 자신이 작성한 코드뿐 아니라 다른 개발자가 작성한 코드로 읽어야 한다. 이때 개발자마다 코드 작성 스타일이나 네이밍 방식이 다르면 코드내용을 파악하는데 많은 시간과 비용이 든다. 모든 개발자가 통일된 형식으로 마크업 코드를 작성하기 위해 웹표준 개발의 출발점인 <abbr title="Hyper Text Markup Language">HTML</abbr>에 대한 마크업 컨벤션 사용 가이드 문서를 설명한다.</dd>
		</dl>

		<h2 class="s_tit">가이드 파일 정의</h2>
		<p class="panel info">마크업 컨벤션에서는 세 가지의 개별단위로 나뉘어지는데, 각 항목은 다음과 같다.</p>
		<ul class="lst_type">
		<li>HTML 컨벤션 규칙 : 마크업 개발 가이드를 모아놓은 문서</li>
		<li>HTML 일반 문법 규칙 : 일반적이고 범용적인 HTML 사용문법들을 모아 정리한 문서</li>
		<li>(X)HTML 엘리먼트 : (X)HTML HTML4.01&frasl;XHTML 1.0 의 각 Elements들에 대한 소개와 개별 문법, 사용 사례 등이 정리된 부분의 문서</li>
		<li>HTML5 엘리먼트 : HTML5를 구성하는 컨텐츠들에 대한 소개와, 새로 추가된 Elements들의 문법과 사용 사례들을 정리한 문서</li>
		</ul>
	</section>
	<!-- //HTML 가이드 설명 -->
	<!-- 마크업 컨벤션의 필요성 -->
	<section>
		<h3 class="s_tit">마크업 컨벤션의 필요성</h3>
		<p class="panel info">마크업 개발은 프론트엔드 페이지의 기본 골격을 형성하무로 디자인, 브라우저, 스크립트, 성능, 접근성 등과 긴밀한 관계가 있다. 즉, 마크업 개발을 잘해야 모든 브라우저에서 콘텐츠를 손실 없이, 빠르고 쉽게 사용자에게 전달할수 있다, 마크업 컨벤션은 이러한 조건을 만족시키고자 마크업 개발자가 지켜야할 표준을 제시한다. 또한 유지보수에 드는 비용을 최소화하고자 위해 통해된 코드 작성법을 제시한다. 코드를 최초로 작성한 사람이 끝까지 유지보수할 확률은 매우 낮다. 따라서 최초 개발자가 아닌 사람도 코드를 빠르고 정확하게 이해할 수 있게 작성하는 것은 코드의 유지보수 비용을 절감하고 업무 효율을 높이는데 결정적인 역활을 한다.<br>적어도 한프로젝트의 마크업 코드는 같은 마크업 컨벤션에 따라 작성해야 한다. 마크업 컨벤션을 준수하면 프로젝트 구성원 사이에 코드를 공유하기도 쉬워지고, 일관성 있게 코드를 작성할 수 있다.</p>
	</section>
	<!-- //마크업 컨벤션의 필요성 -->
	<!-- 마크업 컨벤션 요소 -->
	<section>
		<h3 class="s_tit">마크업 컨벤션 요소</h3>
		<h4 class="tit_cont">네이밍 규칙</h4>
		<p>네이밍 규칙은 레이아웃, 객체, 이미지, 폴더 파일의 이름을 작성하는 규칙이다. 이해하기 쉬운 이름으로 작성해야 코드를 쉽게 파악할 수 있다.</p>

		<h4 class="tit_cont">HTML 코드 작성 규칙</h4>
		<dl class="category v2">
		<dt>들여쓰기</dt>
		<dd>HTML 코드를 작성할 때 코드의 가독성을 높이기 위해 왼쪽 끝에서 오른쪽으로 일정한 간격만큰 띄어 쓴다. 들여쓰기를 하면 전체 HTML 구조를 쉽게 파악할 수 있다.</dd>
		<dt>빈줄</dt>
		<dd>HTML 코드의 빈 줄은 코드 그룹의 영역을 구분하는데 사용한다.</dd>
		<dt>DTD 및 인코딩</dt>
		<dd><abbr title="Document Type Definition">DTD</abbr>는 <abbr title="Standard Generalized Markup Language">SGML</abbr>계열 마크업 언어의 문서 타입을 정의하는 것으로써, 해당 HTML 문서가 어떤 버전의 HTML로 작성됐고, 어떤 규칙으로 내용을 기술하고 어떤 요소와 속성, 속성값을 지정할 수 있는지 정의한다. 또한 인코딩을 선언해서 문서에서 사용되는 문자 코드 세트를 지정한다. DTD와 인코딩 선언은 HTML 문서가 브라우저에서 바르게 해석될 수 있게 한다.</dd>
		<dt>주석</dt>
		<dd>HTML 코드의 주석은 코드 그룹을 구분하거나, 코드의 수정과 삭제를 표시하거나, 개발자가 참고해야 하는 사항을 기술한다.</dd>
		<dt>HTML 요소</dt>
		<dd>HTML 요소를 작성할 때는 반드시 선언해야 하는 속성과 선택적으로 사용할 수 있는 속성을 설명하고 선언 순서를 제시하여 코드 품질을 유지한다.</dd>
		</dl>
	</section>
	<!-- //마크업 컨벤션 요소 -->
</article>
</body>
</html>