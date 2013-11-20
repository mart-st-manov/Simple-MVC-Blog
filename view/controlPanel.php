    <div class="addAnArticleForm">
        <h2>Add Article</h2>
        
        <form action="?action=submitAnArticle" method="post">
            <label name="title">Title:</label>
            <input type="text" name="title" />
            <br>
            <br>

            <label name="text">Article:</label>
            <textarea type="text" name="text">
            </textarea>
            <br>

            <input class="checkTwo" type="checkbox" name="exclusive" value="1"> Exclusive
            <br>
            <br>
            <br>
            <br>
            
            <input type="submit" name="submit" value="Submit"/>
        </form>
    </div>
