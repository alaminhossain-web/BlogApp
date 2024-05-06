<?php

namespace App\Models\Backend;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['blog_category_id','author','title','content','image','status'];

    protected static $fileUrl,$fileObject,$fileName,$fileDirectory,$blog;

    public static function updateOrCreateBlogs($request,$id = null)
    {
        self::$fileUrl = Blog::uploadBlogFile($request,$id);

        Blog::updateOrCreate(['id'=>$id],[
            'author'                =>$request->author,
            'title'                 =>$request->title,
            'content'               =>$request->content,
            'image'                 =>self::$fileUrl,
            'status'                =>$request->status
        ]);
    }

    public static function uploadBlogFile($request,$id)
    {
        if($id != null)
        {
            self::$blog = Blog::find($id);
        }
        self::$fileObject = $request->file('image');
        if(isset(self::$fileObject))
        {
            if(isset(self::$blog))
            {
                if(file_exists(self::$blog->image))
                {
                    unlink(self::$blog->image);
                }
            }
            self::$fileName = self::$fileObject->getClientOriginalName();
            self::$fileDirectory = 'backend/uploaded-files/blogs/';
            self::$fileObject ->move(self::$fileDirectory,self::$fileName);
            self::$fileUrl = self::$fileDirectory.self::$fileName;
        }else{
            if($id != null)
            {
                self::$fileUrl = self::$blog->image;
            }else{
                self::$fileUrl = null;
            }
        }
        return self::$fileUrl;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
