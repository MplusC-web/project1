<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use App\Category;
use App\User;
use App\Comment;
use Auth;
use Validator;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /** @var Post */
    protected $post;
    /** @var Category */
    protected $category;


    public function __construct(Post $post, Category $category)
    {
        $this->post = $post;
        $this->category = $category;
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index',compact('posts'));
    }

    public function sideindex(int $id)
    {
        $categories = Category::all();
        $current_category = Category::find($id);

        $posts = Post::where('category_id', $current_category->id)->paginate(10);

        return view('posts/sideindex', [
            'categories' => $categories,
            'current_category_id' => $current_category->id,
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post)
    {
        $rules = [
            'title' => 'required',
            'category_id' => 'required',
            'description'=>'required',
            'pic1' => 'required',
        ];

        $messages = array(
            'title.required' => '商品名を入力してください。',
            'category_id.required' => 'カテゴリーを選択してください。',
            'description.required' => '商品説明を入力してください。',
            'pic1.required' => '写真を選択してください。',

        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails())
        {
            return redirect('/posts/create')->withErrors($validator->errors())->withInput();
        }

        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->save();
        $request->pic1->storeAs('public/post_images', $post->id . '.jpg');


        return redirect()->route('posts.index');
    }

    public function detail($post_id)
    {
        $post = Post::find($post_id);
        $comments = Comment::with(['user'])
        ->where('comments.post_id', $post_id)
        ->get();

        return view('posts.detail',['post' => $post, 'comments' => $comments]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->all())->save();
        return redirect()->route('posts.index');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        $user = User::find(1);

        return redirect()->route('user.show', ['user_id' => $user]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function like(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);
        $post->likes()->attach($request->user()->id);

        return [
            'id' => $post->id,
            'countLikes' => $post->count_likes,
        ];
    }

    public function unlike(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);

        return [
            'id' => $post->id,
            'countLikes' => $post->count_likes,
        ];
    }

    public function comments(Request $request, Post $post)
    {
        $post->comments()->attach($request->user()->id);

        return [
            'id' => $post->id,
        ];
    }

}
