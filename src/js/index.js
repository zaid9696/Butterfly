
import './owlSettings';
import '../sass/main.scss';


// Search Javascript autocomplation;

const searchButton = document.querySelector('header.site-header .widget_product_search form button[type=submit]');
const productCategoryMen = document.querySelectorAll('span.short_description.Men');
const productCategoryWomen = document.querySelectorAll('span.short_description.Women');

// adding Men Class
productCategoryMen.forEach( function(element, index) {
	element.parentElement.classList.add('men');
});
// adding Women Class
productCategoryWomen.forEach( function(element, index) {
	console.log(element);
	element.parentElement.classList.add('women');
});




// console.log($);

searchButton.innerHTML = `<img src="${butterflyUri.theme_uri}/img/search.png" alt="search icon">`;
searchButton.style.visibility = 'visible';

