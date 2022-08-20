import urls from "../helpers/urls";
import axios from "axios";
import _ from "lodash";
export default {
    data() {
        return {
            typeModal: {
                active: false,
                form: this.$inertia.form({
                    project_type_desc: "",
                    request_type: "post",
                }),
            },
            subTypeModal: {
                active: false,
                form: this.$inertia.form({
                    project_subtype_desc: "",
                    project_type_FK: "",
                    request_type: "post",
                }),
            },
            specificTypeModal: {
                active: false,
                form: this.$inertia.form({
                    project_specific_type_desc: "",
                    project_subtype_FK: "",
                    request_type: "post",
                }),
            },
            specificSubTypeModal: {
                active: false,
                form: this.$inertia.form({
                    project_specific_subtype_desc: "",
                    project_specific_type_FK: "",
                    request_type: "post",
                }),
            },
            project_type: [],
            project_subtype: [],
            project_specific_type: [],
        };
    },
    methods: {
        // type
        set_project_type(data, type) {
            this.typeModal = {
                active: true,
                form: this.$inertia.form({
                    ...data,
                    request_type: type,
                }),
            };
        },
        async typeClose() {
            try {
                this.typeModal = {
                    active: false,
                    form: this.$inertia.form({
                        project_type_desc: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("typeClose-error");
            }
        },
        async submitProjectType() {
            try {
                this.loading = true;
                const type_form = this.typeModal.form;
                switch (type_form.request_type) {
                    case "post":
                        await type_form.post("#");
                        break;
                    case "patch":
                        await type_form.patch(`type/${type_form.id}`);
                        break;
                    case "delete":
                        await type_form.delete(`type/${type_form.id}`);
                        break;

                    default:
                        await type_form.post("#");
                }
                this.typeClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitProjectType-error");
            }
        },
        searchProjectType: _.debounce(async function (project_type_desc) {
            try {
                this.loading = true;
                if (!project_type_desc) {
                    this.loading = false;
                    return (this.psicGroup = []);
                }
                const { data } = await axios.get(urls.project_type, {
                    params: {
                        project_type_desc,
                    },
                });

                this.project_type = data.data;
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.loading = false;
                this.error("searchGroup - error");
            }
        }, 1500),
        // sub type
        async add_sub_type_via_page(data) {
            try {
                const { id, project_type_desc } = data;
                this.subTypeModal = {
                    active: true,
                    form: this.$inertia.form({
                        project_subtype_desc: "",
                        project_type_FK: id,
                        searchClass: project_type_desc,
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(error);
                this.error("add_group_class_via_group_page - error");
            }
        },
        set_project_sub_type(data, type) {
            const { id, project_subtype_desc, project_type } = data;
            this.subTypeModal = {
                active: true,
                form: this.$inertia.form({
                    // ...data,
                    id,
                    project_subtype_desc,
                    project_type_FK: project_type.id,
                    searchClass: project_type.desc,
                    request_type: type,
                }),
            };
        },
        async projectSubTypeClose() {
            try {
                this.subTypeModal = {
                    active: false,
                    form: this.$inertia.form({
                        project_subtype_desc: "",
                        psic_type_FK: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("projectSubTypeClose-error");
            }
        },
        async submitSubTypeClass() {
            try {
                this.loading = true;
                const subType_form = this.subTypeModal.form;
                switch (subType_form.request_type) {
                    case "post":
                        await subType_form.post("/app/project/subtype");
                        // await subType_form.post("#");
                        break;
                    case "patch":
                        await subType_form.patch(`subtype/${subType_form.id}`);
                        break;
                    case "delete":
                        await subType_form.delete(`subtype/${subType_form.id}`);
                        break;

                    default:
                        await subType_form.post("/app/project/subtype");
                }
                this.projectSubTypeClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitGroupClass-error");
            }
        },
        searchSubType: _.debounce(async function (project_subtype_desc) {
            try {
                this.loading = true;
                if (!project_subtype_desc) {
                    this.loading = false;
                    return (this.psicClass = []);
                }
                const { data } = await axios.get(urls.project_subtype, {
                    params: {
                        project_subtype_desc,
                    },
                });

                this.project_subtype = data.data;
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.loading = false;
                this.error("searchClass - error");
            }
        }, 1500),
        //specific type
        async add_specific_type_via_page(data) {
            try {
                const { id, project_subtype_desc } = data;
                this.specificTypeModal = {
                    active: true,
                    form: this.$inertia.form({
                        project_specific_type_desc: "",
                        project_subtype_FK: id,
                        searchClass: project_subtype_desc,
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(error);
                this.error("add_sub_class_via_class_page - error");
            }
        },
        set_project_specific_type(data, type) {
            const { id, project_specific_type_desc, project_subtype } = data;
            this.specificTypeModal = {
                active: true,
                form: this.$inertia.form({
                    // ...data,
                    id,
                    project_specific_type_desc,
                    project_subtype_FK: project_subtype.id,
                    searchClass: project_subtype.desc,
                    request_type: type,
                }),
            };
        },
        async specificTypeClose() {
            try {
                this.specificTypeModal = {
                    active: false,
                    form: this.$inertia.form({
                        project_specific_type_desc: "",
                        project_subtype_FK: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("specificTypeClose-error");
            }
        },
        async submitProjectSpecificType() {
            try {
                this.loading = true;
                const form = this.specificTypeModal.form;
                switch (form.request_type) {
                    case "post":
                        await form.post("/app/project/specifictype");
                        break;
                    case "patch":
                        await form.patch(`specifictype/${form.id}`);
                        break;
                    case "delete":
                        await form.delete(`specifictype/${form.id}`);
                        break;

                    default:
                        await form.post("#");
                }
                this.specificTypeClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitProjectSpecificType-error");
            }
        },
        searchProjectSpecificType: _.debounce(async function (project_specific_type_desc) {
            try {
                this.loading = true;
                if (!project_specific_type_desc) {
                    this.loading = false;
                    return (this.psicClass = []);
                }
                const { data } = await axios.get(urls.project_specifictype, {
                    params: {
                        project_specific_type_desc,
                    },
                });

                this.project_specific_type = data.data;
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.loading = false;
                this.error("searchClass - error");
            }
        }, 1500),
        //specific sub type
        async add_specific_sub_type_via_page(data) {
            try {
                const { id, project_specific_type_desc } = data;
                this.specificSubTypeModal = {
                    active: true,
                    form: this.$inertia.form({
                        project_specific_subtype_desc: "",
                        project_specific_type_FK: id,
                        searchClass: project_specific_type_desc,
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(error);
                this.error("add_sub_class_via_class_page - error");
            }
        },
        set_project_specific_sub_type(data, type) {
            const { id, project_specific_subtype_desc, project_specific_type } = data;
            this.specificSubTypeModal = {
                active: true,
                form: this.$inertia.form({
                    // ...data,
                    id,
                    project_specific_subtype_desc,
                    project_specific_type_FK: project_specific_type.id,
                    searchClass: project_specific_type.desc,
                    request_type: type,
                }),
            };
        },
        async specificSubTypeClose() {
            try {
                this.specificSubTypeModal = {
                    active: false,
                    form: this.$inertia.form({
                        project_specific_subtype_desc: "",
                        project_specific_type_FK: "",
                        request_type: "post",
                    }),
                };
            } catch (error) {
                console.log(erro);
                this.error("specificTypeClose-error");
            }
        },
        async submitProjectSpecificSubType() {
            try {
                this.loading = true;
                const form = this.specificSubTypeModal.form;
                switch (form.request_type) {
                    case "post":
                        await form.post("/app/project/specificsubtype");
                        break;
                    case "patch":
                        await form.patch(`specificsubtype/${form.id}`);
                        break;
                    case "delete":
                        await form.delete(`specificsubtype/${form.id}`);
                        break;

                    default:
                        await form.post("#");
                }
                this.specificSubTypeClose();
                this.loading = false;
            } catch (error) {
                console.log(error);
                this.error("submitProjectSpecificSubType-error");
            }
        },
    },
};
