---
layout: page
active: archive
body_class: "index"
has_subheader: true
---

  <h1>{{ site.title }}</h1>

  <h2 class="category-key">{% if site.home_featured_articles_count > 1 %}Derniers articles{% else %}Dernier article{% endif %}</h2>
  
  {% for post in site.posts limit:site.home_featured_articles_count %}
  <div class="latest-article">
    <a href="{{ post.url | relative_url}}" class="latest-article-title">{{ post.title }}</a>
    <span class="latest-article-date publication-date">Publié le {{ post.date | date: "%d/%m/%Y" }}</span>
    <div class="latest-article-title-excerpt">
        {{ post.excerpt }}
    </div>
    <div class="align-right">
        <a href="{{ post.url | relative_url}}" class="call-to-action">Voir plus</a>
    </div>
  </div>
  {% endfor %}

  <h2 class="category-key">Articles précédents</h2>
  
  <ul class="previous-articles">
  {% for post in site.posts offset:site.home_featured_articles_count %}
    <li>
        <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
        <span class="previous-article-date">{{ post.date | date: "%d/%m/%Y" }}</span>
    </li>
  {% endfor %}
  </ul>
