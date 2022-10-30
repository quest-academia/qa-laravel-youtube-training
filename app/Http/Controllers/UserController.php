<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->input('search');
        $search_tag = $request->input('tag_checkbox');

        if (Auth::check()) {
            $query = User::query()->where('id', '<>', Auth::id());
        } else {
            $query = User::query();
        }

        if ($search != NULL) {
            // 単語を半角スペースで区切る
            $space_search = mb_convert_kana($search, 's');
            $search_words_array = preg_split('/[\s,]+/', $space_search, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($search_words_array as $value) {
                $query->orWhere('name', 'like', '%' . $value . '%')
                      ->orWhere('self_sentence', 'like', '%' . $value . '%');
            }
        }
        $users_count = $query->count();
        $query->value('id', 'name', 'icon_url');

        $users = $query->latest()->paginate(10);

        return view('user.lists', compact('users', 'users_count', 'search', 'search_tag'));
    }
}
