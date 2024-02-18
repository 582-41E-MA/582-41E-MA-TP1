/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project
 // Listen for the show event on the modal
 modal.addEventListener('show.bs.modal', function (event) {
    fetch('/basket')
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        // Populate the modal body with basket data
        var modalBody = modal.querySelector('.modal-body');
        modalBody.innerHTML = ''; // Clear previous contents
        
        // Loop through data and append items to modal body
        data.forEach(function(item) {
          var itemElement = document.createElement('p');
          itemElement.textContent = `${item.name} - ${item.quantity} - ${item.price}`;
          modalBody.appendChild(itemElement);
        });
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
  });
