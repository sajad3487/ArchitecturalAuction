<?php


namespace Modules\Media\Repository;


use App\DesignPatterns\Repository;
use Modules\Media\Entities\media;

class MediaRepository extends Repository
{
    /**
     * @var media
     */
    public $model;

    public function __construct()
    {
        $this->model = new media();
    }

}
