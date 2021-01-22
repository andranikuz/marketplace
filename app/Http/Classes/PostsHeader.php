<?php
namespace App\Http\Classes; 
use App\Models\City;
use App\Models\Category;
use App\Models\Region;

class PostsHeader
{
    public $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

   public function getHeader() 
   {
        if(!empty($this->params['city'])) {
            $city = City::whereSlug($this->params['city'])->firstOrFail();
            $location = ', '.$city->name;

        } elseif(!empty($this->params['region'])) {
            $region = Region::findOrFail($this->params['region']);
            $location = ', '.$region->name;
        } else $location = '';

        if(!empty($this->params['category'])) {
            $category = Category::findOrFail($this->params['category']);
            $adsType = $category->title;
        } else $adsType = 'Поиск обьявлений';

        return $adsType.$location;
   }
}
