<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="admissionlist")
*/
class AdmissionList
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"val2", "strict3", "al"},message="Provide Student's Application Number")
    */
    private $app_no;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"}, message = "Choose your programme of study.")
     * 
    */
    private $programme;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict", "strict2", "strict3"}, message = "Choose your course of study.")
    */
    private $course;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict", "strict2", "strict3"}, message="Provide your surname.")
    */
    private $surname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $othername;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"}, message = "Provide your firstname.")
    */
    private $firstname;
    
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "login", "strict", "val", "strict3"}, message = "Provide your email address.")
     * @Assert\Email(groups={"reg", "login", "strict","strict2", "val", "strict3"}, message = "Provide a valid email address.")
    */
    private $email;
    
    
    /**
    * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"}, message = "Provide your gender.")
    */
    private $sex;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"} , message = "Choose your state of origin.")
    */
    private $state;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your marital status.")
    */
    private $mstatus;

    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Institution Name.")
    */
    private $inst_name;
    
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Institution Registration Number.")
    */
    private $reg_no;
    
   
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Qualification.")
    */
    private $qual;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Field of Study.")
    */
    private $field;
    

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
     * Set appNo
     *
     * @param string $appNo
     *
     * @return AdmissionList
     */
    public function setAppNo($appNo)
    {
        $this->app_no = $appNo;

        return $this;
    }

    /**
     * Get appNo
     *
     * @return string
     */
    public function getAppNo()
    {
        return $this->app_no;
    }

    /**
     * Set programme
     *
     * @param string $programme
     *
     * @return AdmissionList
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set course
     *
     * @param string $course
     *
     * @return AdmissionList
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return AdmissionList
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set othername
     *
     * @param string $othername
     *
     * @return AdmissionList
     */
    public function setOthername($othername)
    {
        $this->othername = $othername;

        return $this;
    }

    /**
     * Get othername
     *
     * @return string
     */
    public function getOthername()
    {
        return $this->othername;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return AdmissionList
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AdmissionList
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return AdmissionList
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return AdmissionList
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set mstatus
     *
     * @param string $mstatus
     *
     * @return AdmissionList
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;

        return $this;
    }

    /**
     * Get mstatus
     *
     * @return string
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * Set instName
     *
     * @param string $instName
     *
     * @return AdmissionList
     */
    public function setInstName($instName)
    {
        $this->inst_name = $instName;

        return $this;
    }

    /**
     * Get instName
     *
     * @return string
     */
    public function getInstName()
    {
        return $this->inst_name;
    }

    /**
     * Set regNo
     *
     * @param string $regNo
     *
     * @return AdmissionList
     */
    public function setRegNo($regNo)
    {
        $this->reg_no = $regNo;

        return $this;
    }

    /**
     * Get regNo
     *
     * @return string
     */
    public function getRegNo()
    {
        return $this->reg_no;
    }

    /**
     * Set qual
     *
     * @param string $qual
     *
     * @return AdmissionList
     */
    public function setQual($qual)
    {
        $this->qual = $qual;

        return $this;
    }

    /**
     * Get qual
     *
     * @return string
     */
    public function getQual()
    {
        return $this->qual;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return AdmissionList
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
}
