<template>
    <DefaultLayout :access="access">
        <div class="grid grid-cols-2 gap-4">
            <v-card>
                <v-card-title primary-title> Im the Map </v-card-title>
                <v-card-text>
                    <div>
                        <gmap-autocomplete
                            @place_changed="updateCenter($event)"
                        />
                    </div>
                    <gmap-map
                        :center="center"
                        :zoom="18"
                        style="width: 100%; height: 300px"
                        ref="map"
                    >
                        <!-- <gmap-marker
                v-for="(m, index) in path"
                :key="index"
                :position="m"
            /> -->
                        <gmap-marker :position="center" />

                        <gmap-polygon
                            :paths="path"
                            :editable="true"
                            fillColor="#a5F5F1"
                            :fillOpacity="100"
                            :strokeWeight="1"
                        />
                        <!-- @paths_changed="updateEdited($event)" -->
                        <gmap-polyline
                            v-if="path.length > 0"
                            :path="path"
                            :editable="true"
                            @path_changed="updateEdited_polyline($event)"
                            @rightclick="handleClickForDelete($event)"
                            ref="polyline"
                            :strokeWeight="0"
                            :options="{ backgroundColor: 'white' }"
                        />
                    </gmap-map>
                </v-card-text>
            </v-card>

            <div class="">
                <v-card>
                    <v-card-title primary-title> Pinned Location </v-card-title>
                    <v-card-text>
                        <v-simple-table dense>
                            <template v-slot:default>
                                <thead>
                                    <tr>
                                        <th class="text-left">Lat</th>
                                        <th class="text-left">Lng</th>
                                        <th class="text-left"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(item, index) in path"
                                        :key="index"
                                    >
                                        <td>{{ item.lat }}</td>
                                        <td>{{ item.lng }}</td>
                                        <td>
                                            <box-icon
                                            v-if="item.id"
                                            color="red"
                                                class="cursor-pointer"
                                                size="sm"
                                                name="trash"
                                                animation="tada-hover"
                                            ></box-icon>
                                        </td>
                                    </tr>
                                </tbody>
                            </template>
                        </v-simple-table>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn @click="addPath()" text>Add Path</v-btn>
                        <v-btn @click="savePath()" color="success"
                            >Save Path</v-btn
                        >
                        <v-btn
                            @click="resetMap()"
                            color="red darken-2 white--text"
                            >Reset</v-btn
                        >
                    </v-card-actions>
                </v-card>
            </div>
        </div>
    </DefaultLayout>
</template>

<script>
import UniverseInfo from "../../mixins/universe_info";
import { page, toasts, dialogs } from "../../mixins";
import { Link } from "@inertiajs/inertia-vue";
import DefaultLayout from "../../layouts/default.vue";
import _ from "lodash";
function closeLoop(path) {
    return path.concat(path.slice(0, 1));
}
export default {
    mixins: [UniverseInfo, page, toasts, dialogs],
    components: { DefaultLayout },
    props: ["data"],
    data() {
        return {
            edited: null,
            path: [],
            mvcPath: null,
            errorMessage_map_map: null,
            polygonGeojson: "",
        };
    },
    created() {
        if (this.query_polygon) {
            this.path = this.query_polygon;
        }
    },
    watch: {
        query_polygon(value) {
            this.path = value;
        },
        polylinePath: _.throttle(function (coords) {
            try {
                if (coords) {
                    this.path = coords;
                    this.polygonGeojson = JSON.stringify(
                        {
                            type: "Polygon",
                            coordinates: this.path.map(
                                (path) => closeLoop([path.lng, path.lat])
                                // closeLoop(path.map(({ lat, lng }) => [lng, lat]))
                            ),
                        },
                        null,
                        2
                    );
                }
            } catch (error) {
                console.log(error);
            }
        }, 1000),
    },
    computed: {
        query_universe() {
            return { ...this.data.query_universe };
        },
        query_polygon() {
            return [...this.data.query_polygon.data];
        },
        universe_id() {
            return this.query_universe.id;
        },
        center() {
            return {
                lat: parseFloat(this.query_universe.un_lat),
                lng: parseFloat(this.query_universe.un_long),
            };
        },
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
        resetMap() {
            this.path = this.query_polygon;
        },
        async savePath() {
            try {
                const data = {
                    universe_FK: this.universe_id,
                    path: this.path,
                };
                this.loading = true;
                await this.$inertia.post("/app/savePolygon", data);
                this.loading = false;
            } catch (error) {
                this.loading = false;
                this.error(error.response.data.message);
            }
        },
        addPath() {
            this.path.push({ ...this.center });
        },
        updateCenter: function (place) {
            this.center = {
                lat: place.geometry.location.lat(),
                lng: place.geometry.location.lng(),
            };
        },
        updateEdited: function (mvcArray) {
            // let paths = [];
            // for (let i = 0; i < mvcArray.getLength(); i++) {
            //     let path = [];
            //     for (let j = 0; j < mvcArray.getAt(i).getLength(); j++) {
            //         let point = mvcArray.getAt(i).getAt(j);
            //         path.push({ lat: point.lat(), lng: point.lng() });
            //     }
            //     paths.push(path);
            // }
            // this.edited = paths;
        },
        updateEdited_polyline: function (mvcPath) {
            this.mvcPath = mvcPath;
        },
        handleClickForDelete($event) {
            if ($event.vertex) {
                this.$refs.polyline.$polylineObject
                    .getPaths()
                    .getAt($event.path)
                    .removeAt($event.vertex);
            }
        },
        async removePath(pin_id) {
            await this.$buefy.dialog.confirm({
                title: "Confirm to Delete",
                message:
                    "Are you sure you want to <b class='uppercase'>Remove this location </b> ? This action cannot be undone",
                confirmText: "Confirm",
                type: "is-danger",
                hasIcon: true,
                onConfirm: async () => {
                    await this.$inertia.delete(`/app/delete_pin/${pin_id}`);
                    await _.remove(this.path, function (path) {
                        return path.id !== pin_id;
                    });
                },
            });
        },
        readGeojson: function ($event) {
            try {
                this.polylineGeojson = $event.target.value;

                var v = JSON.parse($event.target.value);

                this.path = v.coordinates.map(([lng, lat]) => ({ lat, lng }));

                this.errorMessage_map = null;
            } catch (err) {
                this.errorMessage_map = err.message;
            }
        },
    },
};
</script>
