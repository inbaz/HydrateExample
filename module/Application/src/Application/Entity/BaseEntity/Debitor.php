<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-zf2inputfilterannotation) on 2015-09-19
 * 20:01:35.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace Application\Entity\BaseEntity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

/**
 * Application\Entity\BaseEntity\Debitor
 *
 * @ORM\MappedSuperclass()
 * @ORM\Table(name="Debitor", uniqueConstraints={@ORM\UniqueConstraint(name="debitor_handle", columns={"handle"})})
 */
class Debitor implements InputFilterAwareInterface
{
    /**
     * Instance of InputFilterInterface.
     *
     * @var InputFilter
     */
    protected $inputFilter;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    protected $handle;

    /**
     * @ORM\Column(name="`name`", type="text")
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $business;

    /**
     * @ORM\Column(type="integer")
     */
    protected $turnus;

    /**
     * Time in days until invoice needs to be paid
     *
     * @ORM\Column(type="integer")
     */
    protected $payment_target;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $invoice_email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $invoice_start;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $invoice_end;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $reminder_template;

    /**
     * Bankeinzug (0:nein, 1:ja)
     *
     * @ORM\Column(type="boolean")
     */
    protected $direct_debit;

    /**
     * @ORM\Column(type="float")
     */
    protected $default_rate;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $auto_invoice;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\OneToMany(targetEntity="Contact", mappedBy="debitor")
     * @ORM\JoinColumn(name="id", referencedColumnName="Debitor_id")
     */
    protected $contacts;

    public function __construct()
    {
        $this->contacts = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of handle.
     *
     * @param string $handle
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * Get the value of handle.
     *
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of business.
     *
     * @param boolean $business
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setBusiness($business)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get the value of business.
     *
     * @return boolean
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set the value of turnus.
     *
     * @param integer $turnus
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setTurnus($turnus)
    {
        $this->turnus = $turnus;

        return $this;
    }

    /**
     * Get the value of turnus.
     *
     * @return integer
     */
    public function getTurnus()
    {
        return $this->turnus;
    }

    /**
     * Set the value of payment_target.
     *
     * @param integer $payment_target
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setPaymentTarget($payment_target)
    {
        $this->payment_target = $payment_target;

        return $this;
    }

    /**
     * Get the value of payment_target.
     *
     * @return integer
     */
    public function getPaymentTarget()
    {
        return $this->payment_target;
    }

    /**
     * Set the value of invoice_email.
     *
     * @param string $invoice_email
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setInvoiceEmail($invoice_email)
    {
        $this->invoice_email = $invoice_email;

        return $this;
    }

    /**
     * Get the value of invoice_email.
     *
     * @return string
     */
    public function getInvoiceEmail()
    {
        return $this->invoice_email;
    }

    /**
     * Set the value of invoice_start.
     *
     * @param string $invoice_start
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setInvoiceStart($invoice_start)
    {
        $this->invoice_start = $invoice_start;

        return $this;
    }

    /**
     * Get the value of invoice_start.
     *
     * @return string
     */
    public function getInvoiceStart()
    {
        return $this->invoice_start;
    }

    /**
     * Set the value of invoice_end.
     *
     * @param string $invoice_end
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setInvoiceEnd($invoice_end)
    {
        $this->invoice_end = $invoice_end;

        return $this;
    }

    /**
     * Get the value of invoice_end.
     *
     * @return string
     */
    public function getInvoiceEnd()
    {
        return $this->invoice_end;
    }

    /**
     * Set the value of reminder_template.
     *
     * @param string $reminder_template
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setReminderTemplate($reminder_template)
    {
        $this->reminder_template = $reminder_template;

        return $this;
    }

    /**
     * Get the value of reminder_template.
     *
     * @return string
     */
    public function getReminderTemplate()
    {
        return $this->reminder_template;
    }

    /**
     * Set the value of direct_debit.
     *
     * @param boolean $direct_debit
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setDirectDebit($direct_debit)
    {
        $this->direct_debit = $direct_debit;

        return $this;
    }

    /**
     * Get the value of direct_debit.
     *
     * @return boolean
     */
    public function getDirectDebit()
    {
        return $this->direct_debit;
    }

    /**
     * Set the value of default_rate.
     *
     * @param float $default_rate
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setDefaultRate($default_rate)
    {
        $this->default_rate = $default_rate;

        return $this;
    }

    /**
     * Get the value of default_rate.
     *
     * @return float
     */
    public function getDefaultRate()
    {
        return $this->default_rate;
    }

    /**
     * Set the value of auto_invoice.
     *
     * @param boolean $auto_invoice
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setAutoInvoice($auto_invoice)
    {
        $this->auto_invoice = $auto_invoice;

        return $this;
    }

    /**
     * Get the value of auto_invoice.
     *
     * @return boolean
     */
    public function getAutoInvoice()
    {
        return $this->auto_invoice;
    }

    /**
     * Set the value of active.
     *
     * @param boolean $active
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get the value of active.
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set the value of updated.
     *
     * @param \DateTime $updated
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get the value of updated.
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of created.
     *
     * @param \DateTime $created
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Add Contact entity to collection (one to many).
     *
     * @param \Application\Entity\BaseEntity\Contact $contact
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function addContact(Contact $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove Contact entity from collection (one to many).
     *
     * @param \Application\Entity\BaseEntity\Contact $contact
     * @return \Application\Entity\BaseEntity\Debitor
     */
    public function removeContact(Contact $contact)
    {
        $this->contacts->removeElement($contact);

        return $this;
    }

    /**
     * Get Contact entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Not used, Only defined to be compatible with InputFilterAwareInterface.
     * 
     * @param \Zend\InputFilter\InputFilterInterface $inputFilter
     * @throws \Exception
     */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used.");
    }

    /**
     * Return a for this entity configured input filter instance.
     *
     * @return InputFilterInterface
     */
    public function getInputFilter()
    {
        if ($this->inputFilter instanceof InputFilterInterface) {
            return $this->inputFilter;
        }
        $factory = new InputFactory();
        $filters = array(
            array(
                'name' => 'id',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'handle',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'name',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'business',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'turnus',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'payment_target',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'invoice_email',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'invoice_start',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'invoice_end',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'reminder_template',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'direct_debit',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'BankAccount_id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'default_rate',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'auto_invoice',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'active',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'updated',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            array(
                'name' => 'created',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        );
        $this->inputFilter = $factory->createInputFilter($filters);

        return $this->inputFilter;
    }

    /**
     * Populate entity with the given data.
     * The set* method will be used to set the data.
     *
     * @param array $data
     * @return boolean
     */
    public function populate(array $data = array())
    {
        foreach ($data as $field => $value) {
            $setter = sprintf('set%s', ucfirst(
                str_replace(' ', '', ucwords(str_replace('_', ' ', $field)))
            ));
            if (method_exists($this, $setter)) {
                $this->{$setter}($value);
            }
        }

        return true;
    }

    /**
     * Return a array with all fields and data.
     * Default the relations will be ignored.
     * 
     * @param array $fields
     * @return array
     */
    public function getArrayCopy(array $fields = array())
    {
        $dataFields = array('id', 'handle', 'name', 'business', 'turnus', 'payment_target', 'invoice_email', 'invoice_start', 'invoice_end', 'reminder_template', 'direct_debit', 'BankAccount_id', 'default_rate', 'auto_invoice', 'active', 'updated', 'created');
        $relationFields = array('bankAccount');
        $copiedFields = array();
        foreach ($relationFields as $relationField) {
            $map = null;
            if (array_key_exists($relationField, $fields)) {
                $map = $fields[$relationField];
                $fields[] = $relationField;
                unset($fields[$relationField]);
            }
            if (!in_array($relationField, $fields)) {
                continue;
            }
            $getter = sprintf('get%s', ucfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $relationField)))));
            $relationEntity = $this->{$getter}();
            $copiedFields[$relationField] = (!is_null($map))
                ? $relationEntity->getArrayCopy($map)
                : $relationEntity->getArrayCopy();
            $fields = array_diff($fields, array($relationField));
        }
        foreach ($dataFields as $dataField) {
            if (!in_array($dataField, $fields) && !empty($fields)) {
                continue;
            }
            $getter = sprintf('get%s', ucfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $dataField)))));
            $copiedFields[$dataField] = $this->{$getter}();
        }

        return $copiedFields;
    }

    public function __sleep()
    {
        return array('id', 'handle', 'name', 'business', 'turnus', 'payment_target', 'invoice_email', 'invoice_start', 'invoice_end', 'reminder_template', 'direct_debit', 'BankAccount_id', 'default_rate', 'auto_invoice', 'active', 'updated', 'created');
    }
}