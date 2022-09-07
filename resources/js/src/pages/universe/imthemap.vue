<template>
    <DefaultLayout :access="access">
        <div>
            <v-btn @click="addPath()">Add Path</v-btn>
            <v-btn @click="removePath()">Remove Path</v-btn>
        </div>

        <gmap-map
            :center="center"
            :zoom="20"
            style="width: 100%; height: 500px"
            ref="map"
        >
            <gmap-marker
                v-for="(m, index) in path"
                :key="index"
                :position="m"
            />

            <gmap-polygon
                :paths="path"
                :editable="true"
                @paths_changed="updateEdited($event)"
                fillColor="#F5F5F5"
                :strokeWeight="3"
            />

            <!-- <gmap-polyline
                v-if="path.length > 0"
                :path="path"
                :editable="true"
                @path_changed="updateEdited($event)"
                @rightclick="handleClickForDelete"
                ref="polyline"
                :strokeWeight="0"
                :options="{backgroundColor:'white'}"
            >
            </gmap-polyline> -->
        </gmap-map>
    </DefaultLayout>
</template>

<script>
import UniverseInfo from "../../mixins/universe_info";
import { page, toasts } from "../../mixins";
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
function closeLoop(path) {
    return path.concat(path.slice(0, 1));
}
export default {
    mixins: [UniverseInfo, page, toasts],
    components: { DefaultLayout },
    data() {
        return {
            center: { lat: 16.597808076693116, lng: 120.32245375048808 },
            edited: null,
            path: [
                { lat: 16.597829691519802, lng: 120.32243796226948 },
                { lat: 16.597958443198923, lng: 120.3219358688774 },
                { lat: 16.597281898424686, lng: 120.3217779866913 },

                { lat: 16.597829691519802, lng: 120.32243796226948 },
            ],
            paths: [],
            mvcPath: null,
            errorMessage_map: null,
            polygonGeojson: "",
        };
    },
    watch: {
        polylinePath: _.throttle(function (path) {
            if (path) {
                this.path = path;
                this.polylineGeojson = JSON.stringify(
                    {
                        type: "Polyline",
                        coordinates: this.path.map(({ lat, lng }) => [
                            lng,
                            lat,
                        ]),
                    },
                    null,
                    2
                );
            }
        }, 1000),
    },
    computed: {
        polylinePath: function () {
            if (!this.mvcPath) return null;

            let path = [];
            for (let j = 0; j < this.mvcPath.getLength(); j++) {
                let point = this.mvcPath.getAt(j);
                path.push({ lat: point.lat(), lng: point.lng() });
            }
            return path;
        },
    },
    methods: {
        updateCenter: function (place) {
            this.center = {
                lat: place.geometry.location.lat(),
                lng: place.geometry.location.lng(),
            };
        },
        updateEdited: function (mvcArray) {
            let paths = [];
            for (let i=0; i<mvcArray.getLength(); i++) {
              let path = [];
              for (let j=0; j<mvcArray.getAt(i).getLength(); j++) {
                let point = mvcArray.getAt(i).getAt(j);
                path.push({lat: point.lat(), lng: point.lng()});
              }
              paths.push(path);
            }
            this.edited = paths;
        },
        handleClickForDelete($event) {
            if ($event.vertex) {
                this.$refs.polyline.$polylineObject
                    .getPaths()
                    .getAt($event.path)
                    .removeAt($event.vertex);
            }
        },
        readGeojson: function ($event) {
            try {
                this.polylineGeojson = $event.target.value;

                var v = JSON.parse($event.target.value);

                this.path = v.coordinates.map(([lng, lat]) => ({ lat, lng }));

                this.errorMessage = null;
            } catch (err) {
                this.errorMessage = err.message;
            }
        },
    },
};
</script>
