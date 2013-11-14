<?php
    
foreach ($articles as $article) {
    ?>
        <div class="singleArticle">
               
            <div id="singleArticleTitle">
                <?php echo $article['article_title']; ?>
            </div>
            <br />

            <div class="singleArticleText">
                <?php echo $article['article_text']; ?>
            </div>
            <br />

        </div>
    <?php
}
?> 