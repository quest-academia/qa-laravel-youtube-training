<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //サムネイルがない時の画像。私立探求学園の画像を設定
    private const NO_IMAGE_THUMBNAIL_URL = 'http://img.youtube.com/vi/YI5oU-hKZKM/hqdefault.jpg';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'url'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * YouTubeの動画IDを取得 ?v=の形式
     * @return string
     */
    private function getYoutubeID()
    {
        preg_match('/\?v=([^&]+)/', $this->url, $match);
        $id = $match[1];
        return $id;
    }

    /**
     * Youtubeのサムネイル画像URLを取得。ない場合はnoImage用画像を取得
     * @return string
     */
    public function getYoutubeThumbnailURL()
    {
        if(empty($this->getYoutubeID())){
            return self::NO_IMAGE_THUMBNAIL_URL;
        }
        return 'http://img.youtube.com/vi/'.$this->getYoutubeID().'/hqdefault.jpg';
    }
}
