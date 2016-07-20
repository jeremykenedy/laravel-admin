// FUNCTION TO ADD RANDOM BG COLOR CLASS TO SELECTORS WITH THE CLASS 'bg-random'
// HOW RANDOM IS RANDOM? https://www.random.org/randomness/
// By: Jeremy Kenedy | 2016
// License: MIT

$(document).ready(function() {

	var colorClasses = [
		'bg-red',
		'bg-yellow',
		'bg-aqua',
		'bg-blue',
		'bg-light-blue',
		'bg-green',
		'bg-navy',
		'bg-teal',
		'bg-olive',
		'bg-lime',
		'bg-orange',
		'bg-fuchsia',
		'bg-purple',
		'bg-maroon',
		'bg-black'
	];

	var randomColorClass = colorClasses[Math.floor(Math.random() * colorClasses.length)];

	$('.bg-random').addClass(randomColorClass);
});

