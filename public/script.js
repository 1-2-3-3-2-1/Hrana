document.addEventListener("DOMContentLoaded", () => {
    // Modal elementi
    const cityModal = document.getElementById("cityModal");
    const citySelectModal = document.getElementById("citySelectModal");
    const confirmCityButton = document.getElementById("confirmCity");
    const restaurantItems = document.querySelectorAll(".restaurants li");

    // Prikaži modal odmah po učitavanju stranice
    cityModal.style.display = "block";
    document.body.classList.add("modal-active"); // Dodaj klasu za zamagljivanje pozadine

    // Potvrda odabira grada
    confirmCityButton.addEventListener("click", () => {
        const selectedCity = citySelectModal.value;
        if (selectedCity) {
            cityModal.style.display = "none"; // Sakrij modal
            document.body.classList.remove("modal-active"); // Ukloni klasu za zamagljivanje
            filterRestaurants(selectedCity); // Filtriraj restorane
        } else {
            alert("Molimo odaberite grad prije nastavka.");
        }
    });

    // Funkcija za filtriranje restorana
    function filterRestaurants(city) {
        restaurantItems.forEach(item => {
            const match = item.textContent.includes(city);
            item.style.display = match ? "list-item" : "none";
        });
    }
});