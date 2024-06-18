document.addEventListener('alpine:init', () => {
    Alpine.data('tour', () => ({
        items: [
            {id : 1, name: 'Tour De Jogja', img:'borobudur.jpeg', price:500000},
            {id : 2, name: 'Tour De Jogja', img:'borobudur.jpeg', price:500000},
            {id : 3, name: 'Tour De Jogja', img:'borobudur.jpeg', price:500000},
            {id : 4, name: 'Tour De Jogja', img:'borobudur.jpeg', price:500000},
            {id : 5, name: 'Tour De Jogja', img:'borobudur.jpeg', price:500000},

        ],

    }));
});