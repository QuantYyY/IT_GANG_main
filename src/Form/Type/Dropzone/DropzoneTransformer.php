<?php

namespace App\Form\Type\Dropzone;

use App\Repository\ImgRepository;
use Symfony\Component\Form\DataTransformerInterface;

class DropzoneTransformer implements DataTransformerInterface
{
    public function __construct(
        private ImgRepository $ImgRepository
    ){
    }

    public function transform($value)
    {
        // TODO: Implement transform() method.
    }

    public function reverseTransform($value)
    {
        // TODO: Implement reverseTransform() method.
    }
}
