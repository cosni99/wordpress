/*!
 * Template Name: FCHOST
 * Description: Script Main for Template FCHOST
 * Author: crowbarcode
 * Version	 :	1.0.0
**/

//Wizard Init

$("#wizard").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="number">#index#</span>'
});

//Form control

$('#address-extension').on('change', function(e) {
    $('#address-extension').text(e.target.value);
});