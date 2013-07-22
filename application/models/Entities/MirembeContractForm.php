<?php

namespace models\Entities;
//use Doctrine\ORM\Mapping as ORM;

/**
 * MirembeContractForm
 *
 * @Table(name="mirembe_contract_form")
 * @Entity
 */
class MirembeContractForm {
	/**
	 *
	 *
	 * @Column(name="contractID", type="integer", nullable=false)
	 * @Id
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $contractid;

	/**
	 *
	 *
	 * @Column(name="farmerID", type="integer", nullable=false)
	 */
	private $farmerid;

	/**
	 *
	 *
	 * @Column(name="farmerDateOfSigning", type="string", nullable=false)
	 */
	private $farmerdateofsigning;

	/**
	 *
	 *
	 * @Column(name="facilitatorName", type="string", length=45, nullable=false)
	 */
	private $facilitatorname;

	/**
	 *
	 *
	 * @Column(name="facilitatorDateOfSigning", type="string", nullable=false)
	 */
	private $facilitatordateofsigning;

	/**
	 *
	 *
	 * @Column(name="createdAt", type="datetime", nullable=true)
	 */
	private $createdat;

	/**
	 *
	 *
	 * @Column(name="updatetAt", type="datetime", nullable=true)
	 */
	private $updatetat;

	/**
	 *
	 *
	 * @Column(name="createdBy", type="string", length=45, nullable=true)
	 */
	private $createdby;

	/**
     * Get contractid
     *
     * @return integer 
     */
    public function getContractid()
    {
        return $this->contractid;
    }

    /**
     * Set farmerid
     *
     * @param integer $farmerid
     * @return MirembeContractForm
     */
    public function setFarmerid($farmerid)
    {
        $this->farmerid = $farmerid;
    
        return $this;
    }

    public function getFarmerid()
    {
        return $this->farmerid;
    }

    public function setFarmerdateofsigning($farmerdateofsigning)
    {
        $this->farmerdateofsigning = $farmerdateofsigning;
    
        return $this;
    }

    public function getFarmerdateofsigning()
    {
        return $this->farmerdateofsigning;
    }

    public function setFacilitatorname($facilitatorname)
    {
        $this->facilitatorname = $facilitatorname;
    
        return $this;
    }

    public function getFacilitatorname()
    {
        return $this->facilitatorname;
    }

    public function setFacilitatordateofsigning($facilitatordateofsigning)
    {
        $this->facilitatordateofsigning = $facilitatordateofsigning;
    
        return $this;
    }

    public function getFacilitatordateofsigning()
    {
        return $this->facilitatordateofsigning;
    }

    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;
    
        return $this;
    }

    public function getCreatedat()
    {
        return $this->createdat;
    }

    public function setUpdatetat($updatetat)
    {
        $this->updatetat = $updatetat;
    
        return $this;
    }


    public function getUpdatetat()
    {
        return $this->updatetat;
    }


    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;
    
        return $this;
    }

    public function getCreatedby()
    {
        return $this->createdby;
    }
}
