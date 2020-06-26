<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/itPrograming.css">
<?php
include "../part/head_body.php";
?>
<?php
$conn = mysqli_connect('localhost','sbsst','sbs123414','blog',3306);
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

<article class="article-box con flex flex-wrap">
    <?php foreach( $articles as $article ) { ?>
        <div id="origin1" style="display:none;">
            <?=$article['body']?>
        </div>
        <div class="article-list flex">
            <div class="article-content">
                <a href="/detail.php?id=<?=$article['id']?>" class="article-title">
                    <h2><?=$article['title']?></h2>
                </a>
                <div class="article-body" id="viewer1">
                </div>
                <div class="article-info flex">
                    <div><?=$article['regDate']?></div>
                    <div><?=$article['updateDate']?></div>
                </div>
                <div class="article-tag-bar flex">
                    <div class="article-tag flex flex-ai-c">#태그</div>
                </div>
            </div>
            <a href="#" class="article-img" style="background-image: url(https://cdn.pixabay.com/photo/2020/01/31/07/26/japan-4807317_960_720.jpg)"></a>
        </div>
    <?php } ?>
</article>

<script>
var editor1__initialValue = $('#origin1').html();
var editor1 = new toastui.Editor({
    el : document.querySelector('#viewer1'),
    initialValue: editor1__initialValue,
    viewer: true,
    plugins: [toastui.Editor.plugin.codeSyntaxHighlight]
});
</script>

<?php
include "../part/foot.php";
?>