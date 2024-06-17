document.addEventListener('DOMContentLoaded', function () {
    var deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Extract itemId from the button's data attribute
            var itemId = button.getAttribute('data-itemid');
            console.log('Clicked on item with itemId:', itemId);

            var result = confirm('Are you sure you want to delete this item?');

            if (result) {
                // If the user clicks 'OK', redirect to process_delete.php with the item ID
                window.location.href = 'process_delete.php?itemId=' + itemId;
            } else {
                // Do nothing if the user clicks 'Cancel'
            }
        });
    });
});
