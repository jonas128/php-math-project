<img src="https://media.giphy.com/media/LweK4Ma6Chp8k/giphy.gif" />

# PHP MATH QUIZ

A fun and informative math quiz: please enjoy at http://jonas128.se/quiz

# Installation

To install this project follow this list

-   Clone the project

```
git clone https://github.com/jonas128/php-math-project
```

-   Start php server `php -S localhost:8000`

-   Open up you browser and paste in this link:
    `http://localhost:8000/index.php`

# Code Review

Code review written by [Hanna Rosenberg](https://github.com/hanna-rosenberg).

1. I like your site, it’s really smart and funny. Impressive! One thing I thought about is that it would be easier to read if there were more space separating the questions. Right now it’s a bit difficult to see what images are connected to which question. If you work more with the CSS this could be solved pretty easily. A suggestion is to put the connected images, questions and alternatives together in divs and add margin between them.
2. Questions.php / row 18, 41, 61, 82, 102, 122: I would suggest that you add alt-text on your images, for the accessibility!
3. Functions.php / row 14 & 15 Results.php / row 84 & 85 Your code is in English, but some words are written in Swedish.
4. Questions.php / row 6 & 14 Credit.php / row 17 Your site is in Swedish, but your title, and H1 is in English. So is your function with the credit-cardnumber. I would suggest that you choose one language and use it throughout, in the code and on the site.
5. The “Do not enter creditcard”- function is fun. But I’m not sure I understand it. Is it just for fun or does it do anything? If it does anything it wouldn’t hurt with an explanation, on the site or in a comment in the code, to make sure it doesn’t cause any confusion.
6. On my computer, the site are “bleeding” in mobile-view.
7. I like the first image with the cartoon-guy that looks like you! It fits the theme and makes the site personal. About the rest of the pictures, I would suggest that you enlarges them. The reason for that is that the images with the handwritten text/calculations are hard to reed without zooming!
8. Data.php / row 12 – 26 It would be easier to read the code if you wrote the arrays in the same way, with linebreaks at the same place.
9. Results.php I think the whole Result-site looks good! Clean and I like your choice of fonts. But you have used HTML code inside PHP-tags in this file!

# Testers

Tested by the following people:

1. Jennifer Andersson
2. Anton Marinov
