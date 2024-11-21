document.addEventListener('DOMContentLoaded', function () {
    fetch('./php/admin/get_solutions.php')
        .then(response => response.json())
        .then(data => {
            const solutionsContainer = document.getElementById('solutions-container');
            data.solutions.forEach(solution => {
                const solutionCard = document.createElement('div');
                solutionCard.classList.add('solution-card');

                const imageUrl = solution.imagen_local.startsWith('http') 
                    ? solution.imagen_local 
                    : `./uploads/${solution.imagen_local}`;

                console.log(`Cargando imagen desde: ${imageUrl}`); 

                solutionCard.innerHTML = `
                    <img src="${imageUrl}" alt="${solution.nombre_local}" class="solution-image" 
                         onerror="this.onerror=null; this.src='./images/default-placeholder.png';">
                    <h4>${solution.nombre_local}</h4>
                    <p>${solution.descripcion}</p>
                    <p><strong>Dirección:</strong> ${solution.direccion_local}</p>
                `;

                solutionsContainer.appendChild(solutionCard);
            });
        })
        .catch(error => console.log('Error fetching solutions:', error));
});
