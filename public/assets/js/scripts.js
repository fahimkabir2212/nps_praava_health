document.addEventListener('DOMContentLoaded', function() {
    // Listen for checkbox changes
    for (let i = 1; i <= 7; i++) {
        let checkbox = document.getElementById('item_' + i);
        checkbox.addEventListener('change', function() {
            updateBlockVisibility(checkbox, 'item-' + i);
        });
    }

    // Function to update the visibility of a block based on the checkbox state
    function updateBlockVisibility(checkbox, blockId) {
        let item = document.getElementById(blockId);
        // Show or hide the block based on whether the checkbox is checked
        item.style.display = checkbox.checked ? 'block' : 'none';
    }
});
