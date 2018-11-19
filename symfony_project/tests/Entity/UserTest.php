<?php
namespace App\Tests\Entity;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
  /** @test */
  public function NameTest()
  {
    $user = new User();
    $user->setName("TestName");
    $this->assertEquals("TestName", $user->getName());
  }
  /** @test */
  public function PasswordTest()
  {
    $user = new User();
    $user->setPassword("TestPassword");
    $this->assertEquals("TestPassword", $user->getPassword());
  }
  /** @test */
  public function EmailTest()
  {
    $user = new User();
    $user->setEmail("TestEmail");
    $this->assertEquals("TestEmail", $user->getEmail());
  }
  /** @test */
  public function PseudoTest()
  {
    $user = new User();
    $user->setPseudo("TestPseudo");
    $this->assertEquals("TestPseudo", $user->getPseudo());
  }
}