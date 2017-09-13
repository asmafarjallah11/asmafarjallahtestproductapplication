<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomproduit", type="string", length=255, unique=true)
     * 
     * @Assert\NotBlank( message = "le nom est obligatoire" )
     */
    private $nomproduit;

    /**
     * @var string
     * 
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2)
     * 
     * @Assert\NotBlank( message = "le prix est obligatoire" )
     *
     * @Assert\Regex("/^[+-]?\d+(\.\d+)?$/",message="le prix doit etre un nombre decimal")  
     * 
     * @Assert\GreaterThan(
     * value=0,
     * message="le prix doit etre superieur a 0"
     * )
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * 
     *  @Assert\NotBlank( message = "la description  de votre produit est obligatoire" )
     */
    private $description;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Product
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Product
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

