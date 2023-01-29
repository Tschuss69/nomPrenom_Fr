<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Metadata\GetCollection;

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
        'lastName' => 'iexact'
    ])]
#[ORM\Entity]
class LastName
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /**
     * The last mame
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $lastName = '';

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


    /*public function getLastName(): ?string
    {
        return $this->lastName;
    }*/

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

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
