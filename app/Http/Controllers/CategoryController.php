<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();

        $posts = Post::all();

        return view('posts',['categories' => $categories,'posts' => $posts]);
    }

    public function showCategory($id) {

        $category = Category::with('posts')->find($id);

        return view('showCategory',['category' => $category,'posts' => $category]);

    }

    public function createCategory() {

        return view('createCategory');
    }

    public function storeCategory(Request $request) {

        $request->validate(['categoryName' => 'required|unique:categories']);

        $category = new Category;
        $category->categoryName = $request->categoryName;
        $category->save();

        return redirect('/categories');

    }
}
