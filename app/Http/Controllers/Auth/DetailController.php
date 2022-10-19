<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DetailController extends Controller
{
    public const PASSWORD = 'Lt368V7ay9JMTrXw';

    public function showDetailForm($pw)
    {
        if ($pw == self::PASSWORD) {
            return view('auth.detail');
        } else {
            return redirect()->route('login');
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required','string'],
            'email' => ['required','string','email','unique:users'],
            'password' => ['required','string','min:6','max:15'],
            'icon_url' => ['image','max:1024','nullable'],
            'self_introduction_movie' => ['url','nullable'],
            'twitter_url' => ['url','nullable'],
            'github_url' => ['url','nullable'],
            'instagram_url' => ['url','nullable'],
            'blog_url' => ['url','nullable'],
            'tag_checkbox' => ['nullable'],
            'course_checkbox' => ['required'],
            'self_sentence' => ['string','nullable'],
        ]);
    }

    public const FALSE = 0;

    protected function create(array $data)
    {
        if(!isset($data['icon_url'])) {
            $data['icon_url'] = null;
        } else {
            $original = request()->file('icon_url')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            request()->file('icon_url')->move('storage/images',$name);
            $data['icon_url'] = $name;
        }

        if(!isset($data['tag_checkbox'])){
            $data['tag_checkbox'] = null;
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data ['email'],
            'password' => Hash::make($data['password']),
            'icon_url' => $data['icon_url'],
            'self_introduction_movie' => $data['self_introduction_movie'],
            'twitter_url' => $data['twitter_url'],
            'github_url' => $data['github_url'],
            'instagram_url' => $data['instagram_url'],
            'blog_url' => $data['blog_url'],
            'tag_checkbox' => $data['tag_checkbox'],
            'course_checkbox' => $data['course_checkbox'],
            'self_sentence' => $data['self_sentence'],
            'administrator_flag' => FALSE,
        ]);
    }

    public function signup(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return redirect()->route('loginnew');
    }
}
