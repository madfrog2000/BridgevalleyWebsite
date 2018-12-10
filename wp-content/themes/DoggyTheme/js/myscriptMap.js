var mymap = L.map('mapid').setView([-36.925282,174.936057], 15);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWFkZnJvZzIwMDAiLCJhIjoiY2pra2V5dmlsNjVmZTN3bWxzdWR5d3JndSJ9.Waxo1P2mQmBLEZKZM8D10A'
}).addTo(mymap);

var marker = L.marker([-36.924863, 174.933297]).addTo(mymap);
marker.bindPopup("<b>We are here!</b><br>253 Whitford Road Auckland, New Zealand").openPopup();