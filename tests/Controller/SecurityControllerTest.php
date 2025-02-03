<?php

namespace App\Tests\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;
  
    protected function setUp():void
    {
        //Retrieve the necessary services
        $this->client = static::createClient();
        $container = static::getContainer();

        $this->entityManager = $container->get(EntityManagerInterface::class);
        $this->passwordHasher = $container->get(UserPasswordHasherInterface::class);

        //Check if user already exists
        $userRepository = $this->entityManager->getRepository(User::class);
        $existingUser = $userRepository->findOneBy(['email'=>'johndoe@gmail.com']);

        //Create user if doesn't exist yet
        if(!$existingUser){
            $user = new User();
            $user -> setUsername('John Doe');
            $user -> setEmail('johndoe@gmail.com');
            $user -> setRoles(['ROLE_USER']);
            $user -> setVerified(true);
            $user -> setPassword($this->passwordHasher->hashPassword($user,'admin012345'));

            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
    }
    
    public function testLoginUser()
    {
        //Go to connexion page

        $crawler = $this->client->request('GET', '/login');
        //Check if the page loaded correctly
        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');

        //Submit registration form
        $form = $crawler->selectButton('Connexion')->form([
            'email'=>'johndoe@gmail.com',
            'password'=>'admin012345',
        ]);

        $this->client->submit($form);

        //Check if redirect correctly after connexion
        $this->assertResponseRedirects('/');

        $this->client->followRedirect();
    }

}