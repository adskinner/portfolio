---
layout: "post"
title: "An Introduction to SVG & CSS Animations: How to Animate a Social Media Icon"
author: "Allison Skinner"
categories:
  - code
tags: [CSS animation, SVG animation, icons]
image: "writing/17-06-29/icon_Cover.gif"
permalink: /writing/:title
description: Learn how to animate a social media icon with CSS & SVG animations
---
>One of my favorite things to incorporate into any web project is animation. Particularly CSS & SVG animations because they are lightweight, retina-level crisp & do not require adding complicated javascript libraries to your website. CSS & SVG animations combine the creative elements of design and the technical elements of development. As a designer and developer I love that. Dabbling with CSS & SVG animations as a developer (or designer) is a great introduction to going beyond basic HTML and CSS. Today I’m going to show you how to animate an instagram icon. You can use these same principles to animate any social media icon. This icon animation is featured on [trevblake.com](trevblake.com) , a portfolio site I made for my good friend & hard-working creative, Trevor Blake.

View my [codepen](https://codepen.io/adskinner/pen/eRyygL) on this project.

## 1. Download the Instagram icon
Visit Instagram's brand resources and download the .eps file. Or, you can visit the noun project for a more unique version of the instagram icon. Make sure to credit the maker of the icon!

## 2. Edit the icon in Adobe Illustrator
1. Open the instagram icon you downloaded in Adobe Illustrator. You could also open it in Sketch, if that's what you prefer, but this tutorial will use Adobe Illustrator.
2. Here are some edits I made to the icon
  - Added a circle around the icon (optional)
  - Made all the layers of the icon be border strokes instead of filled objects. This is essential for the animation we will be adding later.
3. Rename the layers

When we save this icon as an SVG, the layers will become CSS IDs so we want the layer names to be easy to differentiate.
4. d. Save the icon as an SVG. Select ‘File > Save As..’ and then save as an SVG (not a compressed SVG). In the ‘SVG Options’ box that appears before you save, we can keep things pretty simple. This is a basic icon with a few layers. We don’t have any embedded images, for example.

## 2. Open SVG icon in text editor
In this tutorial I'm using brackets. Here you can see the code of the icon. Now we’ve got something we can apply some CSS animations to!
SVG code always looks intimidating, but noticed that all the IDs are the layers we named when we were in Adobe Illustrator.
