<?php

namespace Kyleh\Address\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Address extends Model
{
    use ElasticquentTrait;
    protected $fillable = ['title', 'street', 'housenumber', 'zipcode', 'place', 'country'];

    protected $mappingProperties = array(
        'title' => array(
            'type' => 'string',
            'analyzer' => 'standard'
        )
    );
}
