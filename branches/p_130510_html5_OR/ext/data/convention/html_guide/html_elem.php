<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>(X)HTML Elements : <?php echo TITLE_CONVENTION_HTML; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- (X)HTML Element 가이드 -->
	<section>
		<h1 class="s_tit">(X)HTML Elements</h1>
		<div id="docSummary" class="idx_summary">
			<div class="inner" style="display:none">
				<h2 class="blind">(X)HTML 엘리먼트 색인</h2>
				<ul>
				<li><a href="#summary1" rel="bookmark">전역 구조화 Element</a></li>
				<li><a href="#summary2" rel="bookmark">제목, 문단, 구분선 Element</a></li>
				<li><a href="#summary3" rel="bookmark">목록 Element</a></li>
				<li><a href="#summary4" rel="bookmark">표 Element</a></li>
				<li><a href="#summary5" rel="bookmark">링크, 이미지, 이미지맵</a></li>
				<li><a href="#summary6" rel="bookmark">텍스트</a></li>
				<li><a href="#summary7" rel="bookmark">그룹</a></li>
				<li><a href="#summary8" rel="bookmark">폼</a></li>
				</ul>
				<a href="#none" data-btn="smr" class="btn_lst clse">목차닫기</a>
			</div>
			<a href="#none" data-btn="smr" class="btn_lst open">목차보기</a>
		</div>

		<dl class="definition">
		<dt>(X)HTML 엘리먼트 규칙</dt>
		<dd>(X)HTML HTML4.01&frasl;XHTML 1.0 의 각 엘리먼트들의 구조 대한 소개와 개별 문법 및 사용 방법을 설명한다.</dd>
		</dl>
	</section>
	<!-- //(X)HTML Element 가이드 -->
	<!-- 전역 구조화 Element -->
	<section id="summary1">
		<h3 class="s_tit">전역 구조화 Element</h3>
		<dl class="category">
		<dt>&lt;html&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>class Attribute 사용은 하지 않는다.</li>
			<li>XHTML dtd 사용시에는 다음과 같이 XML namespace 및 lang attribute를 선언해준다.
				<pre class="brush:html">&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko"&gt;</pre>
			</li>
			</ul>
		</dd>
		<dt>&lt;head&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>meta, title, link, style, script 순으로 Element 를 선언한다.</li>
			</ul>
		</dd>
		<dt>&lt;title&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>현재 페이지의 제목을 선언한다.</li>
			</ul>
		</dd>
		<dt>&lt;link&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>rel, type, href 순서로 attribute를 선언한다.
				<pre class="brush:html">&lt;link rel="stylesheet" type="text/css" href="common.css"&gt;</pre>
			</li>
			</ul>
		</dd>
		<dt>&lt;style&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>type attribute를 선언한다.</li>
			<li>하위에 선언이 되는 CSS는 &lt;style&gt; Element보다 1depth 들여쓰지 않는다.
				<pre class="brush:html">
					&lt;style type="text/css"&gt;
					body{}
					...
					&lt;/style&gt;
				</pre>
			</li>
			</ul>
		</dd>
		<dt>&lt;script&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>type, src 순서로 attribute를 선언한다</li>
			<li>하위에 선언이 되는 CSS는 &lt;style&gt; Element보다 1depth 들여쓰지 않는다.</li>
			<li>script의 선언 위치는 head내에 선언하는 것을 원칙으로 하되, 성능상의 이슈 및 특별한 경우는 선언위치를 변경한다.
				<pre class="brush:html">
					&lt;script type="text/javascript" src="init.js"&gt;&lt;/script&gt;
					&lt;script type="text/javascript"&gt;
					var $div = document.getElementsByTagName('div');
					...
					&lt;/script&gt;
				</pre>
			</li>
			</ul>
		</dd>
		<dt>&lt;body&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>body Element에는 다른 attribute를 사용하지 않는 것을 원칙으로 한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //전역 구조화 Element -->
	<!-- //제목, 문단, 구분선 Element -->
	<section id="summary2">
		<h3 class="s_tit">제목, 문단, 구분선 Element</h3>
		<dl class="category">
		<dt>&lt;h1&gt;~&lt;h6&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> HTML 구조상 문서 내부의 컨텐츠 제목을 정의한다.</li>
			<li><strong>사용:</strong> 각 부분별로 논리적인 규칙에 맞추어 Heading의 계층을 구성한다.</li>
			</ul>
		</dd>
		<dt>&lt;P&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 텍스트의 문단 요소로 사용한다.</li>
			<li><strong>사용:</strong> 의미상 문단을 구분하기 위한 용도로 사용하며, 시작 효과를 위해서나 문단으로써 의미가 없는 부분에 사용 하지 않는다.</li>
			</ul>
		</dd>
		<dt>&lt;hr&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 문서 내에 구분선을 표시한다.</li>
			<li><strong>사용:</strong> 의미상으로 컨텐츠간의 경계를 표시할때 사용한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //제목, 문단, 구분선 Element -->
	<!-- 목록 Element -->
	<section id="summary3">
		<h3 class="s_tit">목록 Element</h3>
		<dl class="category">
		<dt>&lt;li&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 목록에서 목록 아이템을 표시한다.</li>
			<li><strong>사용:</strong> 특별한 경우(중첩 메뉴등)가 아니라면 li 안에 다른 목록 Element 작성을 금한다.</li>
			</ul>
		</dd>
		<dt>&lt;ul&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 순서가 정의되지 않는 목록을 작성한다.</li>
			<li><strong>사용:</strong> 자식 element로는 li만 포함이 허용된다.</li>
			</ul>
		</dd>
		<dt>&lt;ol&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 순서가 정의된 목록을 작성한다.</li>
			<li><strong>사용:</strong> ul과 마찬가지로 자식 element로는 li만 포함이 허용된다.</li>
			</ul>
		</dd>
		<dt>&lt;dl&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>정의형(사전형)의 목록을 작성한다. 포함하는 아이템으로 dt및 dd만 포함 할 수 있다.</li>
			</ul>
		</dd>
		<dt>&lt;dt&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>정의형 목록의 타이틀을 뜻한다.</li>
			</ul>
		</dd>
		<dt>&lt;dd&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>정의형 목록의 설명을 뜻한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //목록 Element -->
	<!-- 표 Element -->
	<section id="summary4">
		<h3 class="s_tit">표 Element</h3>
		<p>표는 다음과 같이 작성한다.</p>
		<pre class="brush:html">
			&lt;table cellspacing="0" cellpadding="0" summary="날짜별로 부산국제영화제 롯데시네마 센텀시티점에서 상영하는 영화의 제목과 상영시간, 예매 링크를 안내합니다"&gt;
			&lt;caption&gt;롯데시네마 센텀시티점 BIFF 상영시간표&lt;/caption&gt;
			&lt;colgroup&gt;
			&lt;col width="113"&gt;
			&lt;col width="232"&gt;
			&lt;col width="261"&gt;
			&lt;col width="63"&gt;
			&lt;/colgroup&gt;
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th scope="col"&gt;날짜&lt;/th&gt;
			&lt;th scope="col"&gt;영화명&lt;/th&gt;
			&lt;th scope="col"&gt;상영시간&lt;/th&gt;
			&lt;th scope="col"&gt;예매&lt;/th&gt;
			&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;th scope="row" rowspan="1"&gt;10월6일&lt;/th&gt;
			&lt;td&gt;15세 이상 관람가 오직 그대만&lt;/td&gt;
			&lt;td&gt;20:00&lt;/td&gt;
			&lt;td&gt;예매&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;
		</pre>

		<dl class="category">
		<dt>&lt;table&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>특이한 경우가 아니라면 레이아웃을 표현하기 위해 사용하지 않는다.</li>
			<li>cellspacing, cellpadding, summary 순서로 attribute를 선언한다.</li>
			<li>summary는 표의 내용을 요약하여 표기하되, th에 들어가있는 내용들을 전부 포함하여야 한다.</li>
			</ul>
		</dd>
		<dt>&lt;caption&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>표의 제목을 표현한다.</li>
			</ul>
		</dd>
		<dt>&lt;colgroup&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>td엘리먼트들을 열로 묶어 제어할 때 선언한다.</li>
			</ul>
		</dd>
		<dt>&lt;col&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>테이블의 각 열의 너비 지정을 위해 선언한다.</li>
			</ul>
		</dd>
		<dt>&lt;thead&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>항목의 제목을 묶을때 사용한다.</li>
			<li>thead 자식 element는 th만 와야하며, td가 포함이 되는 경우에는 thead로 묶지 않는다.</li>
			</ul>
		</dd>
		<dt>&lt;tfoot&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>테이블의 하단을 묶을때 사용한다.</li>
			<li>thead와 tbody 사이에 위치하여야 하며, 필수항목은 아니다.</li>
			<li>※ 테이블을 인쇄할때 테이블이 여러페이지에 걸친 경우, 모든 페이지에 thead와 tfoot이 반복해서 출력된다.</li>
			</ul>
		</dd>
		<dt>&lt;tbody&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>테이블의 본문을 묶을때 사용한다.</li>
			</ul>
		</dd>
		<dt>&lt;tr&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>각 테이블의 행을 표시한다. 자식 element로는 th 또는 td만이 위치할 수 있다.</li>
			</ul>
		</dd>
		<dt>&lt;th&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>테이블의 제목 셀을 표시한다 scope attribute로 현재의 셀이 어느 셀의 제목인지 범위를 명시해준다.</li>
			</ul>
		</dd>
		<dt>&lt;td&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li>각 테이블의 셀 하나하나를 표시한다.</li>
			</ul>
		</dd>
		<dt>&lt;td&gt;, &lt;th&gt; 공통 attribute</dt>
		<dd>
			<ul class="lst_type">
			<li>rowspan: 수직 방향으로 셀을 결합한다.</li>
			<li>colspan: 수평방향으로 셀을 결합한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //표 Element -->
	<!-- 링크, 이미지, 이미지맵 -->
	<section id="summary5">
		<h3 class="s_tit">링크, 이미지, 이미지맵</h3>
		<dl class="category">
		<dt>&lt;a&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 텍스트 및 이미지에 하이퍼텍스트를 설정한다.</li>
			<li><strong>사용:</strong> 인라인 요소로, 인라인요소와 텍스트를 포함 할 수 있다.</li>
			<li><strong>속성:</strong>
				<ul>
				<li>href: 하이퍼링크 주소 지정</li>
				<li>id, name: 앵커 식별자 지정</li>
				<li>title: 하이퍼링크의 보충 정보를 표시. 대다수의 브라우저에서 툴팁으로 표시된다.</li>
				<li>target: 하이퍼링크가 열릴 대상을 지정한다. _blank&frasl;_liarent&frasl;_self&frasl;_toli&frasl;각 프레임의 name.</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;img&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 이미지를 삽입한다.</li>
			<li><strong>사용:</strong> 인라인 요소이며, 빈 요소로 종료태그가 없는 요소이다.</li>
			<li><strong>속성:</strong>
				<ul>
				<li>src: 삽입할 이미지의 파일명 혹은 url을 지정한다.</li>
				<li>alt(Alternative Text): 이미지의 대체텍스트를 지정한다. IE에서는 툴팁으로 표시가 된다.</li>
				<li>width, height: 이미지의 가로&frasl;세로 크기를 지정한다.</li>
				<li>페이지 렌더링시 width, height 속성의 값만큼 영역을 확보하고 그 이외의 부분에 다른 부분을 표시함으로 이미지가 없어서 발생할 수있는 레아아웃 상의 어긋남을 사전에 방지하는 효과를 줄 수 있다.</li>
				<li>border: 이미지 테두리의 두께를 설정한다. 의미가 없는 표현만을 위한 속성이므로 CSS로 컨트롤 하는 것을 권장한다.</li>
				<li>longdesc: 이미지에 대한 자세한 설명이 있는 페이지의 경로를 지정한다. alt 속성을 보완하는 용도로 사용한다.</li>
				<li>align, hspace, vspace: 수평/수직 위치 및 상하/좌우 여백을 지정한다. 의미가 없는 표현만을 위한 속성이므로 CSS로 컨트롤 하는 것을 권장한다.</li>
				<li>usemap: 이미지맵의 name속성과 매칭시켜 이미지맵을 사용하게한다.</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;map&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 블록요소로 이미지맵을 정의한다.</li>
			<li><strong>사용:</strong> name, id속성. img요소의 usemap 속성값과 name속성의 값을 매칭시켜 연관시킴
				<p class="panel info">
					<strong>이미지 맵이란?</strong>
					이미지의 일부 영역에 링크를 두어 사용자에게 해당 정보를 제공할 수 있는 페이지로 이동하도록 만드는 기법
				</p>
			</li>
			</ul>
		</dd>
		<dt>&lt;area&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 이미지맵의 영역을 지정한다.</li>
			<li><strong>사용:</strong> 빈 요소로 종료태그가 없다.</li>
			<li><strong>속성:</strong>
				<ul>
				<li>href: URL을 지정한다.</li>
				<li>alt: 이미지의 alt속성처럼 해당 하이퍼텍스트에 대한 대체 텍스트를 지정한다.</li>
				<li>shape: 영역의 형태를 지정 (default &frasl; rect &frasl; circle &frasl; poly)</li>
				<li>border: 이미지 테두리의 두께를 설정한다. 의미가 없는 표현만을 위한 속성이므로 CSS로 컨트롤 하는 것을 권장한다.</li>
				<li>coords: 영역의 좌표 (이미지의 좌측 상단을 원점 0,0 으로 기준)를 쉼표로 구분하여 지정한다. shape속성값에 따라 지정방법이 조금씩 다르다.</li>
				<li>usemap: 이미지맵의 name속성과 매칭시켜 이미지맵을 사용하게한다.
					<ul>
					<li>- rect : 사각형의 완쪽 상단 점 x,y좌표, 오른쪽 하단 점 x,y좌표</li>
					<li>- circle : 원 중심의 x,y좌표, 원의 반지름</li>
					<li>- poly : 첫번째 각의 x,y좌표, 두번째각의 x,y좌표...</li>
					</ul>
				</li>
				</ul>
			</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //링크, 이미지, 이미지맵 -->
	<!-- 텍스트 -->
	<section id="summary6">
		<h3 class="s_tit">텍스트</h3>
		<dl class="category">
		<dt>&lt;em&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 일반적인 강조의 의미를 갖는다.</li>
			<li><strong>사용:</strong> 특정 텍스트를 강조하는 인라인 요소이다. 보통 이탤릭 스타일을 기본 스타일로 갖는다.</li>
			</ul>
		</dd>
		<dt>&lt;strong&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 강한 강조의 의미를 갖는다.</li>
			<li><strong>사용:</strong> 특정 텍스트를 강조하는 인라인 요소이다. 보통 볼드체의 스타일을 기본 스타일로 갖는다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //텍스트 -->
	<!-- 그룹 -->
	<section id="summary7">
		<h3 class="s_tit">그룹</h3>
		<ul class="lst_type">
		<li>그룹화 (grouping element)요소이다.</li>
		<li>주로 id, class속성으로 CSS를 적용하기 위해 사용한다.</li>
		<li>무분별한 그룹화 사용은 지양해야한다.</li>
		</ul>

		<dl class="category">
		<dt>&lt;div&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 블록요소로, 요소들을 그룹화할때 사용한다.</li>
			<li><strong>사용:</strong> 블록요소 및 인라인요소, 텍스트를 포함한다.</li>
			</ul>
		</dd>
		<dt>&lt;span&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 인라인요소로, 인라인요소들을 그룹화할때 사용한다.</li>
			<li><strong>사용:</strong> 인라인 요소와 텍스트를 포함한다.</li>
			</ul>
		</dd>
		</dl>
	</section>
	<!-- //그룹 -->
	<!-- 폼 -->
	<section id="summary8">
		<h3 class="s_tit">폼</h3>
		<p>일반적인 폼의 경우 아래와 같이 작성을 한다.</p>
		<pre class="brush:html">
			&lt;form action="#"&gt;
			&lt;fieldset&gt;
			&lt;legend&gt;검색&lt;/legend&gt;
				&lt;label for="tfSearch"&gt;키워드 입력&lt;/label&gt;
				&lt;input type="text" id="tfSearch" name="tfSearch" alt="검색어 입력창"&gt;
				&lt;input type="submit" value="검색"&gt;
			&lt;/fieldset&gt;
			&lt;/form&gt;
		</pre>

		<dl class="category">
		<dt>&lt;form&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 폼의 최상위 요소로 폼을 구성한다.
				<ul>
				<li>action: 폼을 전송할 URL 지정</li>
				<li>method: 폼의 데이터를 전송하는 방법
					<ol>
					<li>get: 간단한 데이터 전송시 사용하며, url에 파라미터 값을 붙여 전송한다. 데이터가 URL에 그대로 노출되어 보안유지가 안된다.</li>
					<li>post: http헤더에 포함되어 서버로 전송이 되며, 일정크기 이상의 데이터 전송시 사용한다. 데이터가 URL에 노출되는 get 방식에 비해서 보안유지에 그나마 유리하다.</li>
					</ol>
				</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;fieldset&gt;, &lt;legend&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 여러 폼 컨트롤을 폼 안에서 그룹화 하는 요소</li>
			<li><strong>주요속성:</strong>
				<ul>
				<li>fieldset 요소로 그룹화 하는 범위를 정의한 후 legend 요소로 그룹화한 범위의 제목을 표시</li>
				<li>legend요소는 fieldset 요소의 바로 뒤에 한번만 사용 가능하다.</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;label&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 폼 컨트롤에 레이블을 정의하는 요소</li>
			<li><strong>사용:</strong>
				<ul>
				<li>label요소에 특정 텍스트를 레이블로 정의 함으로써 컨트롤과 관련시킬 수 있으며 동기화가 가능하다 (레이블과 체크박스 중 어느쪽을 선택해도 체크박스가 선택됨)</li>
				<li>명시적 레이블 부여
					<ul>
					<li>- label 요소의 for 속성에 해당 컨트롤의 id속성과 같은 값을 지정</li>
					<li>- 하나의 컨트롤에 복수의 레이블을 지정 가능하다.</li>
					<li>- label 요소와 컨트롤은 인접 할 필요가 없다.</li>
					</ul>
					<pre class="brush:html">
						&lt;label for="male"&gt;남자&lt;/label&gt; &lt;input type="radio" name="sex" id="male" value="m"&gt;
						&lt;label for="female"&gt;여자&lt;/label&gt; &lt;input type="radio" name="sex" id="female" value="f"&gt;
					</pre>
				</li>
				<li>암묵적 레이블 부여
					<ul>
					<li>- label 요소의 범위에 텍스트와 컨트롤을 포함하는 방법</li>
					<li>- 하나의 컨트롤에 복수의 레이블 지정이 불가능하다.</li>
					<li>- 텍스트와 컨트롤은 반트시 label요소에 포함되어야 한다.</li>
					</ul>
					<pre class="brush:html">
						&lt;label&gt;남자 &lt;input type="radio" name="sex" id="male" value="m"&gt;&lt;/label&gt;
						&lt;label&gt;여자 &lt;input type="radio" name="sex" id="female" value="f"&gt;&lt;/label&gt;
					</pre>
				</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;input&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 인라인 요소이며 빈요소로, 폼 안에 기본적인 컨트롤을 생성한다.</li>
			<li><strong>type 속성:</strong>
				<ul>
				<li>text: 일반 텍스트 입력필드)</li>
				<li>password
					<ul>
					<li>- 비밀번호 입력필드</li>
					<li>- 대부분의 브라우저에서 입력한 텍스트를 &#34;*&#34; 등으로 감추어(masking) 표시한다.</li>
					<li>- 일반 텍스트로 전송되기 떄문에 실제 데이터 전송시에는 해당 부분에 대한 암호화가 필요하다.</li>
					</ul>
				</li>
				<li>checkbox: 복수 선택 가능한 체크박스</li>
				<li>radio: 한개만 선택 가능한 라디오버튼</li>
				<li>submit: 폼 송신 버튼</li>
				<li>reset: 폼 리셋 버튼 (입력 내용 전부를 초기화함)</li>
				<li>button: 범용 버튼</li>
				<li>image: 송신 이미지버튼 (src 속성과 alt 속성을 지정해야함)</li>
				<li>file: 송신파일 선택 필드</li>
				<li>hidden: 숨겨진 필드 (화면에는 표시되지 않으나, 서버로 전송할 데이터를 지정)</li>
				</ul>
			</li>
			<li><strong>속성:</strong>
				<ul class="lst_type">
				<li>name: 해당 컨트롤의 이름 (서버에서 처리할 데이터의 컨트롤에는 name 속성이 반드시 필요)</li>
				<li>value: 해당 컨트롤의 값</li>
				<li>size: text, password 컨트롤의 가로크기
					<ul>
					<li>- 미 지정시 컨트롤의 폭은 브라우저에 따라 달라짐</li>
					<li>- 지정을 하여도 브라우저의 설정 혹은 글꼴 크기에 따라 달라질 수 있다</li>
					</ul>
				</li>
				<li>maxlength: text, password 컨트롤의 최대 입력 문자수를 지정</li>
				<li>checke : 체크박스, 라디오버튼의 초기 선택 상태를 지정</li>
				<li>disabled: 해당 컨트롤을 포커스, 선택, 변경 등의 조작이 불가능하게 하고 데이터를 서버로 전송하지 않게함.</li>
				<li>readonly: 컨트롤의 내용을 변경되지 않게 하지만 데이터는 전송한다.</li>
				</ul>
			</li>
			</ul>
			<pre class="brush:html">
				&lt;input type="submit" name="submit1" value="전송하기"&gt;
				&lt;input type="password" name="password1" size="10" maxlength="10"&gt;
				&lt;input type="radio" name="radio1" value="radio_value1" checked="checked"&gt;
			</pre>
		</dd>
		<dt>&lt;select&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 셀렉트 메뉴 전체를 정의하는 요소</li>
			<li><strong>주요속성:</strong>
				<ul>
				<li>name: 셀렉트메뉴의 이름 지정</li>
				<li>size: 표시 줄 수 지정을 하고 목록을 박스로 표시. 지정된 size를 넘는 항목의 선택을 위해 스크롤바가 자동으로 표시됨.</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;option&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 셀렉트메뉴의 항목을 정의하는 요소. select요소에는 한 개 이상의 option요소가 포함 되어야 한다.</li>
			<li><strong>주요속성:</strong>
				<ul>
				<li>selected: 해당 항목이 선택된 상태 (선택된 option요소가 없을 경우 첫번째 option요소가 기본으로 선택)</li>
				<li>value: 선택된 항목의 값</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;textarea&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 여러 줄로 된 텍스트 필드를 생성하는 인라인 요소</li>
			<li><strong>주요속성:</strong>
				<ul>
				<li>name, disabled, readonly: input 요소의 속성 설명과 동일</li>
				<li>rows: 표시 줄수를 지정 (입력 가능한 줄이 아닌, 브라우저에서 보여지는 줄의 수)</li>
				<li>cols: 표시 폭을 문자수로 지정</li>
				</ul>
			</li>
			</ul>
		</dd>
		<dt>&lt;button&gt;</dt>
		<dd>
			<ul class="lst_type">
			<li><strong>의미:</strong> 버튼을 생성하는 인라인요소(기능적으로는 input요소로 생성하는 버튼과 같지만, 이미지나 텍스트 등을 포함 할 수 있어 유연한 디자인이 가능함.)</li>
			<li><strong>속성:</strong> type(기본값이 브라우저에 따라 다를 수 있어, type을 기입해준다)
				<ul>
				<li>submit: 송신버튼</li>
				<li>reset: 리셋버튼</li>
				<li>button: 범용버튼</li>
				</ul>
			</li>
			</ul>
			<pre class="brush:html">&lt;button type="button"&gt;이미지 혹은 텍스트&lt;/button&gt;</pre>
		</dd>
		</dl>
	</section>
	<!-- //폼 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
</body>
</html>