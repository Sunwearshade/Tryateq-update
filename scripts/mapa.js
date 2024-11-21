function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 22.74566, lng: -102.511449 },
      zoom: 12,
    });
  
    const service = new google.maps.places.PlacesService(map);
    const location = { lat: 22.74566, lng: -102.511449 };
  
    const request = {
      location: location,
      radius: '20000',
      type: ['supermarket'], 
    };
  
    service.nearbySearch(request, (results, status) => {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (let i = 0; i < results.length; i++) {
          createMarker(results[i], map);
        }
      } else {
        console.error("Error al realizar la búsqueda de lugares:", status);
      }
    });
  }
  
  function createMarker(place, map) {
    const marker = new google.maps.Marker({
      map: map,
      position: place.geometry.location,
      title: place.name,
    });
  
    const infowindow = new google.maps.InfoWindow({
      content: `<h3>${place.name}</h3><p>${place.vicinity}</p>`,
    });
  
    marker.addListener('click', () => {
      infowindow.open(map, marker);
  
      const solucionDiv = document.getElementById("solucion");
      const nameInput = document.querySelector("#register-solution-form input[name='name']");
      const addressInput = document.querySelector("#register-solution-form input[name='address']");
      const imageUrlInput = document.querySelector("#register-solution-form input[name='imageUrl']");
      const existingImage = document.querySelector("#register-solution-form img");
  
      if (existingImage) {
          existingImage.remove();
      }
  
      solucionDiv.style.display = "block";
      nameInput.value = place.name;
      addressInput.value = place.vicinity;
  
      if (place.photos && place.photos.length > 0) {
          const photoUrl = place.photos[0].getUrl({ maxWidth: 400, maxHeight: 300 });
          imageUrlInput.value = photoUrl; // Guardar URL de la imagen en un campo oculto
          imageUrlInput.insertAdjacentHTML(
              'afterend',
              `<img src="${photoUrl}" alt="${place.name}" style="max-width: 300px; margin-top: 10px;">`
          );
      } else {
          console.warn(`No hay fotos disponibles para el lugar: ${place.name}`);
      }
  });  
}
  