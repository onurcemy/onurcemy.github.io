## Onur Cem Yologlu
### B.Sc: METU (Middle East Technical University) Environmental Engineering, 2020
### M.Sc: BOUN (Boğaziçi University) Institute of Environmental Science,2023

##### onurcemy@protonmail.com


```python
%matplotlib inline
import pandas as pd
import numpy as np
import seaborn as sns                       #visualisation
import matplotlib as mpl
import matplotlib.pyplot as plt             #visualisation
mpl.style.use("default")
import time
import matplotlib.dates as mdates
from datetime import datetime
```


```python
%%capture
!pip install folium
import folium
from folium import plugins
```


```python
map_eind=folium.Map(location=[51.4381, 5.4752], zoom_start=4)
from folium.plugins import Geocoder

Geocoder().add_to(map_eind)
incidents = folium.map.FeatureGroup()
folium.Marker(location=[51.4381, 5.4752], popup="Where I am living").add_to(incidents)
#folium.features.CircleMarker(
#            [51.4381, 5.4752],
#            tooltip="Where I am living",
#            radius=15, # define how big you want the circle markers to be
#            color='yellow',
#            fill=True,
#            fill_color='blue',
#            fill_opacity=0.6
#        ).add_to(incidents)
folium.features.CircleMarker(
            [39.891388, 32.784721],
            tooltip="Where I was graduated",
            radius=15, # define how big you want the circle markers to be
            color='yellow',
            fill=True,
            fill_color='blue',
            fill_opacity=0.6
        ).add_to(incidents)

# add incidents to map
minimap = plugins.MiniMap()
map_eind.add_child(minimap)

map_eind.add_child(incidents)

```




<div style="width:100%;"><div style="position:relative;width:100%;height:0;padding-bottom:60%;"><span style="color:#565656">Make this Notebook Trusted to load map: File -> Trust Notebook</span><iframe srcdoc="&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;

    &lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;

        &lt;script&gt;
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        &lt;/script&gt;

    &lt;style&gt;html, body {width: 100%;height: 100%;margin: 0;padding: 0;}&lt;/style&gt;
    &lt;style&gt;#map {position:absolute;top:0;bottom:0;right:0;left:0;}&lt;/style&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://code.jquery.com/jquery-1.12.4.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js&quot;&gt;&lt;/script&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.css&quot;/&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css&quot;/&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css&quot;/&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/all.min.css&quot;/&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css&quot;/&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css&quot;/&gt;

            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no&quot; /&gt;
            &lt;style&gt;
                #map_1aea229717d366c4573dba5ad628d6cd {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
                .leaflet-container { font-size: 1rem; }
            &lt;/style&gt;

    &lt;script src=&quot;https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js&quot;&gt;&lt;/script&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css&quot;/&gt;
    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.js&quot;&gt;&lt;/script&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://cdnjs.cloudflare.com/ajax/libs/leaflet-minimap/3.6.1/Control.MiniMap.css&quot;/&gt;
&lt;/head&gt;
&lt;body&gt;


            &lt;div class=&quot;folium-map&quot; id=&quot;map_1aea229717d366c4573dba5ad628d6cd&quot; &gt;&lt;/div&gt;

&lt;/body&gt;
&lt;script&gt;


            var map_1aea229717d366c4573dba5ad628d6cd = L.map(
                &quot;map_1aea229717d366c4573dba5ad628d6cd&quot;,
                {
                    center: [51.4381, 5.4752],
                    crs: L.CRS.EPSG3857,
                    zoom: 4,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );





            var tile_layer_1735f5b1090d58f6ea64fd01862eeca3 = L.tileLayer(
                &quot;https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png&quot;,
                {&quot;attribution&quot;: &quot;Data by \u0026copy; \u003ca target=\&quot;_blank\&quot; href=\&quot;http://openstreetmap.org\&quot;\u003eOpenStreetMap\u003c/a\u003e, under \u003ca target=\&quot;_blank\&quot; href=\&quot;http://www.openstreetmap.org/copyright\&quot;\u003eODbL\u003c/a\u003e.&quot;, &quot;detectRetina&quot;: false, &quot;maxNativeZoom&quot;: 18, &quot;maxZoom&quot;: 18, &quot;minZoom&quot;: 0, &quot;noWrap&quot;: false, &quot;opacity&quot;: 1, &quot;subdomains&quot;: &quot;abc&quot;, &quot;tms&quot;: false}
            ).addTo(map_1aea229717d366c4573dba5ad628d6cd);


            L.Control.geocoder(
                {&quot;collapsed&quot;: false, &quot;defaultMarkGeocode&quot;: true, &quot;position&quot;: &quot;topright&quot;}
            ).on(&#x27;markgeocode&#x27;, function(e) {
                map_1aea229717d366c4573dba5ad628d6cd.setView(e.geocode.center, 11);
            }).addTo(map_1aea229717d366c4573dba5ad628d6cd);



            var tile_layer_d45d792ba6a8de45d16f37d53ced7d5a = L.tileLayer(
                &quot;https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png&quot;,
                {&quot;attribution&quot;: &quot;Data by \u0026copy; \u003ca target=\&quot;_blank\&quot; href=\&quot;http://openstreetmap.org\&quot;\u003eOpenStreetMap\u003c/a\u003e, under \u003ca target=\&quot;_blank\&quot; href=\&quot;http://www.openstreetmap.org/copyright\&quot;\u003eODbL\u003c/a\u003e.&quot;, &quot;detectRetina&quot;: false, &quot;maxNativeZoom&quot;: 18, &quot;maxZoom&quot;: 18, &quot;minZoom&quot;: 0, &quot;noWrap&quot;: false, &quot;opacity&quot;: 1, &quot;subdomains&quot;: &quot;abc&quot;, &quot;tms&quot;: false}
            );
            var mini_map_8529ccf6e9d8c301fd788089a795496d = new L.Control.MiniMap(
                tile_layer_d45d792ba6a8de45d16f37d53ced7d5a,
                {&quot;autoToggleDisplay&quot;: false, &quot;centerFixed&quot;: false, &quot;collapsedHeight&quot;: 25, &quot;collapsedWidth&quot;: 25, &quot;height&quot;: 150, &quot;minimized&quot;: false, &quot;position&quot;: &quot;bottomright&quot;, &quot;toggleDisplay&quot;: false, &quot;width&quot;: 150, &quot;zoomAnimation&quot;: false, &quot;zoomLevelOffset&quot;: -5}
            );
            map_1aea229717d366c4573dba5ad628d6cd.addControl(mini_map_8529ccf6e9d8c301fd788089a795496d);


            var feature_group_42f60aa6edcd77f2e5be6062b6008fee = L.featureGroup(
                {}
            ).addTo(map_1aea229717d366c4573dba5ad628d6cd);


            var marker_719d6b5bc817c297223c7364f3a52f81 = L.marker(
                [51.4381, 5.4752],
                {}
            ).addTo(feature_group_42f60aa6edcd77f2e5be6062b6008fee);


        var popup_afd3cc9772715188780c653b471859ed = L.popup({&quot;maxWidth&quot;: &quot;100%&quot;});



                var html_51ea2f927c965fb910a157c009fe3823 = $(`&lt;div id=&quot;html_51ea2f927c965fb910a157c009fe3823&quot; style=&quot;width: 100.0%; height: 100.0%;&quot;&gt;Where I am living&lt;/div&gt;`)[0];
                popup_afd3cc9772715188780c653b471859ed.setContent(html_51ea2f927c965fb910a157c009fe3823);



        marker_719d6b5bc817c297223c7364f3a52f81.bindPopup(popup_afd3cc9772715188780c653b471859ed)
        ;




            var circle_marker_eeac88c5993ee77ab154373473d24bcf = L.circleMarker(
                [39.891388, 32.784721],
                {&quot;bubblingMouseEvents&quot;: true, &quot;color&quot;: &quot;yellow&quot;, &quot;dashArray&quot;: null, &quot;dashOffset&quot;: null, &quot;fill&quot;: true, &quot;fillColor&quot;: &quot;blue&quot;, &quot;fillOpacity&quot;: 0.6, &quot;fillRule&quot;: &quot;evenodd&quot;, &quot;lineCap&quot;: &quot;round&quot;, &quot;lineJoin&quot;: &quot;round&quot;, &quot;opacity&quot;: 1.0, &quot;radius&quot;: 15, &quot;stroke&quot;: true, &quot;weight&quot;: 3}
            ).addTo(feature_group_42f60aa6edcd77f2e5be6062b6008fee);


            circle_marker_eeac88c5993ee77ab154373473d24bcf.bindTooltip(
                `&lt;div&gt;
                     Where I was graduated
                 &lt;/div&gt;`,
                {&quot;sticky&quot;: true}
            );

&lt;/script&gt;
&lt;/html&gt;" style="position:absolute;width:100%;height:100%;left:0;top:0;border:none !important;" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe></div></div>




```python

```
