<?php

namespace App\Entity;

use App\Repository\CharactersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharactersRepository::class)]
class Characters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]

    private ?string $element = null;

    #[ORM\Column(length: 255)]
    private ?string $weaponType = null;


    #[ORM\ManyToOne(inversedBy: 'characters')]
    private ?User $userId = null;

    #[ORM\Column]
    private ?int $rarity = null;

    #[ORM\ManyToMany(targetEntity: Weapons::class, mappedBy: 'characters')]
    private Collection $weapons;

    #[ORM\ManyToMany(targetEntity: Teams::class, mappedBy: 'characters')]
    private Collection $teams;

    #[ORM\OneToOne(mappedBy: 'characterId', cascade: ['persist', 'remove'])]
    private ?CharacterPhoto $characterPhoto = null;

    public function __construct()
    {
        $this->weapons = new ArrayCollection();
        $this->teams = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(string $element): static
    {
        $this->element = $element;


        return $this;
    }

    public function getWeaponType(): ?string
    {
        return $this->weaponType;
    }

    public function setWeaponType(string $weaponType): static
    {
        $this->weaponType = $weaponType;

        return $this;
    }


    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;


        return $this;
    }


    public function getRarity(): ?int
    {
        return $this->rarity;
    }

    public function setRarity(int $rarity): static
    {
        $this->rarity = $rarity;


        return $this;
    }

    /**

     * @return Collection<int, Weapons>
     */
    public function getWeapons(): Collection
    {
        return $this->weapons;
    }

    public function addWeapon(Weapons $weapon): static
    {
        if (!$this->weapons->contains($weapon)) {
            $this->weapons->add($weapon);
            $weapon->addCharacter($this);

        }

        return $this;
    }


    public function removeWeapon(Weapons $weapon): static
    {
        if ($this->weapons->removeElement($weapon)) {
            $weapon->removeCharacter($this);
        }


        return $this;
    }

    /**

     * @return Collection<int, Teams>
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Teams $team): static
    {
        if (!$this->teams->contains($team)) {
            $this->teams->add($team);
            $team->addCharacter($this);

        }

        return $this;
    }


    public function removeTeam(Teams $team): static
    {
        if ($this->teams->removeElement($team)) {
            $team->removeCharacter($this);
        }


        return $this;
    }

    public function getCharacterPhoto(): ?CharacterPhoto
    {
        return $this->characterPhoto;
    }

    public function setCharacterPhoto(?CharacterPhoto $characterPhoto): static
    {
        // unset the owning side of the relation if necessary
        if ($characterPhoto === null && $this->characterPhoto !== null) {
            $this->characterPhoto->setCharacterId(null);
        }

        // set the owning side of the relation if necessary
        if ($characterPhoto !== null && $characterPhoto->getCharacterId() !== $this) {
            $characterPhoto->setCharacterId($this);
        }

        $this->characterPhoto = $characterPhoto;

        return $this;
    }
}
