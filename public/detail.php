<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/itPrograming.css">
<?php
include "../part/head_body.php";
?>
<?php
$conn = mysqli_connect('localhost','root','','blog',3306);
$id = $_GET['id'];
$sql = "
SELECT *
FROM article
WHERE id = {$id}
";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($rs);
?>
<!--하이라이트 라이브러리-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<!--하이라이트 언어-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>
<!--코드미러-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css"
/>
<!--토스트 에디터 자바스크립트 코어-->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>
<!--토스트 css 코어-->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
<!--토스트 하이라이트 플러그인-->
<script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js"></script>

<div class="con">
    <a href="#" onclick="history.back();">[뒤로가기]</a>
    <a href="/itPrograming.php">[리스트]</a>
</div>

<h1 class="con">제목 : <?=$row['title']?></h1>
<div class="con">
    등록날짜 : <?=$row['regDate']?>
</div>
<div class="con">
    수정날짜 : <?=$row['updateDate']?>
</div>
<div class="con">
    작성자 : 이호연
</div>
<div class="con" style="display:none;" id="origin1">
<?=$row['body']?>
</div>
<div class="con" id="viewer1">
</div>

<script>
var editor1__initialValue = $('#origin1').html();
var editor1 = new toastui.Editor({
  el: document.querySelector('#viewer1'),
  height: '600px',
  initialValue: editor1__initialValue,
  viewer:true,
  plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
});
</script>

<?php
include "../part/foot.php";
?>