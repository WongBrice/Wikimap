<?php

namespace Wikimap\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 * 
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Wikimap\MainBundle\Repository\PaysRepository")
 */
class Pays
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
     * @ORM\Column(name="lat", type="string", length=255)
     */
    protected $lat;
    
    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="string", length=255)
     */
    protected $lng;
    
    /**
     * @ORM\OneToMany(targetEntity="Wikimap\MainBundle\Entity\Culture", mappedBy="pays")
     */
    protected $culture;
    
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
     * @return Pays
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
     * Set lat
     *
     * @param string $lat
     *
     * @return Pays
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     *
     * @return Pays
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Add culture
     *
     * @param \Wikimap\MainBundle\Entity\Culture $culture
     *
     * @return Pays
     */
    public function addCulture(\Wikimap\MainBundle\Entity\Culture $culture)
    {
        $this->culture[] = $culture;

        return $this;
    }

    /**
     * Remove culture
     *
     * @param \Wikimap\MainBundle\Entity\Culture $culture
     */
    public function removeCulture(\Wikimap\MainBundle\Entity\Culture $culture)
    {
        $this->culture->removeElement($culture);
    }

    /**
     * Get culture
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCulture()
    {
        return $this->culture;
    }
}
