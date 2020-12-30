<?php


namespace Modules\Media\Http\Service;


use Modules\Media\Repository\MediaRepository;

class MediaService
{
    /**
     * @var MediaRepository
     */
    private $mediaRepository;

    public function __construct(
        MediaRepository $mediaRepository
    )
    {
        $this->mediaRepository = $mediaRepository;
    }

    public function uploadMedia ($file) {
        $destination = base_path() . '/public/image/';
        $filename = rand(1111111, 99999999);
        $newFileName = $filename . $file->getClientOriginalName();
        $file->move($destination, $newFileName);
        return '/image/' . $newFileName;
    }

}
