<?php

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Group
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=250, nullable=false)
     */
    private $direccion;   

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=15, nullable=false)
     */
    private $telefonoPrincipal; 

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=15)
     */
    private $telefonoSecundario; 

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15)
     */
    private $fax; 

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=false)
     */
    private $email; 

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=250, nullable=false)
     */
    private $contacto; 

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;



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
     * @return Groups
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Set createdAt
     * 
     * @param \DateTime $createdAt
     * @return Groups
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist 
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Groups
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Group
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefonoPrincipal
     *
     * @param string $telefonoPrincipal
     * @return Group
     */
    public function setTelefonoPrincipal($telefonoPrincipal)
    {
        $this->telefonoPrincipal = $telefonoPrincipal;

        return $this;
    }

    /**
     * Get telefonoPrincipal
     *
     * @return string 
     */
    public function getTelefonoPrincipal()
    {
        return $this->telefonoPrincipal;
    }

    /**
     * Set telefonoSecundario
     *
     * @param string $telefonoSecundario
     * @return Group
     */
    public function setTelefonoSecundario($telefonoSecundario)
    {
        $this->telefonoSecundario = $telefonoSecundario;

        return $this;
    }

    /**
     * Get telefonoSecundario
     *
     * @return string 
     */
    public function getTelefonoSecundario()
    {
        return $this->telefonoSecundario;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Group
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Group
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
     * Set contacto
     *
     * @param string $contacto
     * @return Group
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }
}
