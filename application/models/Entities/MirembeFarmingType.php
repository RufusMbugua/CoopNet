<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeFarmingType
 *
 * @Table(name="mirembe_farming_type")
 * @Entity
 */
class MirembeFarmingType
{
    /**
     * @var integer
     *
     * @Column(name="farmingTypeID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $farmingtypeid;

    /**
     * @var string
     *
     * @Column(name="farmingTypeName", type="string", length=45, nullable=false)
     */
    private $farmingtypename;


    /**
     * Get farmingtypeid
     *
     * @return integer 
     */
    public function getFarmingtypeid()
    {
        return $this->farmingtypeid;
    }

    /**
     * Set farmingtypename
     *
     * @param string $farmingtypename
     * @return MirembeFarmingType
     */
    public function setFarmingtypename($farmingtypename)
    {
        $this->farmingtypename = $farmingtypename;
    
        return $this;
    }

    /**
     * Get farmingtypename
     *
     * @return string 
     */
    public function getFarmingtypename()
    {
        return $this->farmingtypename;
    }
}
