<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JokeRepository")
 * @Table(name="joke")
 */
class Joke
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    private $id;

    /**
     * @ORM\Column(name="text", type="text", length=5000)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 10,
     *      minMessage = "Ваш текст не должен быть меньше {{ limit }} символов",
     * )
     */
    private $text;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="jokes", cascade={"persist"}, fetch="EAGER")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Category
     * @Assert\NotNull()
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="jokes", cascade={"persist"}, fetch="EAGER")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_offered", nullable=false, type="boolean")
     */
    private $offered;

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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return User
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Category
     */
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function __toString() {
        return $this->getText();
    }

    /**
     * @return bool
     */
    public function isOffered()
    {
        return $this->offered;
    }

    /**
     * @param bool $offered
     */
    public function setOffered($offered)
    {
        $this->offered = $offered;
    }
}