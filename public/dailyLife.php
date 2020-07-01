<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/dailyLife.css">
<?php
include "../part/head_body.php";
?>
<?php
include "../part/mysqlDbConn.php";

$sql = "
SELECT id,regDate,updateDate,title,`body`,summary,thumbImgUrl
FROM article
WHERE cateItemId = 2
ORDER BY ID DESC
LIMIT 100
";
$rs = mysqli_query($dbConn, $sql);
$articles = [];

while( $article = mysqli_fetch_assoc($rs)) {
    $articles[] = $article;
}

?>

<!--게시글 리스트 박스-->
<article class="article-box con flex flex-wrap">
    <?php foreach( $articles as $article ) { ?>
        <div class="article-list flex">
            <!--게시글 컨텐츠-->
            <div class="article-content">
                <!--게시글 제목-->
                <a href="/detail.php?id=<?=$article['id']?>" class="article-title">
                    <h2><?=$article['title']?></h2>
                </a>
                <!--게시글 본문-->
                <a href="/detail.php?id=<?=$article['id']?>" id="viewer" class="article-body">
                    <?php
                    if (empty($article['summary'])) {
                        if (empty($article['body'])) {
                            echo "게시물 내용이 없습니다.";
                        }
                        else {
                            $articleBody = str_replace(array("#","-"),"",mb_substr($article['body'] , strpos($article['body'], "<!--컨텐츠-->") , 300));
                            echo "$articleBody";
                        }
                    }
                    else {
                        echo $article['summary'];
                    }
                    ?>
                </a>
                <!--게시글 작성일, 업데이트, 조회수-->
                <div class="article-info flex">
                    <div><?=$article['regDate']?></div>
                    <div><?=$article['updateDate']?></div>
                </div>
                <!--게시글 태그-->
                <div class="article-tag-bar flex">
                    <?php 
                        $sql ="
                            SELECT `name`
                            FROM articleTag
                            WHERE articleId = {$article['id']}
                            ORDER BY id ASC
                        ";

                        $articleTags = [];

                        $rs = mysqli_query($dbConn, $sql);
                        while( $articleTag = mysqli_fetch_assoc($rs)) {
                            $articleTags[] = $articleTag;
                        }
                        
                        foreach ($articleTags as $tag) {
                    ?>
                    <div class="article-tag flex flex-ai-c"><?=$tag['name']?></div>
                    <?php } ?>
                </div>
            </div>
            <!--게시글 썸네일-->
            <?php
                if (empty($article['thumbImgUrl'])) {
                    $articleBg = str_replace(array("![image](",")"),"",substr($article['body'], strpos( $article['body'], "![image]" ), strpos($article['body'], ")" ) ));
                    if (empty($articleBg)) { ?>
                        <a href="/detail.php?id=<?=$article['id']?>" class="article-img"></a>
                <?php }
                    else { ?>
                        <a href="/detail.php?id=<?=$article['id']?>" class="article-img" style="background-image: url(<?=$articleBg?>);"></a>
                <?php }
                }
                else { ?>
                    <a href="/detail.php?id=<?=$article['id']?>" class="article-img" style="background-image: url(<?=$article['thumbImgUrl']?>);"></a>
                <?php } ?>
            <!--게시글 썸네일 끝-->
        </div>
    <?php } ?>
</article>

<?php
include "../part/foot.php";
?>
<?php
include "../part/foot.php";
?>