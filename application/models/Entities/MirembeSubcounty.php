<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeSubcounty
 *
 * @Table(name="mirembe_subcounty")
 * @Entity
 */
class MirembeSubcounty
{
    /**
     * @var integer
     *
     * @Column(name="subcountyID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $subcountyid;

    /**
     * @var string
     *
     * @Column(name="subcountyName", type="string", length=45, nullable=false)
     */
    private $subcountyname;


    /**
     * Get subcountyid
     *
     * @return integer 
     */
    public function getSubcountyid()
    {
        return $this->subcountyid;
    }

    /**
     * Set subcountyname
     *
     * @param string $subcountyname
     * @return MirembeSubcounty
     */
    public function setSubcountyname($subcountyname)
    {
        $this->subcountyname = $subcountyname;
    
        return $this;
    }

    /**
     * Get subcountyname
     *
     * @return string 
     */
    public function getSubcountyname()
    {
        return $this->subcountyname;
    }
}
