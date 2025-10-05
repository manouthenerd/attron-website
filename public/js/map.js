if(location.pathname === '/') {
    var map = L.map('map').setView([5.302425011861723, -4.007889402790526], 50);

    // Ajouter une couche de tuiles OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Ajouter un marqueur à la position donnée
    var marker = L.marker([5.302425011861723, -4.007889402790526]).addTo(map);
}


// 5.302133, -4.008052 old 
// 5.302425011861723, -4.007889402790526 new