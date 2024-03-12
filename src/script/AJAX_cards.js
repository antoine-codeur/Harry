document.addEventListener('DOMContentLoaded', function() {
    var isCardsShown = false;

    document.querySelector('#showCards').addEventListener('click', function() {
        const cardsContainer = document.querySelector('#cardsContainer');
        
        if (isCardsShown) {
            cardsContainer.innerHTML = '';
            this.textContent = 'Afficher les cartes';
            isCardsShown = false;
        } else {
            fetch('src/core/action.php')
                .then(response => response.text())
                .then(html => {
                    cardsContainer.innerHTML = html;
                    this.textContent = 'Masquer les cartes';
                    isCardsShown = true;
                })
                .catch(error => console.error('Error loading cards:', error));
        }
    });
});
