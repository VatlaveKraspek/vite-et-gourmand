document.addEventListener('DOMContentLoaded', () => {
        // Récupération du formulaire de filtres
        const filtersForm = document.querySelector('#menu-filters');

        // Arrête le script si le formulaire n'existe pas sur la page
        if (!filtersForm) {
            return;}

        // Récupération des différents champs
        const themeFilter = document.querySelector('#theme-filter');
        const dietFilter = document.querySelector('#diet-filter');
        const minPriceFilter = document.querySelector('#min-price-filter');
        const maxPriceFilter = document.querySelector('#max-price-filter');
        const minimumPeopleFilter = document.querySelector('#minimum-people-filter');
        const resetFiltersButton = document.querySelector('#reset-filters');

        // Récupération de toutes les cartes
        const menuItems = document.querySelectorAll('.menu-item');
        const noMenuMessage = document.querySelector('#no-menu-message');

    // Filtre les cartes selon les critères sélectionnés
    function filterMenus() {
        const selectedTheme = themeFilter.value;
        const selectedDiet = dietFilter.value;

        const minimumPrice =
            minPriceFilter.value === '' ? null : Number(minPriceFilter.value);

        const maximumPrice =
            maxPriceFilter.value === '' ? null : Number(maxPriceFilter.value);

        const selectedPeople =
        minimumPeopleFilter.value === ''
            ? null
            : Number(minimumPeopleFilter.value);    

        let visibleMenusCount = 0;    

        menuItems.forEach((menuItem) => {
            const menuTheme = menuItem.dataset.theme;
            const menuDiet = menuItem.dataset.diet;
            const menuPrice = Number(menuItem.dataset.price);
            const menuMinimumPeople = Number(menuItem.dataset.minimumPeople);

            const matchesTheme =
                selectedTheme === '' || menuTheme === selectedTheme;

            const matchesDiet =
                selectedDiet === '' || menuDiet === selectedDiet;

            const matchesMinimumPrice =
                minimumPrice === null || menuPrice >= minimumPrice;

            const matchesMaximumPrice =
                maximumPrice === null || menuPrice <= maximumPrice;

            const matchesMinimumPeople =
            selectedPeople === null || menuMinimumPeople <= selectedPeople;    

            const matchesAllFilters =
                matchesTheme &&
                matchesDiet &&
                matchesMinimumPrice &&
                matchesMaximumPrice &&
                matchesMinimumPeople;

            
            if (matchesAllFilters) {
                visibleMenusCount++;}
            menuItem.classList.toggle('d-none', !matchesAllFilters);
        });
        noMenuMessage.classList.toggle('d-none', visibleMenusCount > 0);
    }

        // Relance le filtrage lorsque le thème change ou le régime change
        themeFilter.addEventListener('change', filterMenus);
        dietFilter.addEventListener('change', filterMenus);
        minPriceFilter.addEventListener('input', filterMenus);
        maxPriceFilter.addEventListener('input', filterMenus);
        minimumPeopleFilter.addEventListener('input', filterMenus);
        resetFiltersButton.addEventListener('click', () => {
        filtersForm.reset();
        filterMenus();});
});