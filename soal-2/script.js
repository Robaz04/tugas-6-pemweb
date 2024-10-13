document.addEventListener('DOMContentLoaded', () => {
    const productList = document.getElementById('product-list');
    const products = [
        { name: 'Midnight', image: 'assets/w1.jpg' },
        { name: 'Nature', image: 'assets/w2.jpg' },
        { name: 'Dr. Strange', image: 'assets/w3.jpg' },
        { name: 'Batman', image: 'assets/w4.jpg' },
        { name: 'Cars', image: 'assets/w5.jpg' },
        { name: 'Optimus Prime', image: 'assets/w6.jpg' },
        { name: 'Midnight II', image: 'assets/w7.jpg' },
        { name: 'Paris', image: 'assets/w8.jpg' },
        { name: 'Purple Field', image: 'assets/w9.jpg' },
        { name: 'Astronaut', image: 'assets/w10.jpg' }
    ];

    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product-card');

        const img = document.createElement('img');
        img.src = product.image;
        img.alt = product.name;

        const h3 = document.createElement('h3');
        h3.textContent = product.name;

        productCard.appendChild(img);
        productCard.appendChild(h3);

        productList.appendChild(productCard);
    });

    const scrollLeft = document.getElementById('scroll-left');
    const scrollRight = document.getElementById('scroll-right');

    scrollLeft.addEventListener('click', () => {
        productList.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    scrollRight.addEventListener('click', () => {
        productList.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });
});
