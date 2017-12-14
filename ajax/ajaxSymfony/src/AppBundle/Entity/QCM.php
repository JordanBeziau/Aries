<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QCM
 *
 * @ORM\Table(name="q_c_m")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QCMRepository")
 */
class QCM
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
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="choix1", type="string", length=255)
     */
    private $choix1;

    /**
     * @var string
     *
     * @ORM\Column(name="choix2", type="string", length=255)
     */
    private $choix2;

    /**
     * @var string
     *
     * @ORM\Column(name="choix3", type="string", length=255)
     */
    private $choix3;

    /**
     * @var int
     *
     * @ORM\Column(name="reponse", type="integer")
     */
    private $reponse;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;


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
     * Set question
     *
     * @param string $question
     *
     * @return QCM
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set choix1
     *
     * @param string $choix1
     *
     * @return QCM
     */
    public function setChoix1($choix1)
    {
        $this->choix1 = $choix1;

        return $this;
    }

    /**
     * Get choix1
     *
     * @return string
     */
    public function getChoix1()
    {
        return $this->choix1;
    }

    /**
     * Set choix2
     *
     * @param string $choix2
     *
     * @return QCM
     */
    public function setChoix2($choix2)
    {
        $this->choix2 = $choix2;

        return $this;
    }

    /**
     * Get choix2
     *
     * @return string
     */
    public function getChoix2()
    {
        return $this->choix2;
    }

    /**
     * Set choix3
     *
     * @param string $choix3
     *
     * @return QCM
     */
    public function setChoix3($choix3)
    {
        $this->choix3 = $choix3;

        return $this;
    }

    /**
     * Get choix3
     *
     * @return string
     */
    public function getChoix3()
    {
        return $this->choix3;
    }

    /**
     * Set reponse
     *
     * @param integer $reponse
     *
     * @return QCM
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return int
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return QCM
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }
}

