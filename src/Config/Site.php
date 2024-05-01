<?php

declare(strict_types=1);

namespace Afup\Antenne\Config;

final class Site
{
    /** @var array<Link> */
    private array $topLinks = [];

    /** @var array<Link> */
    private array $bottomLinks = [];

    private string $antenne;
    private ?string $repository = null;

    private function __construct() {}

    public static function configure(string $antenne): self
    {
        $site = new self();
        $site->antenne = preg_replace('/^AFUP /', '', $antenne);

        return $site;
    }

    public function repository(string $repository): self
    {
        $this->repository = $repository;

        return $this;
    }

    public function withTopLink(Link $link): self
    {
        $this->topLinks[] = $link;

        return $this;
    }

    public function withBottomLink(Link $link): self
    {
        $this->bottomLinks[] = $link;

        return $this;
    }

    public function twitter(string $username): self
    {
        return $this->withTopLink(new Link('Twitter', "https://twitter.com/$username", 'fa-brands fa-twitter'));
    }

    public function mastodon(string $url): self
    {
        return $this->withTopLink(new Link('Mastodon', $url, 'fa-brands fa-mastodon'));
    }

    public function bluesky(string $url): self
    {
        return $this->withTopLink(new Link('Bluesky', $url, 'fa-brands fa-bluesky'));
    }

    public function linkedIn(string $url): self
    {
        return $this->withTopLink(new Link('LinkedIn', $url, 'fa-brands fa-linkedin'));
    }

    public function meetup(string $url): self
    {
        return $this->withTopLink(new Link('Meetup', $url, 'fa-brands fa-meetup'));
    }

    public function currentEvent(string $name): self
    {
        return $this->withBottomLink(new Link($name, 'https://event.afup.org', 'fa-regular fa-calendar-check'));
    }

    public function callForPapers(string $url, string $title = 'Appel à speakers'): self
    {
        return $this->withBottomLink(new Link($title, $url, 'fa-solid fa-microphone'));
    }

    /**
     * We use the __invoke magic method to hide it from auto-completion.
     * It's just a trick to make the class nicer to use.
     */
    public function __invoke(string $domain): array
    {
        return [
            'antenne' => $this->antenne,
            'domain' => $domain,
            'repository' => $this->repository,
            'links' => [
                'top' => $this->topLinks,
                'bottom' => $this->bottomLinks,
            ],
        ];
    }
}
