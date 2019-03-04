---
layout: page
title: Categories
slug: categories
---



{% for cat in site.categories %}
  <h2 class='tag-header' id="{{ cat[0] }}">{{ cat[0] }}</h2>
  <ul class="post-list">
    {% assign pages_list = cat[1] %}

    {% for node in pages_list %}
      {% if node.title != null %}
        {% if group == null or group == node.group %}
          {% if page.url == node.url %}
          <li class="active"><a href="{{node.url}}" class="active">{{node.title}}</a></li>
          {% else %}

          <li>
            {% if node.image %}
              <a href="{{ node.url | relative_url }}">
                <img src="{{ site.baseurl }}/assets/img/{{ node.image }}">
              </a>
            {% endif %}
          <h3><a class="post-link" href="{{node.url}}">{{node.title}}</a></h3>
          {%- assign date_format = site.minima.date_format | default: "%b %-d, %Y" -%}
          <span class="post-meta">{{ node.date | date: date_format }} ⚡ {{node.categories | join: ', '}}</span>
        </li>
          {% endif %}
        {% endif %}
      {% endif %}
    {% endfor %}

    {% assign pages_list = nil %}
    {% assign group = nil %}
  </ul>
{% endfor %}
