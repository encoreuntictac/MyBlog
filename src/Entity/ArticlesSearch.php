<?php

namespace App\Entity;

use App\Repository\ArticlesSearchRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesSearchRepository::class)]
class ArticlesSearch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $search = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setSearch(?string $search): self
    {
        $this->search = $search;

        return $this;
    }
}
