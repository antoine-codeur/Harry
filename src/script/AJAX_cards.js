document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('houseFilter').addEventListener('change', function() {
        loadCards(this.value);
    });

    document.getElementById('showCards').addEventListener('click', function() {
    
        document.getElementById('houseFilter').value = 'all';
        loadCards('all');
    });
    
    function loadCards(filter) {
        const url = `src/core/action.php?house=${filter}`;

        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.getElementById('cardsContainer').innerHTML = html;
            })
            .catch(error => console.error('Error loading cards:', error));
    }
});
