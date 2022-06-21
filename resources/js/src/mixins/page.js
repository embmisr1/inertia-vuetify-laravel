export default {
    props: {
        errors: Object,
        filters:Object,
        flash: Object,
        route: Object,
    },
    data() {
        return {
            loading: false,
            currentPage: 1,
        };
    },
    computed: {
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
            if (data.message) this.success(data.message);
        },
    },
};
