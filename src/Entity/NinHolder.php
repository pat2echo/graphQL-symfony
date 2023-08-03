<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\CollectionOperationInterface;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;
use ApiPlatform\Metadata\Delete;
//use ApiPlatform\Metadata\Patch;

use ApiPlatform\Metadata\GraphQl\Query;
use ApiPlatform\Metadata\GraphQl\QueryCollection;

use App\Repository\NinHolderRepository;
use DateTime;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: NinHolderRepository::class)]
#[ApiResource(
    graphQlOperations:[
        new Query(),
        new QueryCollection(),
    ],
    description: "Records of registered NIN Holders",
    //shortName: "nin",
    operations:[
        //new Get(uriTemplate: "/nin-enrollee/{id}"),
        new Get(),
        new GetCollection(),
        new Post(),
        new Put(),
        //new Patch(),
        new Delete()
    ]
)]
class NinHolder
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $enrollee = null;

    #[ORM\Column(length: 12)]
    private ?string $gender = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateOfBirth = null;
    
    /**
    * Marital Status of the Individual, options includes: single, married, divorced etc
    */
    #[ORM\Column(length: 20)]
    private ?string $maritalStatus = null;

    #[ORM\Column(nullable: true)]
    private ?bool $disabled = null;

    #[ORM\Column(nullable: true)]
    private ?DateTimeImmutable $creationDate = null;

    public function __construct()
    {
        $this->creationDate = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnrollee(): ?string
    {
        return $this->enrollee;
    }

    public function setEnrollee(string $enrollee): static
    {
        $this->enrollee = $enrollee;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    /** 
     * Age of the NIN holder derived from the date of birth
    */
    public function getAge(): ?string
    {
        return date_diff( $this->dateOfBirth, new \DateTime() )->format("%y years");
    }

    public function getCreationDate(): ?\DateTimeImmutable
    {
        return $this->creationDate;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): static
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getMaritalStatus(): ?string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(string $maritalStatus): static
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    public function setDisabled(?bool $disabled): static
    {
        $this->disabled = $disabled;

        return $this;
    }
}
