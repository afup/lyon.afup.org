---
id: 1096
title: 'Retour sur l&rsquo;apéro PHP du 29 d&rsquo;avril'
date: 2015-05-21T13:18:06+00:00
author: Benoît Lévêque
layout: post
guid: /archives/?p=1096
permalink: /2015/05/21/retour-sur-lapero-php-du-29-davril/
categories:
  - AperoPHP
---
Lors de l&rsquo;apéro PHP du mois d&rsquo;avril, Thomas Jarrand [@tom32i](https://twitter.com/tom32i) et Emeric Kasbarian [@emerick42](https://twitter.com/emerick42) de l&rsquo;agence web élao nous ont fait un présentation intitulé &laquo;&nbsp;Patate vs Pomme de terre : ça va se friter ! (Beauté vs Efficacité : l’affrontement !)&nbsp;&raquo;.

Au moyen d&rsquo;un projet fictif de vente de tableaux, il nous ont présenté les différentes étapes de la vie d&rsquo;un projet.

> Première version, un MVP réalisé en quelques jours/semaines à partir d&rsquo;un outil du marché (wordpress), ici pas de notion de qualité, il fallait faire vite pour avoir quelque chose de montrable au client.
> 
> Passage de ce MVP en production suite à la demande du client, celui-ci ne fonctionne pas correctement, les demandes d&rsquo;évolutions sont très compliquées et très longues à mettre en place sans tout casser.
> 
> Ils décident donc de tout recommencer en essayant de faire du &laquo;&nbsp;ultra qualité&nbsp;&raquo;, en appliquant le pattern CQRS (Command Query Responsibility Seggregation) à la lettre. Ici ils peuvent enfin avoir une maîtrise complète de la dette technique.
> 
> Deux mois avant la mise en production, ils se rendent compte qu&rsquo;ils ne sont pas dans les temps, et ils commencent donc à prendre des raccourcis pour augmenter rapidement la valeur du produits (drop des tests, augmentation significative de la taille de l&rsquo;équipe, bypass du command bus).
> 
> Apres le rush de la mise en production, ils se rendent compte qu&rsquo;ils ont introduit un certain nombre de problèmes, et transformé leur application en monstre inmaintenable (pas de test automatisé).
> 
> Il faut maintenant maintenir le projet, la qualité est ré-introduite petit à petit en fonction des demandes d&rsquo;évolutions et des corrections de bug.

A partir de ce cas extrême, ils ont essayé de nous faire prendre conscience du mélange d’efficacité et de qualité à mettre en place pour bien réussir ses projets.

En fonction de l’exigence du projet en terme de performance, de la durée de vie, et des impératifs de qualité du client, il faut se demander à chaque fois quel ratio efficacité/qualité utiliser.

Ils ont également essayé de nous montrer que le métier de développeur, ce n&rsquo;est pas forcement que du code mais, pour qu&rsquo;un projet réussisse, il faut sortir la tête de son écran et interagir avec les autres intervenant du projet (client, autre développeur) pour faire évoluer le projet dans le bon sens.

![](/files/2015/05/IMG_0345-300x225.png)

Les slides : <http://beaute-vs-efficacite.github.io/slides/#/>

Merci à toutes les personnes présentes et surtout aux 2 conférenciers Thomas Jarrand [@tom32i](https://twitter.com/tom32i) et Emeric Kasbarian [@emerick42](https://twitter.com/emerick42).

Rendez-vous le 4 juin pour une conférence sur Pomm à l&rsquo;Epitech : </archives/2015/05/19/conference-sur-pomm-le-4-juin-a-19h/>
