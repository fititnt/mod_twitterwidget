Joomla 1.6+ Module Twitter Widget
Simple module that add oficial Twitter Widget via external file, instead of inline javascript
Author: Emerson Rocha Luiz - @fititnt - emerson@webdesign.eng.br

------- Basic usage -------

The idea is to allow a module from loading quickly over a slightly larger work of the developer. 
Instead of allowing settings and generate inline javascript, just add a javascript file exactly 
where you want, but you must edit the javascript directly into the desired settings.

Each instance of the module allows different javascript files, and allows both add paths based on the 
root of your Joomla as well as absolute URLs.

To know exactly the parameters you can use the file, visit https://twitter.com/about/resources/widgets, 
and go on the 'My Website' and use the result as a basis to change the generated javascript file. Use as 
the base '/modules/mod_twitterwidget/js/twitterwidget.js'"

------- Important -------

-------   @todo   -------

- Try one workaround to load javascript at the botton of html file and make make it change from there
one especific element, instead of directly add javascript with <script> tag inside the module.

------- Changelog -------
2011-08-02: 1.0RC1
- Added pt-BR translation

2011-07-31 0.2beta
- Now works. Ready for public test

2011-07-30: 0.1alpha
- Start. Based on mod_werandonmessage from @fititnt
