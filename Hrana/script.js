document.addEventListener("DOMContentLoaded", () => {
    const cityModal = document.createElement("div");
    cityModal.id = "cityModal";
    cityModal.innerHTML = `
        <div class="modal-content">
            <h2>Odaberite svoj grad</h2>
            <select id="citySelect">
                <option value="Rijeka">Rijeka</option>
                <option value="Zagreb">Zagreb</option>
                <option value="Pula">Pula</option>
                <option value="Split">Split</option>                
            </select>
            <button id="confirmCity">Potvrdi</button>
        </div>
    `;
    document.body.appendChild(cityModal);

    const modal = document.getElementById("cityModal");
    const citySelect = document.getElementById("citySelect");
    const confirmCityBtn = document.getElementById("confirmCity");

    let selectedCity = null;

    // Show the modal on page load
    modal.style.display = "none";

    confirmCityBtn.addEventListener("click", () => {
        selectedCity = citySelect.value;
        modal.style.display = "none";
    });

    // Add event listeners to "Gdje kušati" buttons
    const filterButtons = document.querySelectorAll(".filter-button");
    filterButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            if (!selectedCity) {
                event.preventDefault(); // Prevent navigation if no city is selected
                modal.style.display = "flex";
                return;
            }

            // Append the selected city as a query parameter to the button's href
            const href = button.getAttribute("href");
            button.setAttribute("href", `${href}?city=${selectedCity}`);
        });
    });
});