// JavaScript for the component
document.addEventListener("DOMContentLoaded", function () {
    // Listen for checkbox changes
    let checkboxes = document.querySelectorAll(".checkbox-item");

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener("change", function () {
            updateBlockVisibility(checkbox);
        });
    });

    // Function to update the visibility of a block based on the checkbox state
    function updateBlockVisibility(checkbox) {
        let componentId = checkbox.closest(".main-response-reason").dataset
            .componentId;
        let item = document.querySelector(
            `[data-component-id="${componentId}"]`
        );

        // Show or hide the block based on whether the checkbox is checked
        item.style.display = checkbox.checked ? "flex" : "none";
    }
});
