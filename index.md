---
layout: page
active: archive
has_left_logo: true
---

  <style>
  .read-more {
  display:inline-block;
  padding: 10px 30px;
  background-color:#ed0678;
  color:#fff;
  font-size: 130%;
  text-transform: capitalize;
  text-decoration: none;
  font-family: Arimo, "Helvetica Neue", Helvetica, Arial, sans-serif;
  }
  
  .link-to-post {
    padding: 1em;
    font-family: Roboto;
  }
  
  .link-to-post .link-to-post__next {
    font-size:1em;
  }
  
  .post-links {
  margin-bottom: 2em;
  }
  </style>

{% if site.subheader %}
<div class="post-links">
{% for subheader_item in site.subheader %}
<a class="link-to-post" href="{{ subheader_item.url }}" style="margin:10px">
  <span class="link-to-post__next"><i class="fas fa-{{ subheader_item.icon }}"></i>&nbsp;{{ subheader_item.label }}</span>
</a>
{% endfor %}
</div>
{% endif %}

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
<a href="{{ post.url | relative_url}}" class="read-more">VOIR PLUS</a>
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

