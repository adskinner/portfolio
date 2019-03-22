---
layout: "post"
title: "Why I chose to build a portfolio site with Jekyll and host it with Github pages"
author: "Allison Skinner"
categories:
  - code
tags: [Jekyll, Portfolio Website, Static Sites, Github Pages]
permalink: /writing/:title
description: I didn't build my website on Wordpress, Drupal, Squarespace, or Wix. I chose to not use a CMS platform to build my website, instead I chose Jekyll, a static site generator. I also chose to host my site on Github Pages. Read along to learn why!
---
## 1. Why didn’t I build my website in Wordpress or Drupal? (Because that’s what I build most of my client websites with)
For my clients, I primarily build websites on [Wordpress](https://wordpress.org/), [Drupal](https://drupal.org) or [Shopify](https://shopify.com). I love working on these platforms because it gives my clients with limited technical expertise the ability to update and manage their own websites.
However, I do have the technical experience to update/edit my personal website without any admin interface or user dashboard. I wanted a lean publishing platform that would allow for me push changes and manage a blog with ease -- that's why I chose Jekyll!

## 2. Why Jekyll? What’s so great about it.
[Jekyll](https://jekyllrb.com/) is a static site generator. A static site has no database, it’s really just turning simple markup (text, images, etc.) into a web page. You install Jekyll into a Git repo, add some files, push the changes and *voila* there's your website. The lack of a database is impossible for some businesses (online shops) but can be beneficial for others.

### Jekyll has a variety of benefits...

  1. **They load super fast.**
  - A database-less static website usually loads 10x faster than a website with a CMS. Wow!
  - For example, even the most image-heavy pages of my website load in under 1.2 seconds. That’s a speed a Wordpress site could only dream of!
  2. **They are very secure**
  - Since a Jekyll website is only serving static files there are no scripting or database security exploits possible for hackers.
  3. **SEO benefits**
  - Wordpress and other CMS have a lot of SEO tools, but they don't have this level of site speed on their side. And Google loves fast websites! Also, it's easier to maintain a clean file path structure in Jekyll (in my opinion) and Google loves clean file path structures.
  4. **Built-in blogging platform.**
  - Jekyll has blogging functionality out of the box.
  - Adding a blog post is as simple as adding a markdown file to your posts folder. There is no content editor or admin dashboard to deal with!
  5. **Has SASS compiler pre-installed.**
  - SASS can be fairly straightforward to write, but setting up a server-compatible compiler is sometimes not that easy. Luckily, Jekyll has your SASS compiler already set up for you.
  6. **You can serve website on local computer**
  - If you want to view your Jekyll site before publishing to the production, all you have to do is run "jekyll serve" from your terminal. It will run your SASS compiler and all the other Jekyll magic and serve your website on your local IP.
  7. **Built with liquid**
  - Liquid is PHP's more attractive cousin and it's a lot of fun to code in.
  8. **"Layouts" and "Includes" allow for fast building**
  - If you are building a raw HTML site and you need to add a new page, you'll have to copy over the head, header, main menu, footer, etc. It's a tedious process and makes changes/updates to your code difficult to manage.
  - Jekyll has support for 'layouts' and 'includes'. 'Layouts' allow you to create a structure for different page templates, such as 'posts' or 'portfolio examples'.
  - "Includes" are like blocks, they are snippets of HTML that you can *include* anywhere on your site. If you ever update your "layout" or an "include", it'll update sitewide.

## 3. Why host on [Github Pages](https://pages.github.com/)?
  1. **The simplest answer is that it’s FREE.**
  - Most hosting plans start at least at $10/month, but decent hosting plans are usually $35/month or higher. So with Github pages, I’m saving hundreds of dollars a year. (GH Pages is only compatible with static sites, so this isn't free hosting for all!)
  2. **The SSL certificate is free & pre-installed.**
  - All Github Pages hosted websites have a free, automatic SSL certificate.
  3. **You can manage your website directly from your git repo.**
  - Once you push your changes to your gh-pages branch, it’s pushed to your production site. Easy as that!


  Would a Jekyll website be a good fit for your business? Read my post that breaks down the pros and cons of Jekyll websites [COMING SOON].
