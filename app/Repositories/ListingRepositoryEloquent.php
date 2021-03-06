<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Interfaces\ListingRepository;
use App\Entities\Listing;
use App\Validators\ListingValidator;

/**
 * Class ListingRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ListingRepositoryEloquent extends BaseRepository implements ListingRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Listing::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
