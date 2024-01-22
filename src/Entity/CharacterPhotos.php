<?php

namespace App\Entity;

use App\Repository\CharacterPhotosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterPhotosRepository::class)]
class CharacterPhotos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Characters $characterId = null;

    #[ORM\Column(length: 255)]
    private ?string $photoUrl = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCharacterId(): ?Characters
    {
        return $this->characterId;
    }

    public function setCharacterId(?Characters $characterId): static
    {
        $this->characterId = $characterId;

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(string $photoUrl): static
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }
}
