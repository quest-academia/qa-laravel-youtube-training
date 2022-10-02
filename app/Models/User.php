<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'self_sentence',
        'icon_url',
        'administrator_flag',
        'twitter_url',
        'instagram_url',
        'blog_url',
        'github_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user_tag(){
        return $this->hasMany(User_tag::class);
    }

    public function user_course(){
        return $this->hasMany(User_cource::class);
    }

    public function movie(){
        return $this->hasMany(Movie::class);
    }

    public function followings()
    {
        return $this->belongsToMany(User::class,'user_models','user_id','followed_user_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class,'user_models','followed_user_id','user_id')->withTimestamps();
    }

    public function is_following($userId)
    {
        return $this->followings()->where('followed_user_id', $userId)->exists();
    }

    public function follow($userId)
    {
        $existing = $this->is_following($userId);
        $myself = $this->id == $userId;
        if (!$existing && !$myself) {
            $this->followings()->attach($userId);
        }
    }
    public function unfollow($userId)
    {
        $existing = $this->is_following($userId);
        $myself = $this->id == $userId;
        if ($existing && !$myself) {
            $this->followings()->detach($userId);
        }
    }
}
