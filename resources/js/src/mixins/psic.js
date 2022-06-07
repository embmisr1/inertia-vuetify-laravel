import urls from "../helpers/urls";
import axios from "axios";
import _ from "lodash";
export default {
    data() {
        return {
            groupModal: {
                active: false,
                form: this.$inertia.form({
                    psic_group_desc: "",
                    request_type: "post",
                }),
            },
            groupClassModal: {
                active: false,
                form: this.$inertia.form({
                    psic_class_desc: "",
                    psic_group_FK: "",
                    request_type: "post",
                }),
            },
            subClassModal: {
                active: false,
                form: this.$inertia.form({
                    psic_subclass_desc: "",
                    psic_class_FK: "",
                    request_type: "post",
                }),
            },
            psic_group_desc: "",
            psicGroup: [],
            psicClass: [],
        };
    },
    methods: {
        // group
        set_psic_group(data, type) {
            this.groupModal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                    request_type: type,
                }),
            };
        },
        async groupClose() {
            try {
                this.groupModal = {
                    active: false,
                    form: this.$inertia.form({
                        psic_group_desc: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("groupClose-error");
            }
        },
        async submitGroup() {
            try {
                this.loading = true;
                const group_form = this.groupModal.form;
                switch (group_form.request_type) {
                    case "post":
                        await group_form.post("#");
                        break;
                    case "patch":
                        await group_form.patch(`group/${group_form.id}`);
                        break;
                    case "delete":
                        await group_form.delete(`group/${group_form.id}`);
                        break;

                    default:
                        await group_form.post("#");
                }
                this.groupClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitGroup-error");
            }
        },
        searchGroup: _.debounce(async function (psic_group_desc) {
            try {
                this.loading = true;
                if (!psic_group_desc) {
                    this.loading = false;
                    return (this.psicGroup = []);
                }
                const { data } = await axios.get(urls.psic_group_class, {
                    params: {
                        psic_group_desc,
                    },
                });

                this.psicGroup = data.data;
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.loading = false;
                this.error("searchGroup - error");
            }
        }, 1500),
        // class
        async add_group_class_via_group_page(data) {
            try {
                const { id, psic_group_desc } = data;
                this.groupClassModal = {
                    active: true,
                    form: this.$inertia.form({
                        psic_class_desc: "",
                        psic_group_FK: id,
                        searchClass: psic_group_desc,
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(error);
                this.error("add_group_class_via_group_page - error");
            }
        },
        set_psic_group_class(data, type) {
            const { id, psic_class_desc, psic_group } = data;
            this.groupClassModal = {
                active: true,
                form: this.$inertia.form({
                    // ...data,
                    id,
                    psic_class_desc,
                    psic_group_FK: psic_group.id,
                    searchClass: psic_group.desc,
                    request_type: type,
                }),
            };
        },
        async groupClassClose() {
            try {
                this.groupClassModal = {
                    active: false,
                    form: this.$inertia.form({
                        psic_group_desc: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("groupClose-error");
            }
        },
        async submitGroupClass() {
            try {
                this.loading = true;
                const group_class_form = this.groupClassModal.form;
                switch (group_class_form.request_type) {
                    case "post":
                        await group_class_form.post("/app/psic/class");
                        // await group_class_form.post("#");
                        break;
                    case "patch":
                        await group_class_form.patch(
                            `class/${group_class_form.id}`
                        );
                        break;
                    case "delete":
                        await group_class_form.delete(
                            `class/${group_class_form.id}`
                        );
                        break;

                    default:
                        await group_class_form.post("#");
                }
                this.groupClassClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitGroupClass-error");
            }
        },
        searchClass: _.debounce(async function (psic_class_desc) {
            try {
                this.loading = true;
                if (!psic_class_desc) {
                    this.loading = false;
                    return (this.psicClass = []);
                }
                const { data } = await axios.get(urls.psic_sub_class, {
                    params: {
                        psic_class_desc,
                    },
                });

                this.psicClass = data.data;
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.loading = false;
                this.error("searchClass - error");
            }
        }, 1500),
        //sub class
        async add_sub_class_via_class_page(data) {
            try {
                const { id, psic_class_desc } = data;
                this.subClassModal = {
                    active: true,
                    form: this.$inertia.form({
                        psic_subclass_desc: "",
                        psic_class_FK: id,
                        searchClass: psic_class_desc,
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(error);
                this.error("add_sub_class_via_class_page - error");
            }
        },
        set_psic_sub_class(data, type) {
            const { id, psic_subclass_desc, psic_class } = data;
            this.subClassModal = {
                active: true,
                form: this.$inertia.form({
                    // ...data,
                    id,
                    psic_subclass_desc,
                    psic_class_FK: psic_class.id,
                    searchClass: psic_class.desc,
                    request_type: type,
                }),
            };
        },
        async subClassClose() {
            try {
                this.subClassModal = {
                    active: false,
                    form: this.$inertia.form({
                        psic_subclass_desc: "",
                        psic_class_FK: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("subClassClose-error");
            }
        },
        async submitSubClass() {
            try {
                this.loading = true;
                const sub_class_form = this.subClassModal.form;
                switch (sub_class_form.request_type) {
                    case "post":
                        await sub_class_form.post("/app/psic/sub-class");
                        break;
                    case "patch":
                        await sub_class_form.patch(
                            `sub-class/${sub_class_form.id}`
                        );
                        break;
                    case "delete":
                        await sub_class_form.delete(
                            `sub-class/${sub_class_form.id}`
                        );
                        break;

                    default:
                        await sub_class_form.post("#");
                }
                this.subClassClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitSubClass-error");
            }
        },
    },
};
