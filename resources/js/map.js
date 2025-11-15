const mapData = {
    center: { lat: 46.858109051904144, lng: 20.55937215797379 },
    zoom: 12,
    markerCoordinates: { lat: 46.858109051904144, lng: 20.55937215797379 },
    mapId:'eb222c4c609ebf0067904bd8'
};

const init = async () => {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    const map = new Map(document.getElementById("map"), {
        zoom: mapData.zoom,
        center: mapData.center,
        gestureHandling: 'cooperative',
        mapId:mapData.mapId
    });

    const marker = new AdvancedMarkerElement({
        map: map,
        position: mapData.markerCoordinates,
        title: "Genesis"
    });
};

window.initMap = init;