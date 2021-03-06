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
		<h1 class="s_tit">CSS Guide</h1>

		<dl class="definition">
		<dt>개요</dt>
		<dd>모든 개발자가 통일된 형식으로 CSS 코드를 작성하기 위해 기본 작성 규칙과 인코딩 선언방법, 선택자, 속성 등의 작성 규칙, 파일 분기 방법의 CSS 컨벤션 가이드 문서를 설명한다.</dd>
		</dl>

		<h2 class="s_tit">가이드 파일 정의</h2>
		<p class="panel info">CSS 가이드에서는 세 가지의 개별단위로 나뉘어지는데, 각 항목은 다음과 같다.</p>
		<ul class="lst_type">
		<li>CSS 컨벤션 규칙 : CSS 개발 가이드를 모아놓은 문서 (웹브라우저 및 기술향상 또는 내부지침 버전 향상 등으로 지속적으로 업데이트 될 수 있다.)</li>
		<li>CSS 일반 문법 규칙 : 일반적인 CSS 사용 문법을 정리한 문서</li>
		<li>CSS 속성 : CSS의 속성들의 설명 및 정리된 문서</li>
		<li>CSS3 속성: CSS Level3 대한 소개와 문법을 정리한 문서</li>
		<li>IR기법: 이미지 대치기법으로 널리 알려진 다양한 기법들이 소개 및 정리된 문서</li>
		</ul>
	</section>
	<!-- //HTML 가이드 설명 -->
	<!-- CSS 컨벤션 요소 -->
	<section>
		<h3 class="s_tit">CSS 컨벤션 요소</h3>
		<h4 class="tit_cont">CSS 코드 작성 규칙</h4>
		<dl class="category v2">
		<dt>들여쓰기</dt>
		<dd>CSS 코드는 들여쓰기를 하지 않는다.</dd>
		<dt>공백</dt>
		<dd>CSS 코그는 공백을 최소화한다.</dd>
		<dt>빈줄</dt>
		<dd>CSS 코드의 빈줄은 코드 그룹의 영역을 구분하는데 사용한다.</dd>
		<dt>줄 바꿈</dt>
		<dd>CSS 코드의 가독성을 위한 줄 바꿈은 하지 않는다.</dd>
		<dt>인코딩</dt>
		<dd>CSS의 인코딩은 HTML의 인코딩과 동일하게 선언해서 HTML 문서가 브라우저에서 바르게 해석될 수 있게 한다.</dd>
		<dt>선택자</dt>
		<dd>선택자 버그가 발생하지 않도록 사용 규칙을 준수한다.</dd>
		<dt>속성</dt>
		<dd>속성 선언 순서를 준수하여 개발자가 코드를 쉽게 파악할 수 있게 하며, CSS 코드 최적화를 위해 속성값을 축약해서 사용하고 약식 속성을 허용 번위에 맞게 사용한다.</dd>
		<dt>z-index</dt>
		<dd>z-index 속성값을 범위에 맞게 사용해서 객체가 브라우저에서 바르게 표현되게 한다.</dd>
		<dt>핵</dt>
		<dd>크로스 브라우징을 휘해 제시된 핵(hack)에 한해 최소한의 사용을 허용한다.</dd>
		<dt>CSS 선언 타입</dt>
		<dd>상황에 알맞은 CSS 선언 타입을 선택한다.</dd>
		<dt>주석</dt>
		<dd>CSS 코드의 주석은 코드 그룹을 구분하거나, 코드의 수정과 삭제를 표시하거나, 개발자가 참고해야 하는 사항을 기술한다.</dd>
		</dl>
	</section>
	<!-- //CSS 컨벤션 요소 -->
	<!-- CSS 컨벤션 용어 -->
	<section>
		<h3 class="s_tit">CSS 컨벤션 용어</h3>
		<h4 class="tit_cont">요소(element)</h4>
		<p>HTML 문서를 구성하는 요소를 의미한다. 일반적으로 시작 태그, 내용, 종료 태그로 구성된다.</p>

		<h4 class="tit_cont">속성(attribute)</h4>
		<p>요소에 부여할 수 있는 특성을 의미한다. 기본값이 설정돼 있으나 속성을 선언해서 다른 값으로 설정할 수 있다.</p>

		<h4 class="tit_cont">선택자(selecter)</h4>
		<p>요소에 CSS 스타일을 적용하기 위한 패턴이다. 가이드 문서에서 언급하는 선택자의 종류는 다음 표와 같다.</p>
		<table class="tb_grid">
		<caption>[ 선택자 종류 ]</caption>
		<thead>
		<tr>
		<th scope="col">이름</th>
		<th scope="col">패턴 예</th>
		<th scope="col">설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>공통 선택자</td>
		<td>*</td>
		<td>어떤 요소와도 일치함</td>
		</tr>
		<tr>
		<td>타입 선택자</td>
		<td>div</td>
		<td>해당 요소와 일치함</td>
		</tr>
		<tr>
		<td>하위 선택자</td>
		<td>div p</td>
		<td>해당 요소 하위의 모든 해당 요소와 일치함</td>
		</tr>
		<tr>
		<td>자식 선택자</td>
		<td>div &gt; p</td>
		<td>해당 요소의 인접 자식 요소와 일치함</td>
		</tr>
		<tr>
		<td>클래스 선택자</td>
		<td>div.class</td>
		<td>해당 요소의 class 속성값과 일치함</td>
		</tr>
		<tr>
		<td>아이디 선택자</td>
		<td>div#id</td>
		<td>해당 요소의 id 속성값과 일치함</td>
		</tr>
		</tbody>
		</table>

		<h4 class="tit_cont">속성(property)</h4>
		<p>요소에 부여할 CSS 스타일 특성을 의미한다. 기본값이 설정돼 있으나 속성을 선언해서 다른 값으로 설정할 수 있다. 각 속성 단위는 세미클론(;)으로 구분해서 선언한다.</p>

		<h4 class="tit_cont">속성 값(value)</h4>
		<p>속성에 부여하는 값으로 콜론(:)으로 구분해서 선언한다.</p>

		<h4 class="tit_cont">예약어(reserved word)</h4>
		<p>가이드 문서에서 사용하는 예약어는 일반적인 의미와 다르게 사용된다. 문서에서 예약어는 객체, 이미지, 파일 및 폴더의 네이밍 시 의미를 일관되게 표현하고자 미리 지정해 놓은 일종의 언어 규칙을 의미한다.</p>
	</section>
	<!-- //CSS 컨벤션 용어 -->
</article>
</body>
</html>