export default {
    data() {
        return {
            loading: false,
            currentPage: 1,
        };
    },
    computed: {
        isTheme() {
            return this.$vuetify.theme.dark;
        },
    },
    computed: {
        filtersObject() {
            return { ...this.filters };
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
};
