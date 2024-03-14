document.addEventListener('DOMContentLoaded', function() {
    let houseFilter = 'all';
    let genderFilter = 'all';
    let sortOrder = 'nameAsc';
    function loadCards() {
        const url = `src/core/action.php?house=${houseFilter}&gender=${genderFilter}&sort=${sortOrder}`;
        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.querySelector('#cardsContainer').innerHTML = html;
            })
            .catch(error => console.error('Error loading cards:', error));
    }
    document.querySelector('#houseFilter').addEventListener('change', function() {
        houseFilter = this.value;
        loadCards();
    });
    document.querySelector('#genderFilter').addEventListener('change', function() {
        genderFilter = this.value;
        loadCards();
    });
    document.querySelector('#sortOrder').addEventListener('change', function() {
        sortOrder = this.value;
        loadCards();
    });
    document.querySelector('#showCards').addEventListener('click', function() {
        document.querySelector('#houseFilter').value = 'all';
        houseFilter = 'all';
        document.querySelector('#genderFilter').value = 'all';
        genderFilter = 'all';
        document.querySelector('#sortOrder').value = 'nameAsc';
        sortOrder = 'nameAsc';
        loadCards();
    });
});
