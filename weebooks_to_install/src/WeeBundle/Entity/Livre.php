<?php

namespace WeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity(repositoryClass="WeeBundle\Repository\LivreRepository")
 */
class Livre
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
     * @ORM\Column(name="imageName", type="string", length=255)
     */
    private $imageName;

  /**
   * @var file
   * @Assert\File(maxSize="5024K", mimeTypes={"image/jpeg","image/png"}, mimeTypesMessage="Format d'image invalide")
   */
  private $imageFile;

  /**
   * @return mixed
   */
  public function getImageFile() {
    return $this->imageFile;
  }

  /**
   * @param mixed $imageFile
   */
  public function setImageFile($imageFile) {
    $this->imageFile = $imageFile;
  }

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="parution", type="datetimetz")
     */
    private $parution;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="Editeur")
     */
    private $editeur;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $auteur;

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
     * Set imageName
     *
     * @param string $imageName
     *
     * @return Livre
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Livre
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set parution
     *
     * @param \DateTime $parution
     *
     * @return Livre
     */
    public function setParution($parution)
    {
        $this->parution = $parution;

        return $this;
    }

    /**
     * Get parution
     *
     * @return \DateTime
     */
    public function getParution()
    {
        return $this->parution;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Livre
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
     * Set editeur
     *
     * @param \WeeBundle\Entity\Editeur $editeur
     *
     * @return Livre
     */
    public function setEditeur(\WeeBundle\Entity\Editeur $editeur = null)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return \WeeBundle\Entity\Editeur
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set auteur
     *
     * @param \WeeBundle\Entity\User $auteur
     *
     * @return Livre
     */
    public function setAuteur(\WeeBundle\Entity\User $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \WeeBundle\Entity\User
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
}

