<?php namespace RDArcy\Albums\Models;

use Model;

/**
 * Model
 */
class Album extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
//        'title'         =>  'required',
//        'slug'          =>  ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:rdarcy_albums_'],
//        'published_on'  =>  'required',
//        'cover_image'   =>  'required',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rdarcy_albums_';

    /*
     * Relations
     */
    public $attachOne = [
        'cover_image' => 'System\Models\File',
    ];

    protected $jsonable = [
        'contributors',
    ];
}