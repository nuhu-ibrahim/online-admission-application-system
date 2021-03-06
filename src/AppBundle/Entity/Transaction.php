<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="transactiontbl")
*/
class Transaction
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
    */
    private $app_no;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"confirm"}, message="Provide Student's Invoice Number.")
    */
    private $invoice_no;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
    */
    private $pay_status;
   
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
    */
    private $trans_type;

    /**
     * Set appNo
     *
     * @param integer $appNo
     *
     * @return Transaction
     */
    public function setAppNo($appNo)
    {
        $this->app_no = $appNo;

        return $this;
    }

    /**
     * Get appNo
     *
     * @return integer
     */
    public function getAppNo()
    {
        return $this->app_no;
    }

    /**
     * Get invoiceNo
     *
     * @return integer
     */
    public function getInvoiceNo()
    {
        return $this->invoice_no;
    }

    /**
     * Set payStatus
     *
     * @param string $payStatus
     *
     * @return Transaction
     */
    public function setPayStatus($payStatus)
    {
        $this->pay_status = $payStatus;

        return $this;
    }

    /**
     * Get payStatus
     *
     * @return string
     */
    public function getPayStatus()
    {
        return $this->pay_status;
    }

    /**
     * Set transType
     *
     * @param string $transType
     *
     * @return Transaction
     */
    public function setTransType($transType)
    {
        $this->trans_type = $transType;

        return $this;
    }

    /**
     * Get transType
     *
     * @return string
     */
    public function getTransType()
    {
        return $this->trans_type;
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
     * Set invoiceNo
     *
     * @param string $invoiceNo
     *
     * @return Transaction
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoice_no = $invoiceNo;

        return $this;
    }
}
