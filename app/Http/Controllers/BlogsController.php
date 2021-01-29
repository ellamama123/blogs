<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
class BlogController extends Controller
{
    public function index()
    {
        return Blogs::all();
    }

    public function show(Blogs $blog)
    {
        return $blog;
    }

    public function store(Request $request)
    {

        $blog = Blogs::create($request->all());

        return response()->json($blog, 201);
    }

    public function update(Request $request, Blogs $blog)
    {
        $blog->update($request->all());

        return response()->json($blog, 200);
    }

    public function delete(Blogs $blog)
    {
        $blog->delete();

        return response()->json(null, 204);
    }
}
