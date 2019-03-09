---
layout: page
active: archive
body_class: "index"
has_subheader: true
---

  <h2 class="category-key">Dernier article</h2>

  <ul class="year">
    {% for post in site.posts %}
        <li>
            <a href="{{ post.url | relative_url}}"
            {% if forloop.first %} style="font-weight:bold" {%endif %}
            >{{ post.title }}</a>
            <span class="date">{{ post.date | date: "%d/%m/%Y"  }}</span>
            
          {% if forloop.first %}
            {{ post.excerpt }}
            
            <div style="text-align:right">
<a href="{{ post.url | relative_url}}" class="call-to-action">Voir plus</a>
            </div>
            </li>
            </ul>
<h2 class="category-key">Articles précédents</h2>
<ul class="year">
            
            {% else %}
            </li>          
          {% endif %}
        
    {% endfor %}
  </ul>

