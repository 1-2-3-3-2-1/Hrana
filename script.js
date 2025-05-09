document.addEventListener("DOMContentLoaded", () => {
    // Ako smo na stranici s gumbima "Gdje kušati"
    const filterButtons = document.querySelectorAll(".filter-button");
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                const href = button.getAttribute("href");

                // Modal za grad
                const modal = document.createElement("div");
                modal.id = "citySelectModal";
                modal.style.position = "fixed";
                modal.style.top = 0;
                modal.style.left = 0;
                modal.style.width = "100vw";
                modal.style.height = "100vh";
                modal.style.background = "rgba(0,0,0,0.6)";
                modal.style.display = "flex";
                modal.style.alignItems = "center";
                modal.style.justifyContent = "center";
                modal.style.zIndex = "1000";

                const modalContent = document.createElement("div");
                modalContent.style.background = "white";
                modalContent.style.padding = "2rem";
                modalContent.style.borderRadius = "10px";
                modalContent.style.textAlign = "center";

                const label = document.createElement("label");
                label.textContent = "Odaberi grad:";
                label.style.display = "block";
                label.style.marginBottom = "1rem";

                const select = document.createElement("select");
                select.innerHTML = `
                    <option value="">-- Odaberi grad --</option>
                    <option value="Zagreb">Zagreb</option>
                    <option value="Sarajevo">Sarajevo</option>
                    <option value="Split">Split</option>
                    <option value="Osijek">Osijek</option>
                    <option value="Mostar">Mostar</option>
                `;
                select.style.marginBottom = "1rem";

                const confirmBtn = document.createElement("button");
                confirmBtn.textContent = "Filtriraj";
                confirmBtn.style.marginTop = "1rem";

                confirmBtn.addEventListener("click", () => {
                    const city = select.value;
                    if (city) {
                        window.location.href = `${href}?city=${encodeURIComponent(city)}`;
                    }
                });

                modalContent.appendChild(label);
                modalContent.appendChild(select);
                modalContent.appendChild(confirmBtn);
                modal.appendChild(modalContent);
                document.body.appendChild(modal);

                // Klik izvan modala
                modal.addEventListener("click", (e) => {
                    if (e.target === modal) {
                        modal.remove();
                    }
                });

                // ESC za zatvaranje
                document.addEventListener("keydown", function escListener(e) {
                    if (e.key === "Escape") {
                        modal.remove();
                        document.removeEventListener("keydown", escListener);
                    }
                });
            });
        });
    }

    // Ako smo na nekoj od *-restorani.html stranica s filtriranjem prema ?city=
    const citySelect = document.getElementById("citySelect");
    const restaurantItems = document.querySelectorAll(".restaurants li");
    const urlParams = new URLSearchParams(window.location.search);
    const selectedCity = urlParams.get("city");

    if (citySelect && restaurantItems.length > 0) {
        // Ako city postoji u URL-u, unaprijed filtriraj
        if (selectedCity) {
            citySelect.value = selectedCity;
            filterRestaurants(selectedCity);
        }

        // Reagiranje na promjenu selekta
        citySelect.addEventListener("change", () => {
            filterRestaurants(citySelect.value);
        });
    }

    function filterRestaurants(city) {
        restaurantItems.forEach(item => {
            const match = city === "" || item.textContent.includes(city);
            item.style.display = match ? "list-item" : "none";
        });
    }
});
