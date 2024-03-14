document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#houseFilter').addEventListener('change', function() {
        const houseFilter = this.value;
        const genderFilter = document.querySelector('#genderFilter').value;
        loadCards(houseFilter, genderFilter);
    });
    document.querySelector('#genderFilter').addEventListener('change', function() {
        const genderFilter = this.value;
        const houseFilter = document.querySelector('#houseFilter').value;
        loadCards(houseFilter, genderFilter);
    });
    document.querySelector('#showCards').addEventListener('click', function() {
        document.querySelector('#houseFilter').value = 'all';
        document.querySelector('#genderFilter').value = 'all';
        loadCards('all', 'all');
    });
    function loadCards(houseFilter, genderFilter) {
        const url = `src/core/action.php?house=${houseFilter}&gender=${genderFilter}`;
        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.querySelector('#cardsContainer').innerHTML = html;
            })
            .catch(error => console.error('Error loading cards:', error));
    }
});
