<?php

declare(strict_types=1);

namespace Afup\Antenne;

use Afup\Antenne\Config\Site;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

final readonly class Generator
{
    private const string CNAME_FILE = __DIR__ . '/../config/CNAME';
    private const string CONFIG_FILE = __DIR__ . '/../config/config.php';
    private const string TEMPLATES_DIR = __DIR__ . '/../resources/templates';

    private Site $config;
    private Environment $twig;
    private string $domain;

    public function __construct()
    {
        if (!file_exists(self::CNAME_FILE)) {
            throw new \RuntimeException('The config/CNAME file is missing.');
        }

        if (!file_exists(self::CONFIG_FILE)) {
            throw new \RuntimeException('The config/config.php file is missing.');
        }

        // Wrap the loading in a closure to avoid polluting the class with variables created in the config file.
        $config = (function () {
            return require self::CONFIG_FILE;
        })();

        if (!is_object($config) && !$config instanceof Site) {
            throw new \RuntimeException('The config/config.php file is invalid, expected an instance of ' . Site::class);
        }

        $this->domain = file_get_contents(self::CNAME_FILE);
        $this->config = $config;
        $this->twig = new Environment(new FilesystemLoader(self::TEMPLATES_DIR));
    }

    public function render(string $view = 'index'): string
    {
        return $this->twig->render("$view.html.twig", [
            'config' => ($this->config)($this->domain),
        ]);
    }
}
