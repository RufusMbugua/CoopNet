<?php


namespace models\Entities;
//use Doctrine\Mapping as ORM;

/**
 * MirembeParish
 *
 * @Table(name="mirembe_parish")
 * @Entity
 */
class MirembeParish
{
    /**
     * @var integer
     *
     * @Column(name="parishID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $parishid;

    /**
     * @var string
     *
     * @Column(name="parishName", type="string", length=45, nullable=false)
     */
    private $parishname;


    /**
     * Get parishid
     *
     * @return integer 
     */
    public function getParishid()
    {
        return $this->parishid;
    }

    /**
     * Set parishname
     *
     * @param string $parishname
     * @return MirembeParish
     */
    public function setParishname($parishname)
    {
        $this->parishname = $parishname;
    
        return $this;
    }

    /**
     * Get parishname
     *
     * @return string 
     */
    public function getParishname()
    {
        return $this->parishname;
    }
}
