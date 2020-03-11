# Plain News

[![StyleCI](https://github.styleci.io/repos/217001586/shield?branch=master)](https://github.styleci.io/repos/217001586)

<img src="https://media.giphy.com/media/3o7qDXzmWyT3BgcyGc/giphy.gif" width="100%">

## Description

This is my first programming assignment at YRGO. The assignment is to create a simple news feed with fake articles in PHP.

## Installation

Clone or fork this repository and start a PHP server in your terminal by entering:

```
$ php -S localhost:8000
```

## Requirements:

The project should use the following PHP functionality:

- Variables
- Multiple data types
- Arrays
- Functions
- Loops (for, while or foreach)
- Output (echo, print etc.)

## Built with

- PHP
- HTML
- CSS

## Preview

Desktop version:

<img src="public/images/preview.png" width="100%">

Mobile version:

<img src="public/images/mobilepreview.png" width="30%">

## Tested by

- Alexander Gustafsson Flink
- Mikaela Lundsgård

## Code review by Henric

- In your sortByLatestDate function, I would personally put the explanatory comment outside of the function, since it’s not actually part of the actual function itself. :heavy_check_mark:
- On line 43 of your style.css you’ve commented “/top right bottom left/” next to your margin property. It could be left out of the master version of your project, since the people inspecting your code will probably be developers who will most likely know that that is how it works. :heavy_check_mark:
- On line 15 of your css file you have commented out a chunk of code with “maybe”. It could also be left out of your master version of the project on GitHub. :heavy_check_mark:
- With the nav-bar it would be cool to see it working when you click the different buttons.
- In your title tag you probably dont have to echo the variable from your data file, I think it’s something thats ok to “hard code”.

Please feel free to give feedback, both on improvements and well written code. :nerd_face:

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Authors

Camilla Kylmänen Sjörén
