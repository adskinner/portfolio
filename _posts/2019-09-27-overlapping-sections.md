---
layout: "post"
title: "How To: overlapping sections on scroll"
author: "Allison Skinner"
categories:
  - code
tags:
permalink: /writing/:title
description: Learn how to achieve overlapping sections with sticky positioning using basic CSS. I used this element on the homepage of my portfolio website!
comments: true
---

Hello 👋!

![gif of me scrolling through the mobile version of my website. Each section overlaps the other on scroll](../assets/img/writing/overlap-scroll/overlap-scroll.gif)


Today I wanted to share how you can create on-scroll overlapping sections with some basic CSS.
When building my portfolio website, I wanted the homepage to have a special on-scroll feature that felt unique but not overwhelming.
I found what I was looking for on [SuperHi's tutorial: "Parallax overlapping sections using sticky positioning"](https://www.superhi.com/video/parallax-overlapping-sections-using-sticky-positioning). It was easy, elegant -- just what I was looking for.

You can also view the code I used to do this on codepen 👇
<iframe height="500" style="width: 100%;" scrolling="no" title="Overlapping sections with position sticky" src="https://codepen.io/adskinner/embed/NWKeLZW?height=265&theme-id=light&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true">
  See the Pen <a href='https://codepen.io/adskinner/pen/NWKeLZW'>Overlapping sections with position sticky</a> by Allison Skinner
  (<a href='https://codepen.io/adskinner'>@adskinner</a>) on <a href='https://codepen.io'>CodePen</a>.
</iframe><br>

1. **Organize your content into sections.** In my codepen example, I organized my content sections using the <section></section>html tag.  
2. **Add the following CSS to each section.**

   **section** {<br>
     position: sticky;<br>
     position: -webkit-sticky;<br>
     top: 0;<br>
   }
