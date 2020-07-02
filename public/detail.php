<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/detail.css">
<?php
include "../part/head_body.php";
?>
<?php
include "../config.php";

$id = $_GET['id'];
$sql = "
SELECT *
FROM article
WHERE id = {$id}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);

$sql2 = "
SELECT id, title
FROM article
WHERE id = {$id} - 1
";

$sql3 = "
SELECT id, title
FROM article
WHERE id = {$id} + 1
";
$rs2 = mysqli_query($dbConn, $sql2);
$row2 = mysqli_fetch_assoc($rs2);
$rs3 = mysqli_query($dbConn, $sql3);
$row3 = mysqli_fetch_assoc($rs3);

$sql4 = "
SELECT `name`
FROM articleTag
WHERE articleId = {$id};
";

$rs4 = mysqli_query($dbConn, $sql4);

$articleTags = [];

while ( $articleTag = mysqli_fetch_assoc($rs4) ) {
    $articleTags[] = $articleTag;
}
?>

<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">

<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js">
</script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="detail-wrap con">
    <!--게시물 타이틀-->
    <h2 class="detail-title"><?=$row['title']?></h2>
    <!--게시물 정보-->
    <div class="detail-info flex">
        <div class="detail-regDate">등록일 : <?=$row['regDate']?></div>
        <div class="detail-updateDate">수정일 : <?=$row['updateDate']?></div>
        <div class="writer">작성자 : 이호연</div>
    </div>
    <!--게시물 태그-->
    <div class="article-tag-bar flex">
        <?php foreach($articleTags as $tag) { ?>
            <div class="article-tag flex flex-ai-c"><?=$tag['name']?></div>
        <?php } ?>
    </div>
    <!--게시물 본문 원본-->
    <div id="origin1"style="display:none;" >
        <?=$row['body']?>
    </div>
    <!--게시물 토스트 UI 뷰어-->
    <div id="viewer1">
    </div>
    <!--프로필 바-->
    <div class="profile-bar">
        <div class="profile-box flex">
            <!--프로필 아바타-->
            <a class="avatar" href="/"></a>
            <!--프로필 내용-->
            <div class="profile flex-1-0-0">
                <div class="name flex-ai-c">NIX</div>
                <div class="description flex-ai-c">인생 뉴비</div>
            </div>
        </div>
        <!--프로필 하단 보더-->
        <div class="profile-bar-bottom-line"></div>
        <!--프로필 sns 아이콘 바-->
        <div class="sns-bar flex">
            <a href="https://www.youtube.com/channel/UCaCKvCIvrW3xMmYvhCGJZZA?view_as=subscriber"
                class="flex flex-ai-c"><i class="fab fa-youtube"></i></a>
            <a href="https://github.com/nixpluvia" class="flex flex-ai-c"><i class="fab fa-github"></i></a>
            <a href="https://nixpluvia.tistory.com/" class="flex flex-ai-c">
                <div>
                    <svg version="1.1" id="레이어_2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                        style="enable-background:new 0 0 100 100;" xml:space="preserve">
                        <style type="text/css">
                            .profile-sns {
                                fill: #ffa100;
                            }
                        </style>
                        <g>
                            <circle class="profile-sns" cx="20.4" cy="20.4" r="9.9" />
                            <circle class="profile-sns" cx="50" cy="20.4" r="9.9" />
                            <circle class="profile-sns" cx="79.6" cy="20.4" r="9.9" />
                            <circle class="profile-sns" cx="50" cy="50" r="9.9" />
                            <circle class="profile-sns" cx="50" cy="79.6" r="9.9" />
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <!--게시물 이전, 다음 이동 버튼-->
    <div class="btn-list-move flex">
        <!--게시물 이전 버튼-->
        <?php if(isset($row2)) { ?>
            <a href="/detail.php?id=<?=$row2['id']?>" class="btn-prev flex flex-ai-c flex-jc-st">
                <i class="far fa-caret-square-left"></i><span><?=$row2['title']?></span>
            </a>
        <?php } ?>
        <!--게시물 다음 버튼-->
        <?php if(isset($row3)) { ?>
            <a href="/detail.php?id=<?=$row3['id']?>" class="btn-next flex flex-ai-c flex-jc-end">
                <span><?=$row3['title']?></span><i class="far fa-caret-square-right"></i>
            </a>
        <?php }
            else{ ?>
            <a style="display:none;"></a>
        <?php } ?>
    </div>
</div>


<script>
var editor1__initialValue = $('#origin1').html();
var editor1 = new toastui.Editor({
  el: document.querySelector('#viewer1'),
  initialValue: editor1__initialValue,
  viewer:true,
  plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
});
</script>

<?php
include "../part/foot.php";
?>