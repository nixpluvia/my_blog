<?php
include "../part/head_head.php";
?>
<link rel="stylesheet" href="/resource/index.css">
<?php
include "../part/head_body.php";
?>
<?php
include "../config.php";

$sql = "
SELECT id,cateItemId,title,`body`,summary,thumbImgUrl
FROM article
ORDER BY ID DESC
LIMIT 2;
";

$rs = mysqli_query($dbConn, $sql);
$squareArticles = [];
while ( $squareArticle = mysqli_fetch_assoc($rs) ) {
    $squareArticles[] = $squareArticle;
}
?>

<!--상단 슬라이드 배너-->
<div class="top-bn-slider con">
    <div class="sliderbox">
        <div class="slides">
            <div class="active" style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_1.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_4.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div
                style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_5.jpg);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div
                style="background-image: url(https://nixpluvia.github.io/img1/blog/site/top_bn_box_6.jpg); background-size:contain; background-color: rgb(255,222,85);">
                <a href="#">
                    더보기
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="side-bar">
            <div><span><i class="fas fa-angle-left"></i></span></div>
            <div><span><i class="fas fa-angle-right"></i></span></div>
        </div>
    </div>
</div>

<div class="squareContentBox flex con">
    <ul class="flex">
        <?php foreach($squareArticles as $article) { 
            $sql2 ="
            SELECT `name`
            FROM cateItem
            WHERE id = {$article['cateItemId']}
            ";
            $rs2 = mysqli_query($dbConn, $sql2);
            $row = mysqli_fetch_assoc($rs2);
        ?>
        <li class="flex">
            <!--게시글 이미지-->
            <?php
            $squareArticleBg = str_replace(array("![image](",")"),"",substr($article['body'], strpos($article['body'], "![image]" ), strpos($article['body'], ")" ) ));
            if ( empty($article['thumbImgUrl']) ) {
                if (empty($squareArticleBg)) { ?>
                    <a class="squareImage" href="/detail.php?id=<?=$article['id']?>"></a>
            <?php } 
                else { ?>
                    <a class="squareImage" href="/detail.php?id=<?=$article['id']?>" style="background-image: url(<?=$squareArticleBg?>)"></a>
            <?php }
            } 
            else { ?>
                <a class="squareImage" href="/detail.php?id=<?=$article['id']?>" style="background-image: url(<?=$article['thumbImgUrl']?>)"></a>
            <?php } ?>
            <!--게시글 컨텐츠-->
            <div class="squareTextBox">
                <div class="squareTextBox-wrap">
                    <div class="type"><?=$row['name']?></div>
                    <div class="title"><?=$article['title']?></div>
                    <div class="textBox">
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
                    </div>
                    <a href="/detail.php?id=<?=$article['id']?>">
                        더보기
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>



</div>
<script src="/resource/index.js"></script>
<?php
include "../part/foot.php";
?>