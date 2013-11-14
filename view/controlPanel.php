    <div class="addAnArticleForm">
        <h2>Add Article</h2>
        
        <form action="?action=submitAnArticle" method="post">
            <label name="title">Title:</label>
            <input type="text" name="title" />
            <br>

            <label name="text">Article:</label>
            <textarea type="text" name="text">
            </textarea>
            <br>

            <input type="checkbox" name="exclusive" value="1"> Exclusive
            <br>
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>