<?php


namespace Modules\Project\Http\Service;


use Modules\Project\Repository\WallRepository;

class WallService
{
    /**
     * @var WallRepository
     */
    private $wallRepository;

    public function __construct(
        WallRepository $wallRepository
    )
    {
        $this->wallRepository = $wallRepository;
    }

}
