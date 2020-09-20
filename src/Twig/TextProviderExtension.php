<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use App\Entity\Text;

class TextProviderExtension extends AbstractExtension
{
    /**
     * @var EntityManager 
     */
    protected $em;

    /**
     * @var EntityRepository 
     */
    protected $repo;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        $this->repo = $entityManager->getRepository(Text::class);
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('page', [$this, 'getPage'], ['is_safe' => ['html']]),
            new TwigFunction('meta', [$this, 'getMeta']),
        ];
    }

    public function getPage(string $name): string
    {
        return $this->getData($name, Text::TYPE_HTML);
    }

    public function getMeta(string $name): string
    {
        return $this->getData($name, Text::TYPE_META);
    }

    private function getData(string $name, string $type): string
    {
        $text = $this->repo->findOneBy(['name' => $name, 'type' => $type]);
        if ($text) {
            return $text->getContent();
        } else {
            $this->em->persist(new Text($name, $name, $type));
            $this->em->flush();
            return $name;
        }
    }
}