---
id: 806
title: Retour sur le Hack day symfony
date: 2014-07-17T12:37:57+00:00
author: Adrien Gallou
layout: post
guid: http://lyon.afup.org/?p=806
permalink: /2014/07/17/retour-sur-le-hack-day-symfony/
categories:
  - Non classé
---
Samedi 5 juillet à eu lieu un Hackaton dont le but était d&rsquo;améliorer l&rsquo;expérience développeur du projet Symfony : le [Hack Day Symfony](http://symfony.com/blog/first-online-symfony-community-hack-day-july-5th).

<blockquote class="twitter-tweet" data-width="550">
  <p lang="en" dir="ltr">
    We’re hacking right now to make the entire Symfony eco-system better. Join us! <a href="http://t.co/WI1S1pnzrR">http://t.co/WI1S1pnzrR</a>
  </p>
  
  <p>
    &mdash; Ryan Weaver (@weaverryan) <a href="https://twitter.com/weaverryan/status/485382428622471169?ref_src=twsrc%5Etfw">July 5, 2014</a>
  </p>
</blockquote>



Quelques développeurs Lyonnais se sont retrouvés à cette occasion dans les locaux de la société Elao afin de travailler ensemble tout au long de cette journée. Voici un rapide retour sur celle-ci.

Un petit guide de contribution au Hack Day se trouvait sur [un Gist](https://gist.github.com/weaverryan/3d8a266c78cb21b5ac69) et les issues étaient réparties sur un [google speadsheet](https://docs.google.com/spreadsheet/ccc?key=0AkTCyW0ZOR36dEV2azFLWDVVTmQ1aW9pMHoyUWE4VGc#gid=0).

<blockquote class="twitter-tweet" data-width="550">
  <p lang="en" dir="ltr">
    Le hackday <a href="https://twitter.com/hashtag/symfony?src=hash&ref_src=twsrc%5Etfw">#symfony</a> a commencé chez <a href="https://twitter.com/Elao?ref_src=twsrc%5Etfw">@Elao</a> <a href="http://t.co/Xn3mp0PiDE">pic.twitter.com/Xn3mp0PiDE</a>
  </p>
  
  <p>
    &mdash; Benoît Lévêque (@benoit_leveque) <a href="https://twitter.com/benoit_leveque/status/485342351288971264?ref_src=twsrc%5Etfw">July 5, 2014</a>
  </p>
</blockquote>



Voici la liste des issues qui ont été traitées par les développeurs présents. Elles n&rsquo;étaient pas toutes directement liées à symfony, une grande partie d&rsquo;entre elles étaient liées à son écosystème, aux différents Bundles symfony. Celles-ci sont variées et vont de l&rsquo;ajout de fonctionnalité à la modification de documentation en passant par des changements sur des interfaces.

<li style="font-weight: normal">
  symfony/symfony <ul>
    <li style="font-weight: normal">
      <a href="https://github.com/symfony/symfony/issues/11303"><span class="js-issue-title">[DX] Potential container:explore command</span></a>
    </li>
  </ul>
</li>

  * sensiolabs/SensioGeneratorBundle 
      * [[DX] Normalize generation tools](https://github.com/sensiolabs/SensioGeneratorBundle/issues/280)
      * [[DX] Do not use parameters in generate:bundle service file ](https://github.com/sensiolabs/SensioGeneratorBundle/issues/285)
      * [[DX] Potential missing annotation route import](https://github.com/sensiolabs/SensioGeneratorBundle/issues/284)
<li style="font-weight: normal">
  doctrine/migrations <ul>
    <li style="font-weight: normal">
      <a href="https://github.com/doctrine/migrations/issues/173"><span class="js-issue-title">[DX] Help the user know how to test a migration file</span></a>
    </li>
  </ul>
</li>

<li style="font-weight: normal">
  dustin10/VichUploaderBundle <ul>
    <li style="font-weight: normal">
      <a href="https://github.com/dustin10/VichUploaderBundle/issues/273">[DX] Documentation Tweaks</a>
    </li>
  </ul>
</li>

<li style="font-weight: normal">
  sensiolabs/SensioDistributionBundle <ul>
    <li style="font-weight: normal">
      <a href="https://github.com/sensiolabs/SensioDistributionBundle/pull/131">Improve check php</a>
    </li>
  </ul>
</li>

  * 1up-lab/OneupUploaderBundle 
      * [Add the getClientOriginalName method to the FileInterface](https://github.com/1up-lab/OneupUploaderBundle/pull/117)

Jusqu’à présent 2 PR ont été mergées :

  * <h1 class="gh-header-title" style="font-weight: normal">
      <a href="https://github.com/sensiolabs/SensioGeneratorBundle/pull/286"><span class="js-issue-title">[DX] Normalize generation tools</span></a>
    </h1>

  * <h1 class="gh-header-title" style="font-weight: normal">
      <a href="https://github.com/sensiolabs/SensioGeneratorBundle/pull/287"><span class="js-issue-title">[DX] Do not use parameters in generate:bundle service file</span></a>
    </h1>

&nbsp;

Cette journée à permis aux participants d&rsquo;échanger et de s&rsquo;entraider lors du développement sur leurs issues. Le travail des développeurs lyonnais à été remarqué par les organisateurs de cette journée :

https://twitter.com/javiereguiluz/status/485422198232842240

Nous organiserons très probablement d&rsquo;autres journées de type. N&rsquo;hésitez pas à venir lors des prochains hackatons, tout le monde et toute aide est la bienvenue.

PS : n&rsquo;oubliez pas de vous inscrire à l&rsquo;[apéro PHP de juillet](http://aperophp.net/330/view.html)

&nbsp;

&nbsp;

&nbsp;

&nbsp;