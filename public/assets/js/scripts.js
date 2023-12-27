document.addEventListener('DOMContentLoaded', function() {
    // Listen for checkbox changes
    var item1Checkbox = document.getElementById('item_1');
    item1Checkbox.addEventListener('change', function() {
        updateTestBlockVisibility(item1Checkbox);
    });

    // Function to update the visibility of the test-block
    function updateTestBlockVisibility(checkbox) {
        var testBlock = document.querySelector('.test-block');

        // Show or hide the test-block based on whether item 1 is checked
        testBlock.style.display = checkbox.checked ? 'block' : 'none';
    }
});