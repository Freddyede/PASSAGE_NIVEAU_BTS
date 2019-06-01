<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\GrantedRepository")
 */
class Granted
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $granted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGranted(): ?int
    {
        return $this->granted;
    }

    public function setGranted(int $granted): self
    {
        $this->granted = $granted;

        return $this;
    }
}
