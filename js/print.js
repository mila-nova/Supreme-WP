//initial test
// document.body.onload = alert('hello print!');

document.body.onload = addPrintButton;

function addPrintButton() {
    // create a new button element 
    let printButton = document.createElement('button');
    // set tooltip
    printButton.setAttribute('title', 'Print this article');
    // set class for styling
    printButton.className += 'print-post';
    // set icon 
    printButton.innerHTML = '<i class="fas fa-print"></i>';
    // print on click
    printButton.onclick = function() {
        window.print();
    };
    // assign spot for the button
   document.querySelector('.post-title').appendChild(printButton);
};

