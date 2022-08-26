import _ from "lodash";

export default {
    props: {
        errors: Object,
        filters: Object,
        flash: Object,
        route: Object,
        access:Array,
    },
    data() {
        return {
            loading: false,
            currentPage: 1,
        };
    },
    computed: {
        route_params() {
            const urlParams = new URLSearchParams(location.search);
            let routes = [];
            for (const [key, value] of urlParams) {
                let route_key = {
                    key,
                    value,
                };
                routes.push(route_key);
            }
            return routes;
        },
        route_back() {
            return this.route.back_at_one;
        },
        filtersObject() {
            return { ...this.filters };
        },
        isTheme() {
            return this.$vuetify.theme.dark;
        },
        errorMessage() {
            return { ...this.errors };
        },
        successMessage() {
            return { ...this.flash };
        },
    },
    methods: {
        goTo(url) {
            window.open(url, "_blank");
        },
        search_query_params(key) {
            const query_params = _.filter(this.route_params, (param) => {
                return param.key === key;
            });
            return query_params[0]
        },
        async onPageChange(page) {
            this.loading = true;
            await this.get({ page });
            this.loading = false;
        },
        async onSort(sort, order) {
            try {
                if (this.loading) {
                    return;
                }
                console.log("sort", sort, order);

                let newSort = {};

                newSort[sort] = order;
                // this.setSort(newSort)
            } catch (error) {}
        },
        async removeAttachment(file_id) {
            try {
                this.loading = true;
                await this.confirmDelete(
                    "This action  cannot be undone",
                    async () => {
                        await this.$inertia.delete(
                            `/app/delete_attachements/${file_id}`
                        );
                        console.log(this.slf.lce_FK);
                    }
                );
                this.loading = false;
            } catch (error) {
                this.loading = false;
                console.log(error);
                this.error(error.response.data.message);
            }
        },
    },
    watch: {
        filtersObject() {
            this.loading = true;
            this.get({ ...this.filtersObject });
            this.loading = false;
        },
        errorMessage(data) {
            if (data.error_message) this.error(data.error_message);
            if (data.items) this.error(data.items);
            if (Object.keys(data).length > 1) this.error("Form Error");
        },
        successMessage(data) {
            console.log(data);
            if (data.message) this.success(data.message);
        },
    },
};
