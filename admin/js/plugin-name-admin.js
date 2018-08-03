(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 jQuery( document ).ready( function( $ ) {
	 	var rangeSlider = document.getElementsByClassName("fluid-slider")[0];
	 	var LineHeightSlider = document.getElementsByClassName("line-height-slider")[0];
	 	var LetterSpacingSlider = document.getElementsByClassName("letter-spacing-slider")[0];

	 	var rangeLabel = document.getElementById("range-label");
	 	var LineHeight = document.getElementById("line-height-id");
	 	var LetterSpacing = document.getElementById("letter-spacing-id");


	 	rangeSlider.addEventListener("input", showSliderValue, true);
	 	LineHeightSlider.addEventListener("input", showSliderValue, true);
	 	LetterSpacingSlider.addEventListener("input", showSliderValue, true);

	 	function showSliderValue() {
	 	  rangeLabel.innerHTML = rangeSlider.value + "px";
	 	  LineHeight.innerHTML = LineHeightSlider.value + "px";
	 	  LetterSpacing.innerHTML = LetterSpacingSlider.value + "px";

	 	  rangeSlider.setAttribute("value", rangeSlider.value)
	 	}
	 });


})( jQuery );
