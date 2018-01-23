 

// pass the id of the particular post to get the time when the post was created

// provide the created_at column of the post table and reference the diffForHumans() method;

// haaaaaaaaaaaaaaaaa



public function posted_at($id){

        $post = Post::find($id);
         $post->touch();
    return $post->created_at->diffForHumans();

    }


// pass the id of the particular comment to get the time when the comment was created

// provide the created_at column of the comment table and reference the diffForHumans() method;

// here sime one can make any changes to the file and commit it

    public function commented_at($id){

        $post = Comment::find($id);
         $post->touch();
    return $post->created_at->diffForHumans();

    }
