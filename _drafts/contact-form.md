---
layout: "post"
title: "How I built my custom 'Thank You' page"
author: "Allison Skinner"
categories:
  - code
tags: [particles.js , contact form]
permalink: /writing/:title
description: A great way to track your leads and give
---


## Why Redirection to a Thank You page?
I wanted anyone that fills out my contact form get redirected to a "thank you" page for a few reasons...
1. They know the form submission successfully sent
When you fill out a form online and click submit, it's nice to have confirmation that it has been received. Otherwise you are left wondering if it got sent at all!
2. Provide a note from myself about next steps
On my thank you page I let my leads know that I'll respond to them in 1-3 business days. This sets the expectation that I will be getting back to them, but it likely won't happen within the next few minutes or over the weekend.
3. It's always nice to say thank you!
My mom always made me write thank you notes growing up. As a teenager, it felt like a chore. Now I think it's an opportunity! I wish I could send written thank you notes to everyone that contacted me, but I can at least dedicate a moment to thanking them on my website. That's because I am very thankful! The majority of my client relationships start with a contact form submission.

## How did I set up the Redirection
Since I built my site on Jekyll, a static site generator, I had to use a third party to handle my contact form submissions. I chose Form Bucket because it was customizeable at a developer level, dependable and had spam protection.
In the form settings, there is an option for a 'custom redirect', I provided the thank you page URL in this field.

## How did I design my Thank You Page
Now this is the fun part! I knew that I wanted the thank you page to have one niche goal -- saying thank you! I didn't want to distract the page with my menu or other page elements.
For this reason I placed all the "content" in a box in the center of the page.
I also wanted to have some type of animation that felt like a celebration for sending a message through my contact form.

The animated stars is achieved through particles.js, a javascript library for animating "particles" (or other objects like stars!).
I used particles.js on the Athentic Brewing Company's homepage as well. The effect is like bubbles coming up in a glass.

Particles.js is very easy to use.

1. First, I use the handy simulator on the particles.js website to decide the type of animation I want.
You can decide shape, direction, speed, density, color, etc. Play around and decide what you'd like.
The simulator only allows for one color. I created an array to achieve multiple colors.
2. Then click the "codepen" button in the top right corner. This will create a code pen with your custom parameters.
4. Take a look at the HTML. You need to add a js file to your site's html with 
`// this tiggers the animation
<div id="particles-js"></div>
//this is the universal cdn of the particles.min.js code you don't need to change. just add it to your page
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
//then you need to add your custom parameters for your animation. mine is linked below. I added my custom json data to this js file.
<script src="https://allisondskinner.com/assets/js/app.js"></script>
`


<iframe height="605" style="width: 100%;" scrolling="no" title="particles.js demo" src="//codepen.io/adskinner/embed/drjvZY/?height=605&theme-id=light&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true">
  See the Pen <a href='https://codepen.io/adskinner/pen/drjvZY/'>particles.js demo</a> by Allison Skinner
  (<a href='https://codepen.io/adskinner'>@adskinner</a>) on <a href='https://codepen.io'>CodePen</a>.
</iframe>
