<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use ContainerKxQibbQ\getSecurity_Authenticator_Manager_MainService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategory('Nouilles & vermicelle', null, $manager);

        $this->createCategory('Nouilles chinois', $parent, $manager);
        $this->createCategory('Nouilles japonais', $parent, $manager);
        $this->createCategory('Nouilles coréen', $parent, $manager);
        $this->createCategory('Autres nouilles', $parent, $manager);
        $this->createCategory('Vermicelle de riz', $parent, $manager);
        $this->createCategory('Autres vermicelle', $parent, $manager);

        $parent = $this->createCategory('Nouilles instantannées', null, $manager);

        $this->createCategory('Chinois', $parent, $manager);
        $this->createCategory('Japonais', $parent, $manager);
        $this->createCategory('Coréen', $parent, $manager);
        $this->createCategory('Autres nouilles', $parent, $manager);
        $this->createCategory('Vermicelle instantannées', $parent, $manager);

        $parent = $this->createCategory('Riz', null, $manager);

        $this->createCategory('Riz thai', $parent, $manager);
        $this->createCategory('Riz japonais', $parent, $manager);
        $this->createCategory('Riz gluant', $parent, $manager);
        $this->createCategory('Riz basmati', $parent, $manager);
        $this->createCategory('Autres riz', $parent, $manager);

        $parent = $this->createCategory('Sauces & Assaisonnement', null, $manager);

        $this->createCategory('Sauces soja', $parent, $manager);
        $this->createCategory('Sauces poissons', $parent, $manager);
        $this->createCategory('Sauces d\'huîtres', $parent, $manager);
        $this->createCategory('Huiles & vinaigres', $parent, $manager);
        $this->createCategory('Epices asiatiques', $parent, $manager);
        $this->createCategory('Autres sauces', $parent, $manager);

        $parent = $this->createCategory('Confiserie & snaking', null, $manager);

        $this->createCategory('Chips & Apéritif', $parent, $manager);
        $this->createCategory('Confiserie', $parent, $manager);
        $this->createCategory('Gâteau', $parent, $manager);
        $this->createCategory('Autres', $parent, $manager);

        $parent = $this->createCategory('Conserves', null, $manager);

        $this->createCategory('lait de coco', $parent, $manager);
        $this->createCategory('Fruits', $parent, $manager);
        $this->createCategory('Légumes & pickles', $parent, $manager);
        $this->createCategory('Autres conserves', $parent, $manager);

        $parent = $this->createCategory('Boissons lcools', null, $manager);

        $this->createCategory('Bières', $parent, $manager);
        $this->createCategory('Soju', $parent, $manager);
        $this->createCategory('Saké', $parent, $manager);
        $this->createCategory('Autres alcools', $parent, $manager);

        $parent = $this->createCategory('Boissons sans alcools', null, $manager);

        $this->createCategory('Jus de fruits', $parent, $manager);
        $this->createCategory('Sirops', $parent, $manager);
        $this->createCategory('Sodas', $parent, $manager);
        $this->createCategory('Thé & infusions', $parent, $manager);
        $this->createCategory('Autres boissons', $parent, $manager);

        $parent = $this->createCategory('Divers', null, $manager);

        $this->createCategory('Baguettes asiatiques', $parent, $manager);
        $this->createCategory('Vaisselle', $parent, $manager);
        $this->createCategory('Décoration', $parent, $manager);
        $this->createCategory('Autres ustensiles', $parent, $manager);

        $manager->flush();
    }

    public function createCategory(string $name, Categories $parent = null, ObjectManager $manager)
    {
        $category = new Categories();
        $category->setName($name);
        $category->setSlug($this->slugger->slug($category->getName())->lower());
        $category->setParent($parent);
        $manager->persist($category);

        return $category;
    }
}
