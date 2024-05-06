<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('frontend.home.home',[
            'blogs' =>Blog::orderBy('id','desc')->get(),
            'blog' =>Blog::first()
        ]);
    }
    public function blogDetails($id)
    {
        return view('frontend.blogs.details',[
            'blog' => Blog::find($id),
            'blogs' => Blog::latest()->get(),
            'comments' => Comment::where('blog_id',$id)->get()

        ]);
    }
     // Store a newly created comment in the database.
     public function store(Request $request, $id)
     {
        // return $request;
         // Validate the incoming request data
         $request->validate([
             'comment' => 'required|string',
         ]);
 
         // Find the post that the comment belongs to
         $blog = Blog::findOrFail($id);
 
         // Create a new comment instance
         $comment = new Comment();
         $comment->name = auth()->user()->name;
         $comment->email = auth()->user()->email;
         $comment->comment = $request->comment;
 
         // Save the comment to the post
         $blog->comments()->save($comment);
 
         // Redirect back to the post with a success message
         return redirect()->route('blogs.details', $id)->with('success', 'Comment added successfully!');
     }
 
     // Delete the specified comment from the database.
     public function destroy($id, $commentId)
     {
         // Find the post that the comment belongs to
         $blog = Blog::findOrFail($id);
 
         // Find the comment within the post
         $comment = $blog->comments()->findOrFail($commentId);
 
         // Delete the comment
         $comment->delete();
 
         // Redirect back to the post with a success message
         return redirect()->route('blogs.details', $id)->with('delete', 'Comment deleted successfully!');
     }
    
}
