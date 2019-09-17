
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }

 class="wp-custom-logo customize-partial-edit-shortcuts-shown custom-background"
  class="wp-custom-logo customize-partial-edit-shortcuts-shown custom-background"








  <input type="button" onclick="printPost('print-content')"/>


<script type="text/javascript">
    function printPost() {
        var printContents = document.querySelector('.print-content').innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }






<?php 

function posts_print_button(){
    if ( is_page_template('single.php') ) {
        wp_enqueue_script('my-script', get_template_directory_uri() . 'path/to/script.js', array(), 'null', true );
    } 
}
add_action('wp_enqueue_scripts','posts_print_button');





function posts_print_button(){
    if ( is_single() ) {
        wp_enqueue_script('my-script', get_template_directory_uri() . 'path/to/script.js', array(), 'null', true );
    } 
}
add_action('wp_enqueue_scripts','posts_print_button');







  var currentDiv = document.querySelector('main'); 
  document.body.insertBefore(printDiv, currentDiv); 






function myFunction() {
  var node = document.createElement("LI");
  var textnode = document.createTextNode("Water");
  node.appendChild(textnode);
  document.getElementById("myList").appendChild(node);
};








var foo = function(){
  var button = document.createElement('button');
  button.innerHTML = 'click me';
  button.onclick = function(){
    alert('here be dragons');return false;
  };
  // where do we want to have the button to appear?
  // you can append it to another element just by doing something like
  // document.getElementById('foobutton').appendChild(button);
  document.body.appendChild(button);
};


// and give it content
  var printButton = document.        ; 
  // add the text node to the newly created div
  printDiv.appendChild(printButton);  

  // add the newly created element and its content into the DOM 
  var currentDiv = document.querySelector('main'); 
  document.body.insertBefore(printDiv, currentDiv); 

