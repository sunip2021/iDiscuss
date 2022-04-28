<?php
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
    echo '<div class="container">
    <h1 class="py-2">Post a comment</h1>
    <form action="/forum/thread.php?threadid='.$id.'" method="post">
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type your comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
</div>';
  }
  else{
echo '<div class="container">
<h1 class="py-2">Post a comment</h1>
<p class="lead">You are not logged in</p>
</div>';
  }
    ?>