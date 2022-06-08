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
        async modalHandler(item, action) {
            let title = await this.getTitle(item);
            item = JSON.parse(JSON.stringify(item));

            switch (action) {
                case "changepass":
                    return (this.changepassmodal = {
                        active: true,
                        title: `Update ${title} password`,
                        data: JSON.parse(JSON.stringify(item)),
                    });
                case "changeaccesscontroll":
                    return (this.changeaccesscontrollmodal = {
                        active: true,
                        title: `Change ${item.name} Access`,
                        action: "changeaccesscontroll",
                        data: JSON.parse(JSON.stringify(item)),
                    });
                case "update":
                    title = `Update ${title}`;
                    if (this.alterData) {
                        // item = this.alterData(item)
                    }
                    break;
                case "delete":
                    title = `Delete ${title}`;
                    if (this.alterData) {
                        // item = this.alterData(item)
                    }

                    break;
                default:
                    // this.closeModal()
                    break;
            }
            this.modal = Object.assign(
                {},
                {
                    active: true,
                    title: title,
                    action: action,
                    data: item,
                }
            );
        },
        async closeModal() {
            try {
                this.modal = Object.assign(
                    {},
                    {
                        active: false,
                        title: `Create ${this.name}`,
                        action: "add",
                        // data: this.TheModel(),
                    }
                );
                console.log("closeModal");
            } catch (error) {
                console.log(error);
            }
        },
        async closeChangePassModal() {
            try {
                this.changepassmodal = Object.assign(
                    {},
                    {
                        active: false,
                        title: "Update password",
                        // data: this.TheModel(),
                    }
                );
            } catch (error) {
                console.log(error);
            }
        },
        async closeAccessControllModal() {
            try {
                this.changeaccesscontrollmodal = Object.assign(
                    {},
                    {
                        active: false,
                        title: "",
                        // data: this.TheModel(),
                    }
                );
            } catch (error) {
                console.log(error);
            }
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
