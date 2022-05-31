import urls from "../helpers/urls";
import axios from "axios";
import _ from 'lodash'
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
            psic_group_desc: "",
            psicGroup: [],
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
                const { data } = await axios.get(urls.psic_group_class, {
                    params: {
                        psic_group_desc,
                    },
                });

                console.log(data);
            } catch (error) {
                console.log(error);
                this.error("searchGroup - error");
            }
        },1500),
        // class
        set_psic_group_class(data, type) {
            this.groupClassModal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
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
                        await group_class_form.post("#");
                        break;
                    case "patch":
                        await group_class_form.patch(
                            `group/${group_class_form.id}`
                        );
                        break;
                    case "delete":
                        await group_class_form.delete(
                            `group/${group_class_form.id}`
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
    },
};
