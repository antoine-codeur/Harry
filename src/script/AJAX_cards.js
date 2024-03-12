document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('#houseFilter').addEventListener('change', function() {
        loadCards(this.value);
    });

    document.querySelector('#showCards').addEventListener('click', function() {
    
        document.querySelector('#houseFilter').value = 'all';
        loadCards('all');
    });
    
    function loadCards(filter) {
        const url = `src/core/action.php?house=${filter}`;

        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.querySelector('#cardsContainer').innerHTML = html;
            })
            .catch(error => console.error('Error loading cards:', error));
    }
});
