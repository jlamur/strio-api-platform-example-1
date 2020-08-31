<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Bike
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The model
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $model = '';

    /**
     * @var string The brand
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $brand = '';

    public function getId(): int
    {
        return $this->id;
    }
}
