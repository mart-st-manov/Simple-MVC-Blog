<?php
    
foreach ($articles as $article) {
    ?>
        <article class="singleArticle">
               
            <div class="singleArticleTitle">
                <?php echo $article['article_title']; ?>
            </div>
            
            <p class="singleArticleText">
                <?php echo $article['article_text']; ?>
            </p>
            
        </article>
    <?php
}
?> 