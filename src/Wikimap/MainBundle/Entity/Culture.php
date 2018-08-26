<?php

namespace Wikimap\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Culture
 * 
 * @ORM\Table(name="culture")
 * @ORM\Entity(repositoryClass="Wikimap\MainBundle\Repository\CultureRepository")
 */
class Culture
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="period", type="string", length=255)
     */
    protected $period;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    protected $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Wikimap\MainBundle\Entity\Pays", inversedBy="culture", cascade={"persist"})
     * @ORM\JoinColumn(name="pays_id", referencedColumnName="id")
     */
    private $pays;
    
    public function __construct()
    {
        
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Culture
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set period
     *
     * @param string $period
     *
     * @return Culture
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Culture
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

    /**
     * Set pays
     *
     * @param \Wikimap\MainBundle\Entity\Pays $pays
     *
     * @return Culture
     */
    public function setPays(\Wikimap\MainBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Wikimap\MainBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
