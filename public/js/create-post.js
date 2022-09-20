var $englishForm = $('#english-form');
var $spanishForm = $('#spanish-form');
var $englishLink = $('#english-link');
var $spanishLink = $('#spanish-link');

$englishLink.click(function() {
  $englishLink.toggleClass('bg-aqua-active');
  $englishForm.toggleClass('d-none');
  $spanishLink.toggleClass('bg-aqua-active');
  $spanishForm.toggleClass('d-none');
});

$spanishLink.click(function() {
  $englishLink.toggleClass('bg-aqua-active');
  $englishForm.toggleClass('d-none');
  $spanishLink.toggleClass('bg-aqua-active');
  $spanishForm.toggleClass('d-none');
});