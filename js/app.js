console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

jQuery(document).ready(function($){ //wait for the document to load
    $('.dynamic-height').each(function(){ //loop through each element with the .dynamic-height class
        $(this).css({
            '--height' : $(this).outerHeight() + 'px' //adjust the css rule for margin-top to equal the element height - 10px and add the measurement unit "px" for valid CSS
        });
    });
});