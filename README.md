# Site d'antenne AFUP

Ce site est généré en PHP avec un simple script et un template Twig.

## Setup local

Ce projet utilise **PHP** et **Node**, les versions requises sont présentes dans les fichiers `composer.json` et `package.json`.

Pour lancer l'installation des dépendances :

```bash
make install
```

Il suffit ensuite de lancer le serveur de développement : `make watch`

Cette commande va démarrer deux choses en parallèle :

- un watcher pour le CSS
- un serveur PHP, accessible à cette adresse : http://localhost:8000

## Personalisation de l'antenne

Le système est conçu pour fonctionner avec n'importe quelle antenne. Il suffit de modifier quelques fichiers.

### Configuration

Le fichier `config/config.php` contient les informations de configuration du site. Il permet de spécifier les liens des
réseaux sociaux et autres de l'antenne voulue.

Exemple de configuration :

```php
return Site::configure('Lyon')
    ->repository('https://github.com/afup/lyon.afup.org')
    ->twitter('AFUP_Lyon')
    ->mastodon('https://mastodon.social/@afup')
    ->bluesky('https://bsky.app/profile/afup.bsky.social')
    ->linkedIn('https://www.linkedin.com/company/afup-lyon/')
    ->meetup('https://www.meetup.com/fr-FR/afup-lyon/')
    ->currentEvent('AFUP Day 2024')
    ->callForPapers('https://afup.org/call-for-speakers')

    // Il est possible de spécifier des liens supplémentaires :

    // Pour ajouter un lien dans la section supérieure
    ->withTopLink(new Link('Exemple de lien', 'https://example.com', 'fa-solid fa-link'))
    
    // Pour ajouter un lien dans la section inférieure
    ->withBottomLink(new Link("Autre exemple", 'https://example.com', 'fa-solid fa-rocket'))
;
```

### Logos

Le logo de l'antenne doit être présent en deux versions :

- `config/logo_simple.png` : utilisé comme favicon
- `config/logo_text.png` : utilisé dans la page, doit avoir un fond transparent

> [!TIP]
> Les logos des antennes sont disponibles ici : https://identity.afup.org

### Domaine

Le nom de domaine du site est à spécifier dans le fichier `config/CNAME`.

## Génération du site

Pour déployer le site, il faut le générer avec la commande suivante :

```bash
make build
```

Cela va générer un dossier `build` contenant tout ce qu'il faut pour déployer le site.

Le déploiement se fait ensuite via un [workflow GitHub](.github/workflows/build-and-deploy.yml).

## Outils utilisés

- [Twig](https://twig.symfony.com/) pour les templates
- [Tailwind](https://tailwindcss.com/) pour le CSS
- [Concurrently](https://github.com/open-cli-tools/concurrently) pour lancer plusieurs commandes en parallèle
