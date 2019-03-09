---
layout: page
active: archive
body_class: "index"
has_subheader: true
---

  <h2 class="category-key">Dernier article</h2>
  
  {% for post in site.posts limit:1 %}
  <div class="latest-article">
    <a href="{{ post.url | relative_url}}" class="latest-article-title">{{ post.title }}</a>
    <span class="date">{{ post.date | date: "%d/%m/%Y"  }}</span>
    <div class="latest-article-title-excerpt">
        {{ post.excerpt }}
    </div>
    <div style="text-align:right">
        <a href="{{ post.url | relative_url}}" class="call-to-action">Voir plus</a>
    </div>
  </div>
  {% endfor %}

  <h2 class="category-key">Articles précédents</h2>
  
  <ul class="previous-articles">
  {% for post in site.posts offset:1 %}
    <li>
        <a href="{{ post.url | relative_url }}">{{ post.title }}</a>
        <span class="date">{{ post.date | date: "%d/%m/%Y"  }}</span>
    </li>
  {% endfor %}
  </ul>
