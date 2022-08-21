"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_layouts_default_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__.Link
  },
  props: {
    items: {
      type: Array,
      require: true,
      "default": []
    },
    themeColor: {
      type: Boolean,
      require: false,
      "default": true
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__.Link
  },
  props: {
    items: {
      type: Array,
      require: true
    }
  },
  data: function data() {
    return {
      selected: 0,
      admins: [["Management", "mdi-account-multiple-outline"], ["Settings", "mdi-cog-outline"]],
      cruds: [["Create", "mdi-plus-outline"], ["Read", "mdi-file-outline"], ["Update", "mdi-update"], ["Delete", "mdi-delete"]]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");
/* harmony import */ var _components_RightMenu_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/RightMenu.vue */ "./resources/js/src/components/RightMenu.vue");
/* harmony import */ var _components_SideNavItems_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/SideNavItems.vue */ "./resources/js/src/components/SideNavItems.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__.Link,
    RightMenu: _components_RightMenu_vue__WEBPACK_IMPORTED_MODULE_1__["default"],
    SideNavItems: _components_SideNavItems_vue__WEBPACK_IMPORTED_MODULE_2__["default"]
  },
  metaInfo: {
    // if no subcomponents specify a metaInfo.title, this title will be used
    title: "Unisys",
    // all titles will be injected into this template
    titleTemplate: "%s | EMB - Region 1 - Unisys",
    link: [{
      rel: "icon",
      href: "http://r1.emb.gov.ph/wp-content/uploads/2022/03/DENR-LOGO.png"
    }],
    author: [{
      name: "Allan Daryl Ancheta",
      email: "allandaryl.dev@gmail.com",
      github: "allandaryldev"
    }]
  },
  data: function data() {
    return {
      drawer: true,
      items: [{
        title: "Profile",
        icon: "mdi-account",
        link: "/app/profile/"
      }, {
        title: "Log Out",
        icon: "mdi-logout",
        link: "/app"
      }],
      sidebarItems: [{
        header: "Firm Management",
        child: [{
          name: "Firm Management",
          link: null,
          icon: "mdi-view-dashboard",
          child: [{
            name: "Universe Dashboard Firm",
            link: "/app/universe_dashboard/firm",
            icon: "mdi-link"
          }, {
            name: "Universe Dashboard LGU",
            link: "/app/universe_dashboard/lgu",
            icon: "mdi-link"
          }, {
            name: "Universe",
            link: "/app/universe/",
            icon: "mdi-link"
          }, {
            name: "Universe Registration",
            link: "/app/universe_form/",
            icon: "mdi-link"
          }, {
            name: "Activity Log",
            link: "",
            icon: "mdi-link"
          }]
        }]
      }, {
        header: "Monitoring",
        child: [{
          name: "ECC/NCC",
          link: null,
          icon: "mdi-clipboard-file",
          child: []
        }, {
          name: "AIR",
          link: null,
          icon: "mdi-air-filter",
          child: []
        }, {
          name: "WATER",
          link: null,
          icon: "mdi-water",
          child: []
        }, {
          name: "AMBIENT",
          link: null,
          icon: "mdi-shield-alert",
          child: []
        }, {
          name: "SOLID WASTE",
          link: '/app/swm/lce_list',
          icon: "mdi-trash-can",
          child: []
        }, {
          name: "HAZARDOUS WASTE",
          link: null,
          icon: "mdi-biohazard",
          child: []
        }]
      }, {
        header: "LEGAL UNIT",
        child: [{
          name: "VIOLATIONS",
          link: null,
          icon: "mdi-ticket",
          child: [{
            name: "MASTER LIST",
            link: "",
            icon: "mdi-link"
          }, {
            name: "ACTIVE",
            link: "",
            icon: "mdi-link"
          }]
        }, {
          name: "TECHNICAL CONFERENCE",
          link: null,
          icon: "mdi-account-group",
          child: [{
            name: "MASTER LIST",
            link: "",
            icon: "mdi-link"
          }, {
            name: "ACTIVE",
            link: "",
            icon: "mdi-link"
          }]
        }, {
          name: "COMPLAINTS",
          link: null,
          icon: "mdi-clipboard-file",
          child: []
        }]
      }, {
        header: "USER MANAGEMENT",
        child: [{
          name: "SYSTEM USERS",
          link: "/app/users/",
          icon: "mdi-account-group",
          child: []
        }, {
          name: "USER GROUPS",
          link: null,
          icon: "mdi-account-supervisor",
          child: []
        }, {
          name: "POSITION",
          link: '/app/position',
          icon: "mdi-account-supervisor",
          child: []
        }, {
          name: "DIVISION",
          link: '/app/division',
          icon: "mdi-account-supervisor",
          child: []
        }, {
          name: "UNIT SECTION",
          link: '/app/unit_section',
          icon: "mdi-account-supervisor",
          child: []
        }, {
          name: "User Access",
          link: null,
          icon: "mdi-account-group",
          child: [{
            name: "User Roles",
            link: "/app/users_access/users_access_role_list",
            icon: "mdi-link"
          }, {
            name: "User Role Template",
            link: "/app/users_access/users_access_template_list",
            icon: "mdi-link"
          }]
        }]
      }, {
        header: "INDUSTRY CONFIGURATION",
        child: [{
          name: "PROJECT TYPE",
          link: null,
          icon: "mdi-file-document-multiple",
          child: [{
            name: "PROJECT TYPE",
            link: "/app/project/type",
            icon: "mdi-link"
          }, {
            name: "PROJECT SUB-TYPE",
            link: "/app/project/subtype",
            icon: "mdi-link"
          }, {
            name: "PROJECT SPECIFIC TYPE",
            link: "/app/project/specifictype",
            icon: "mdi-link"
          }, {
            name: "PROJECT SPECIFIC SUB-TYPE",
            link: "/app/project/specificsubtype",
            icon: "mdi-link"
          }, {
            name: "DETAILED DESCRIPTION",
            link: "",
            icon: "mdi-link"
          }]
        }, {
          name: "2009 PSIC CODES",
          link: null,
          icon: "mdi-file-document-multiple",
          child: [{
            name: "PSIC GROUP",
            link: "/app/psic/group",
            icon: "mdi-link"
          }, {
            name: "PSIC CLASS",
            link: "/app/psic/class",
            icon: "mdi-link"
          }, {
            name: "PSIC SUB CLASS",
            link: "/app/psic/sub-class",
            icon: "mdi-link"
          }]
        }]
      }, {
        header: "APP CONFIGURATION",
        child: [{
          name: "REFERENCE PLACES",
          link: null,
          icon: "mdi-map",
          child: [{
            name: "REGION ",
            link: "",
            icon: "mdi-link"
          }, {
            name: "PROVINCE",
            link: "",
            icon: "mdi-link"
          }, {
            name: "DISTRICT",
            link: "",
            icon: "mdi-link"
          }, {
            name: "TOWN/CITY",
            link: "",
            icon: "mdi-link"
          }, {
            name: "BARANGAY",
            link: "",
            icon: "mdi-link"
          }]
        }]
      }]
    };
  },
  computed: {
    isDark: function isDark() {
      return this.$vuetify.theme.dark;
    }
  }
});

/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue":
/*!***************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./RightMenu.vue?vue&type=template&id=46dd6d0b& */ "./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&");
/* harmony import */ var _RightMenu_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./RightMenu.vue?vue&type=script&lang=js& */ "./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _RightMenu_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__.render,
  _RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/components/RightMenu.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/components/SideNavItems.vue":
/*!******************************************************!*\
  !*** ./resources/js/src/components/SideNavItems.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SideNavItems.vue?vue&type=template&id=40864e14& */ "./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14&");
/* harmony import */ var _SideNavItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SideNavItems.vue?vue&type=script&lang=js& */ "./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _SideNavItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__.render,
  _SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/components/SideNavItems.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/layouts/default.vue":
/*!**********************************************!*\
  !*** ./resources/js/src/layouts/default.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./default.vue?vue&type=template&id=acf3a4fc& */ "./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc&");
/* harmony import */ var _default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./default.vue?vue&type=script&lang=js& */ "./resources/js/src/layouts/default.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.render,
  _default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/layouts/default.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_RightMenu_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./RightMenu.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_RightMenu_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SideNavItems.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/layouts/default.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/src/layouts/default.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./default.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&":
/*!**********************************************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_RightMenu_vue_vue_type_template_id_46dd6d0b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./RightMenu.vue?vue&type=template&id=46dd6d0b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&");


/***/ }),

/***/ "./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14&":
/*!*************************************************************************************!*\
  !*** ./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideNavItems_vue_vue_type_template_id_40864e14___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SideNavItems.vue?vue&type=template&id=40864e14& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14&");


/***/ }),

/***/ "./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc&":
/*!*****************************************************************************!*\
  !*** ./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./default.vue?vue&type=template&id=acf3a4fc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b& ***!
  \*************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "v-list",
        _vm._l(_vm.items, function (item, index) {
          return _c(
            "v-list-item",
            { key: index },
            [
              _c(
                "v-list-item-icon",
                [
                  _c("v-icon", {
                    domProps: { textContent: _vm._s(item.icon) },
                  }),
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "v-list-item-content",
                [
                  _c("Link", {
                    staticClass: "text-gray-900",
                    attrs: {
                      href: item.link,
                      as: "button",
                      method: item.title !== "Log Out" ? "get" : "delete",
                    },
                    domProps: { innerHTML: _vm._s(item.title) },
                  }),
                ],
                1
              ),
            ],
            1
          )
        }),
        1
      ),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/SideNavItems.vue?vue&type=template&id=40864e14& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "overflow-hidden" },
    _vm._l(_vm.items, function (item, index) {
      return _c(
        "v-list",
        {
          key: index,
          staticClass: "overflow-hidden  ",
          attrs: { dense: "", nav: "" },
        },
        [
          _c("v-subheader", [_vm._v(_vm._s(item.header))]),
          _vm._v(" "),
          _vm._l(item.child, function (child, i) {
            return _c(
              "v-list-group",
              {
                key: i,
                attrs: {
                  dark: "",
                  "prepend-icon": child.icon,
                  value: false,
                  "append-icon": child.child.length ? "mdi-chevron-down" : null,
                },
                scopedSlots: _vm._u(
                  [
                    {
                      key: "activator",
                      fn: function () {
                        return [
                          _c(
                            "v-list-item-content",
                            [
                              !child.link
                                ? _c("v-list-item-subtitle", {
                                    domProps: {
                                      textContent: _vm._s(child.name),
                                    },
                                  })
                                : _c(
                                    "v-list-item-subtitle",
                                    [
                                      _c(
                                        "Link",
                                        {
                                          attrs: {
                                            href: child.link,
                                            as: "button",
                                            "preserve-scroll": "",
                                          },
                                        },
                                        [_vm._v(_vm._s(child.name))]
                                      ),
                                    ],
                                    1
                                  ),
                            ],
                            1
                          ),
                        ]
                      },
                      proxy: true,
                    },
                  ],
                  null,
                  true
                ),
              },
              [
                _vm._v(" "),
                _vm._l(child.child, function (childItem) {
                  return _c(
                    "v-list-item",
                    { key: childItem.name, attrs: { dense: "" } },
                    [
                      _c(
                        "v-list-item-icon",
                        [
                          _c("v-icon", [
                            _vm._v(
                              "\n                        " +
                                _vm._s(childItem.icon) +
                                "\n                    "
                            ),
                          ]),
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-list-item-content",
                        [
                          !childItem.link
                            ? _c("v-list-item-subtitle", {
                                domProps: {
                                  textContent: _vm._s(childItem.name),
                                },
                              })
                            : _c(
                                "v-list-item-subtitle",
                                [
                                  _c(
                                    "Link",
                                    {
                                      attrs: {
                                        href: childItem.link,
                                        as: "button",
                                        "preserve-scroll": "",
                                      },
                                    },
                                    [_vm._v(_vm._s(childItem.name))]
                                  ),
                                ],
                                1
                              ),
                        ],
                        1
                      ),
                    ],
                    1
                  )
                }),
              ],
              2
            )
          }),
        ],
        2
      )
    }),
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-app",
    [
      _c(
        "v-navigation-drawer",
        {
          staticClass: "scrollbar-thin overflow-y-scroll",
          attrs: { app: "", clipped: "" },
          model: {
            value: _vm.drawer,
            callback: function ($$v) {
              _vm.drawer = $$v
            },
            expression: "drawer",
          },
        },
        [_c("SideNavItems", { attrs: { items: _vm.sidebarItems } })],
        1
      ),
      _vm._v(" "),
      _c(
        "v-app-bar",
        { attrs: { app: "", "clipped-left": "", short: "", rounded: "" } },
        [
          !_vm.drawer
            ? _c("v-app-bar-nav-icon", {
                on: {
                  click: function ($event) {
                    $event.stopPropagation()
                    _vm.drawer = !_vm.drawer
                  },
                },
              })
            : _c("box-icon", {
                attrs: { name: "x", color: _vm.isDark ? "white" : "black" },
                on: {
                  click: function ($event) {
                    _vm.drawer = !_vm.drawer
                  },
                },
              }),
          _vm._v(" "),
          _c("v-spacer"),
          _vm._v(" "),
          _c(
            "v-menu",
            {
              attrs: {
                "offset-x": "",
                left: "",
                "z-index": "50",
                origin: "center center",
                transition: "scale-transition",
              },
              scopedSlots: _vm._u([
                {
                  key: "activator",
                  fn: function (ref) {
                    var on = ref.on
                    var attrs = ref.attrs
                    return [
                      _c(
                        "img",
                        _vm._g(
                          _vm._b(
                            {
                              staticClass: "max-h-12 object-cover",
                              attrs: {
                                src: "http://r1.emb.gov.ph/wp-content/uploads/2022/03/cropped-DENR-LOGO.png",
                                alt: "DENR - EMB Region 1",
                              },
                            },
                            "img",
                            attrs,
                            false
                          ),
                          on
                        )
                      ),
                    ]
                  },
                },
              ]),
            },
            [
              _vm._v(" "),
              _c("RightMenu", {
                attrs: { items: _vm.items, themeColor: _vm.isDark },
              }),
            ],
            1
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-main",
        {
          staticStyle: {
            "background-color": "#f4f5fa !important",
            "overflow-y": "hidden",
          },
        },
        [_c("div", { staticClass: "p-4" }, [_vm._t("default")], 2)]
      ),
      _vm._v(" "),
      _c(
        "v-footer",
        { attrs: { app: "", rounded: "" } },
        [
          _c("v-spacer"),
          _vm._v("\n        © DENR - EMB REGION 1 - UNISYS\n    "),
        ],
        1
      ),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);