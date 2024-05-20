<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {

        return view('tags.results', ['jobs' => $tag->jobs]);
    }
}
