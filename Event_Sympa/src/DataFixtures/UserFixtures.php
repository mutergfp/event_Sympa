<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //User attributes
        $usernameUser=array("admin","user");
        $rolesUser=array(array("role" => "ROLE_ADMIN"),array("role" => "ROLE_USER"));
        $passwordUser=array("admin","user");
        $nameUser=array("admin","Bernard",);
        $firstNameUser=array("admin","Dupont");
        $adressUser=array(NULL,"1 rue des sardines");
        $postalCodeUser=array(NULL,17000);
        $cityUser=array(NULL,"La Rochelle");
        $nbUser=count($usernameUser);

        for($i=0;$i<$nbUser;$i++){
            $user=new User(
                $usernameUser[$i],
                $rolesUser[$i],
                $nameUser[$i],
                $firstNameUser[$i],
                $adressUser[$i],
                $postalCodeUser[$i],
                $cityUser[$i]
            );
            $user->setPassword(
                $this->passwordEncoder->encodePassword(
                    $user,$passwordUser[$i]));
            $manager->persist($user);
        }
        $manager->flush();
    }
}
