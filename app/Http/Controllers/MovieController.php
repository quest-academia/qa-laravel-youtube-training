<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $query = Movie::query()->with('user:id,name');
        $search = $request->input('search');

        //検索機能
        if(!empty($search)){
            // 単語を半角スペースで区切り、配列にする
            $space_search = mb_convert_kana($search, 's');
            $search_words_array = preg_split('/[\s,]+/', $space_search, -1, PREG_SPLIT_NO_EMPTY);

            // 単語をループで回し、それぞれの単語で部分一致で検索
            foreach ($search_words_array as $value) {
                $query->orWhere('title', 'like', '%' . $value . '%')
                ->orWhere('description', 'like', '%' . $value . '%')
                ->orWhereHas(
                    'user',
                    function ($query) use ($value) {
                        $query->where('name', 'like', '%' . $value . '%');
                    }
                );
            }
        }

        $movies = $query->latest()->paginate(12);
        return view('movie.index', compact('movies', 'search'));
    }
}
