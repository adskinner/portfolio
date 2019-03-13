---
layout: "post"
title: "Is Jekyll the right platform for your website?"
author: "Allison Skinner"
categories:
  - code
tags: [Jekyll, Static Sites]
permalink: /writing/:title
description: I used Jekyll, a static site generator, for my portfolio website's platform. It's an unconventional choice compared to the conventional Wordpress, Shopify or Squarespace platforms. Could Jekyll be the right fit for your business website?
---

>Let's start by learning some basics...

### What is Jekyll?

Jekyll is a static site generator.

### What is a static site generator?

A static site generator compiles your text, css and javascript files and spits out a templated website of static HTML files *without* a database. A CMS, like Wordpress, holds your content in a database and the server will query the database(s) to generate HTML files for your website.

If you'd like to continue reading about what static site generators are, I think David Walsh provides a great explanation in his article, "[An Introduction to Static Site Generators](https://davidwalsh.name/introduction-static-site-generators)".

David Walsh says static site generators "can be for everyone, just not for everything". Anyone can setup and manage a Jekyll website, but is a Jekyll website the right fit for their business? I'm going to try to answer that for you today!


## Jekyll IS NOT the right fit for you if…

### 1. You want real-time content on your website.

Examples of real-time content is a "current temperature" block, a "popular posts" block that lists the most viewed articles today, a "reccommeded articles" block based on what you've been reading. This real-time content is possible through a database.
If this type of content is important to you, then Jekyll is likely not the best fit for your business.

### 2. You want to run an online store.

Running an online store requires a database for multiple reasons -- customer profiles, customer orders, products, coupons, etc. Also you need to be able to link third-party payment methods like Square, Paypal, Stripe, etc. to your website. If you want to run an online shop, I'd recommend Wordpress or Shopify.

I would like to add that if you only want to sell a few items or you are simply trying to raise donations, Jekyll could still be an appropriate fit for you. You can embed paypal buttons to your website. For example, Barack Obama raised $250 million of donations through his Jekyll campaign website!

### 3. You want a UI (user interface) to be able to manage/update your website.

Having a UI is important for website managers that have limited technical experience. A UI allows you to have dashboard with clear buttons that say "add new post" or "add new page". A UI allows you to have a content editor to format text. A UI allows you to push your changes by clicking the "publish now" button.

When working with Jekyll, you won't have a UI. To add a new post, you won't be clicking any clearly labelled buttons. Instead, you will add a markdown file to your "posts" folder and then push your changes to your live repo. This could be a little overwhelming to some, but I think these skills that can be quickly learned!

## Jekyll IS the right fit for you if...

### 1. Your website is relatively simple

I would say your website is relatively simple if your site only needs a few informational pages ("about" page for example), a blog and a contact page with a contact form. That's essentially how simple my website is! If you don't need real-time content, a robust online store or user-generated content...then yes, Jekyll could be a great option for you.

### 2. You want your website to run FAST

Static site generators, like Jekyll, typically load 10x faster than a CMS website. My most image-heavy pages load in under 1.2 seconds. That is unbeatable speed compared to Wordpress or Squarespace site loads.

### 3. You want a secure website

Most hackers use database exploits to hack your website. Without a database, the possibility for hacking is greatly reduced.

### 4. You want version control for your entire website (content and code)

With Jekyll, you can manage your entire site from a [git repository](https://github.com/). (You can also host it for free with [Github Pages](https://pages.github.com/)!) This is a developer standard for most projects, but usually the actual content (posts, pages, images) sits in a database that's completely separate from your repository.


## Ok I want a Jekyll website for my business, now what?

Awesome!!

If you'd like to get started on your own, visit Jekyll's [website](https://jekyllrb.com/) and get started with their documentation. I'd also recommend [Mike Dane's youtube series](https://www.youtube.com/watch?v=T1itpPvFWHI&list=PLLAZ4kZ9dFpOPV5C5Ay0pHaa0RJFhcmcB).

If you'd like help with website design, Jekyll installation or Jekyll training -- please get in [touch](/contact)! I'd love to help.
