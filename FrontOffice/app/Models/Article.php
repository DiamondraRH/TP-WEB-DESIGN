<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property int $id_article
 * @property string $titre
 * @property string $resume
 * @property string $contenu
 * @property string|null $img
 * @property Carbon|null $date_creation
 *
 * @package App\Models
 */
class Article extends Model
{
	protected $table = 'article';
	protected $primaryKey = 'id_article';
	public $timestamps = false;

	protected $dates = [
		'date_creation'
	];

	protected $fillable = [
		'titre',
		'resume',
		'contenu',
		'img',
		'date_creation'
	];

    public function slug()
    {
        return str()->slug($this->titre." ".$this->id_article);
    }

    public static function slugById($id)
    {
        $article = Article::find($id);
        return str()->slug($article->titre." ".$article->id_article);
    }

}
