<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;

/**
 * Entity of france name
 */
#[ApiResource(
    operations: [
        new GetCollection()
    ],
    mercure: true
)]
#[ApiFilter(
    SearchFilter::class,
    properties: [
        'id' => 'exact',
        'firstName' => 'iexact'
    ])]
#[ORM\Entity]
class FirstName
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /**
     * The first mame
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $firstName = '';

    /**
     * Number in France
     */
    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank]
    public string $nombre = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    /*public function getFirstName(): ?string
    {
        return $this->firstName;
    }*/

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /*public function getNombre(): ?int
    {
        return $this->nombre;
    }*/

    public function setNombre(int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }
}
