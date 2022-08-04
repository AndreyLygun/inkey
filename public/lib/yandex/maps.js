ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map('map', {
        center: [coord[1], coord[0]],
        zoom: 16
    });
    myObject = new ymaps.GeoObject({
        // Описание геометрии.
        geometry: {
            type: "Point",
            coordinates: [coord[1], coord[0]]
        }
    });
    myMap.geoObjects.add(myObject);
}
