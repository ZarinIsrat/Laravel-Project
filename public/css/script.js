"use strict"

$( function() {
    var availableTags = [
      "A+",
      "B+",
      "O+",
      "A-",
      "B-",
      "O-",
      "AB+",
      "AB-",
      
    ];
    $( "#bloodgroup" ).autocomplete({
      source: availableTags
    });
  } );

  $( function() {
    var availableTags = [
      "Student",
      "Teacher",
      
      
    ];
    $( "#type" ).autocomplete({
      source: availableTags
    });
  } );
  
$( function() {
    var availableTags = [
      "Male",
      "Female",
	  "Other",
      
      
    ];
    $( "#Gender" ).autocomplete({
      source: availableTags
    });
  });

  
 $(document).ready(function(){
$('input.typeahead').typeahead({
name: 'countries',
remote: 'http://localhost:300/home/search/seachbox?key=%QUERY',
limit: 10

});

}); 



