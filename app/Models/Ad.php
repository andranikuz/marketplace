<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;
use Illuminate\Support\Str;

class Ad extends Model
{

	protected $guarded = [];
	
    use HasFactory;

    public static function searchE(array $params) {

    	$query = self::query();

		if (!empty($params['category'])) {
		    $query = $query->where('ads.category_id', $params['category']);
		}

		if (!empty($params['region'])) {
		    $query = $query->join('cities', 'cities.id', 'ads.city_id')->where('cities.region_id', $params['region']);
		}

		if (!empty($params['city'])) {
			if(empty($params['region']))
				$query = $query->join('cities', 'cities.id', 'ads.city_id');
		    $query = $query->where('cities.slug', $params['city']);
		}

		if (!empty($params['min_price'])) {
		    $query = $query->where('ads.price', '>=', $params['min_price']);
		}

		if (!empty($params['max_price'])) {
		    $query = $query->where('ads.price', '<=', $params['max_price']);
		}

		try {
			$ads = $query->paginate(9);
		} catch (Exception $e) {
			return abort(505);
		}
    	
    	return $ads;
    }

    protected static function boot()
	{
	    parent::boot();
	    static::creating(function ($model) {
	        $model->uuid = (string) Str::uuid();
	    });
	}

	public function saler() {
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function category() {
		return $this->belongsTo('App\Models\Category');
	}

	public function isDraft() :bool {
		return (bool)($this->status == 0);
	}

	public function isModerated() :bool {
		return (bool)($this->status == 10);
	}

	public function isRejected() :bool {
		return (bool)($this->status == 50);
	}

	public function isActive() :bool {
		return (bool)($this->status == 100);
	}

	public function isArchive() :bool {
		return (bool)($this->status == 200);
	}
}
