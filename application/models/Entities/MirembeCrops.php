<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeCrops
 *
 * @Table(name="mirembe_crops")
 * @Entity
 */
class MirembeCrops
{
    /**
     * @var integer
     *
     * @Column(name="cropID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $cropid;

    /**
     * @var string
     *
     * @Column(name="cropName", type="string", length=45, nullable=false)
     */
    private $cropname;


    /**
     * Get cropid
     *
     * @return integer 
     */
    public function getCropid()
    {
        return $this->cropid;
    }

    /**
     * Set cropname
     *
     * @param string $cropname
     * @return MirembeCrops
     */
    public function setCropname($cropname)
    {
        $this->cropname = $cropname;
    
        return $this;
    }

    /**
     * Get cropname
     *
     * @return string 
     */
    public function getCropname()
    {
        return $this->cropname;
    }
}
