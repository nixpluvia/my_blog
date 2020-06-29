<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/itPrograming.css">
<?php
include "../part/head_body.php";
?>
<?php
$conn = mysqli_connect('site6.blog.oa.gg','site6','sbs123414','site6',3306);

mysqli_query($conn, "SET NAMES utf8mb4");

$sql = "
SELECT *
FROM article
LIMIT 100
";
$rs = mysqli_query($conn, $sql);
$articles = [];

while( $article = mysqli_fetch_assoc($rs)) {
    $articles[] = $article;
}
$idIncrease = 1;
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
<script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js"></script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<article class="article-box con flex flex-wrap">
    <?php foreach( $articles as $article ) { ?>
        <div class="article-list flex">
            <div class="article-content">
                <a href="/detail.php?id=<?=$article['id']?>" class="article-title">
                    <h2><?=$article['title']?></h2>
                </a>
                <a href="/detail.php?id=<?=$article['id']?>" id="viewer" class="article-body" style="display:block;">
                    <?=str_replace(array("#","-"),"",mb_substr($article['body'], strpos($article['body'], "\n", 2), 300))?>
                </a>
                <div class="article-info flex">
                    <div><?=$article['regDate']?></div>
                    <div><?=$article['updateDate']?></div>
                </div>
                <div class="article-tag-bar flex">
                    <div class="article-tag flex flex-ai-c">#태그</div>
                </div>
            </div>
            <a href="/detail.php?id=<?=$article['id']?>" class="article-img" style="background-image: url(<?=str_replace(array("![image](",")"),"",substr($article['body'], strpos($article['body'], "![image]"), strpos($article['body'], ")") ))?>)"></a>
            <?php $idIncrease += 1; ?>
        </div>
    <?php } ?>
</article>

<?php
include "../part/foot.php";
?>