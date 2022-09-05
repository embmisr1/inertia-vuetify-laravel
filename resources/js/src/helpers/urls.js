<<<<<<< HEAD
const root = "http://210.213.92.250:90/api/v1/"
=======
const root = "http://210.213.92.250:90/api/v1/";
const root_owens = "http://210.213.92.250:90/api/app/";
>>>>>>> 2c27b2cdac2c7a1091d8a09d0dae7abb2665f89d

const urls = {
    psic_group_class: root + "psic_group_class",
    psic_sub_class: root + "psic_sub_class",
    project_type: root + "project/type",
    project_subtype: root + "project/subtype",
    project_specifictype: root + "project/specifictype",
    provinceDropdown: root_owens + "province_dropdown",
    municipalityDropdown: root_owens + "municipality_dropdown",
    psic_group_dropdown: root_owens + "psic_group_dropdown",
    psic_class_dropdown: root_owens + "psic_class_dropdown",
    project_type_dropdown: root_owens + "project_type_dropdown",
    project_subtype_dropdown: root_owens + "project_subtype_dropdown",
    project_specific_type_dropdown:
        root_owens + "project_specific_type_dropdown",
};

export default urls;
