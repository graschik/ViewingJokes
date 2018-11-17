<?php
/**
 * Created by PhpStorm.
 * User: grasch
 * Date: 09.11.18
 * Time: 14:52
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 * @Table(name="category")
 */
class Category
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "Название категории не может быть меньше {{ limit }} символов",
     * )
     */
    private $name;

    /**
     * @var Joke
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Joke", mappedBy="category")
     */
    private $jokes;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Joke
     */
    public function getJokes()
    {
        return $this->jokes;
    }

    /**
     * @param Joke $jokes
     */
    public function setJokes($jokes)
    {
        $this->jokes = $jokes;
    }

    public function __toString() {
        return $this->getName();
    }
}