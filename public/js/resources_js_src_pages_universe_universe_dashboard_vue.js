(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_pages_universe_universe_dashboard_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

"use strict";
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

"use strict";
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
        link: "/app/"
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
          link: null,
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
          name: "TECHNICAL CONFIRENCE",
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

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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
  props: {
    label: String,
    firm_type: String,
    query_counter_total: Number,
    query_counter_valid: Number,
    query_counter_expired: Number,
    query_counter_undefined: Number,
    query_counter_1586: Number,
    query_counter_8749: Number,
    query_counter_9275: Number,
    query_counter_6969: Number,
    query_counter_9003: Number,
    href_1586: String,
    href_8749: String,
    href_9275: String,
    href_6969: String,
    href_9003: String,
    href: String
  },
  components: {
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_0__.Link
  },
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _layouts_default_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../layouts/default.vue */ "./resources/js/src/layouts/default.vue");
/* harmony import */ var _mixins_universe_dashboard__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../mixins/universe_dashboard */ "./resources/js/src/mixins/universe_dashboard.js");
/* harmony import */ var _mixins_universe_dashboard__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_mixins_universe_dashboard__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _dashboard_cards_main_dashboard_card__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./dashboard_cards/main_dashboard_card */ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue");
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");
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
  mixins: [(_mixins_universe_dashboard__WEBPACK_IMPORTED_MODULE_1___default())],
  components: {
    DefaultLayout: _layouts_default_vue__WEBPACK_IMPORTED_MODULE_0__["default"],
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_3__.Link,
    MainDashboard: _dashboard_cards_main_dashboard_card__WEBPACK_IMPORTED_MODULE_2__["default"]
  },
  props: {
    firm_type: String,
    query_registered_industries: Number,
    query_all_firm: Number,
    query_permit_1586: Number,
    query_permit_8749: Number,
    query_permit_9275: Number,
    query_permit_6969: Number,
    query_permit_8749_valid: Number,
    query_permit_9275_valid: Number,
    query_permit_8749_expired: Number,
    query_permit_9275_expired: Number,
    query_permit_8749_undefined: Number,
    query_permit_9275_undefined: Number,
    query_pco_all: Number,
    query_nov_all: Number,
    query_nov_1586: Number,
    query_nov_8749: Number,
    query_nov_9275: Number,
    query_nov_6969: Number,
    query_nov_9003: Number,
    query_order_issued: Number,
    query_monitoring_all: Number,
    query_monitoring_1586: Number,
    query_monitoring_8749: Number,
    query_monitoring_9275: Number,
    query_monitoring_6969: Number,
    query_monitoring_9003: Number,
    query_complaint: Number
  },
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./resources/js/src/mixins/universe_dashboard.js":
/*!*******************************************************!*\
  !*** ./resources/js/src/mixins/universe_dashboard.js ***!
  \*******************************************************/
/***/ (() => {



/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue":
/*!***************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

"use strict";
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

"use strict";
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

/***/ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue":
/*!*********************************************************************************!*\
  !*** ./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main_dashboard_card.vue?vue&type=template&id=268aa734& */ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734&");
/* harmony import */ var _main_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./main_dashboard_card.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _main_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__.render,
  _main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/universe_dashboard.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/pages/universe/universe_dashboard.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./universe_dashboard.vue?vue&type=template&id=9bb2b540& */ "./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540&");
/* harmony import */ var _universe_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./universe_dashboard.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _universe_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__.render,
  _universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/universe_dashboard.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

"use strict";
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

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./default.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_main_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./main_dashboard_card.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_main_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_universe_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./universe_dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_universe_dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&":
/*!**********************************************************************************!*\
  !*** ./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

"use strict";
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

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_default_vue_vue_type_template_id_acf3a4fc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./default.vue?vue&type=template&id=acf3a4fc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/layouts/default.vue?vue&type=template&id=acf3a4fc&");


/***/ }),

/***/ "./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734&":
/*!****************************************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734& ***!
  \****************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_dashboard_card_vue_vue_type_template_id_268aa734___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./main_dashboard_card.vue?vue&type=template&id=268aa734& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734&");


/***/ }),

/***/ "./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540& ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_universe_dashboard_vue_vue_type_template_id_9bb2b540___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./universe_dashboard.vue?vue&type=template&id=9bb2b540& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/RightMenu.vue?vue&type=template&id=46dd6d0b& ***!
  \*************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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

"use strict";
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

"use strict";
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
        [
          _c(
            "v-container",
            {
              staticClass: "scrollbar-thin overflow-y-scroll",
              attrs: { fluid: "" },
            },
            [_vm._t("default")],
            2
          ),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-footer",
        { attrs: { app: "", rounded: "" } },
        [
          _c("v-switch", {
            attrs: {
              inset: "",
              label: "Vuetify Theme Dark",
              "persistent-hint": "",
            },
            model: {
              value: _vm.$vuetify.theme.dark,
              callback: function ($$v) {
                _vm.$set(_vm.$vuetify.theme, "dark", $$v)
              },
              expression: "$vuetify.theme.dark",
            },
          }),
          _vm._v(" "),
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



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734&":
/*!*******************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/dashboard_cards/main_dashboard_card.vue?vue&type=template&id=268aa734& ***!
  \*******************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
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
    {
      staticClass: "text-black bg-white rounded-lg",
      staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
    },
    [
      _c(
        "div",
        {
          staticClass:
            "primary text-xl rounded-t-lg text-white border-b p-2 text-center",
        },
        [
          _c(
            "b",
            { staticClass: "text-xl" },
            [
              _c(
                "v-icon",
                { staticClass: "float-left mt-1", attrs: { dark: "" } },
                [_vm._v(" mdi-folder")]
              ),
              _vm._v(" " + _vm._s(_vm.label) + "\n        "),
            ],
            1
          ),
        ]
      ),
      _vm._v(" "),
      _c("div", { staticClass: "text-lg p-4" }, [
        _vm.label == "REGISTERED FIRMS" ||
        _vm.label == "WITH 1586" ||
        _vm.label == "WITH 6969" ||
        _vm.label == "WITH PCO" ||
        _vm.label == "WITH ORDER" ||
        _vm.label == "COMPLAINT"
          ? _c("div", { staticClass: "text-xl text-center grid grid-cols-1" }, [
              _c(
                "div",
                { staticClass: "text-xl text-center grid grid-cols-1 pt-6" },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("Total: "),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_total)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
              _vm._v(" "),
              _vm._m(0),
            ])
          : _vm._e(),
        _vm._v(" "),
        _vm.label == "WITH 8749" || _vm.label == "WITH 9275"
          ? _c("div", [
              _c(
                "div",
                { staticClass: "text-xl text-center grid grid-cols-1" },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("Total: "),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_total)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500",
                },
                [
                  _c("div", [
                    _vm._v("\n                    Active: "),
                    _c("br"),
                    _c("b", { staticClass: "text-2xl" }, [
                      _vm._v(_vm._s(_vm.query_counter_valid)),
                    ]),
                  ]),
                  _vm._v(" "),
                  _c("div", [
                    _vm._v("\n                    Expired: "),
                    _c("br"),
                    _c("b", { staticClass: "text-2xl text-rose-600" }, [
                      _vm._v(_vm._s(_vm.query_counter_expired)),
                    ]),
                  ]),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500",
                },
                [
                  _c("div", [
                    _vm._v("\n                    Undefined: "),
                    _c("b", { staticClass: "text-2xl" }, [
                      _vm._v(_vm._s(_vm.query_counter_undefined)),
                    ]),
                  ]),
                ]
              ),
            ])
          : _vm._e(),
        _vm._v(" "),
        _vm.label == "WITH NOV" || _vm.label == "MONITORING"
          ? _c("div", [
              _c(
                "div",
                { staticClass: "text-xl text-center grid grid-cols-1" },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("Total: "),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_total)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500",
                },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href_1586 } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("PD1586: "),
                          _c("br"),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_1586)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href_8749 } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("RA8749: "),
                          _c("br"),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_8749)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500",
                },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href_9275 } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("RA9275: "),
                          _c("br"),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_9275)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href_6969 } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("RA6969: "),
                          _c("br"),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_6969)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass:
                    "text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500",
                },
                [
                  _c(
                    "div",
                    [
                      _c("Link", { attrs: { href: _vm.href_9003 } }, [
                        _c("span", { staticClass: "text-black" }, [
                          _vm._v("RA9003: "),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.query_counter_9003)),
                          ]),
                        ]),
                      ]),
                    ],
                    1
                  ),
                ]
              ),
            ])
          : _vm._e(),
      ]),
    ]
  )
}
var staticRenderFns = [
  function () {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "text-xl text-left grid grid-cols-1" }, [
      _c("div", [_vm._v(" ")]),
    ])
  },
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/universe_dashboard.vue?vue&type=template&id=9bb2b540& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("DefaultLayout", [
    _c("div", { staticClass: "grid grid-cols-5 gap-5 mb-5" }, [
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_permit_9275,
              query_counter_valid: _vm.query_permit_9275_valid,
              query_counter_expired: _vm.query_permit_9275_expired,
              query_counter_undefined: _vm.query_permit_9275_undefined,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",
              label: "WITH 9275",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_permit_8749,
              query_counter_valid: _vm.query_permit_8749_valid,
              query_counter_expired: _vm.query_permit_8749_expired,
              query_counter_undefined: _vm.query_permit_8749_undefined,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",
              firm_type: _vm.firm_type,
              label: "WITH 8749",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_permit_6969,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",
              label: "WITH 6969",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_permit_1586,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",
              label: "WITH 1586",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_registered_industries,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=",
              label: "REGISTERED FIRMS",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-5 gap-5" }, [
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_monitoring_all,
              query_counter_1586: _vm.query_monitoring_1586,
              query_counter_8749: _vm.query_monitoring_8749,
              query_counter_9275: _vm.query_monitoring_9275,
              query_counter_6969: _vm.query_monitoring_6969,
              query_counter_9003: _vm.query_monitoring_9003,
              href_1586:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",
              href_8749:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",
              href_9275:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",
              href_6969:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",
              href_9003:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003",
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003",
              firm_type: _vm.firm_type,
              label: "MONITORING",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_nov_all,
              query_counter_1586: _vm.query_nov_1586,
              query_counter_8749: _vm.query_nov_8749,
              query_counter_9275: _vm.query_nov_9275,
              query_counter_6969: _vm.query_nov_6969,
              query_counter_9003: _vm.query_nov_9003,
              href_1586:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",
              href_8749:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",
              href_9275:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",
              href_6969:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",
              href_9003:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003",
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003",
              firm_type: _vm.firm_type,
              label: "WITH NOV",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_order_issued,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=ORDER&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=",
              label: "WITH ORDER",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_pco_all,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PCO&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=",
              label: "WITH PCO",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("MainDashboard", {
            attrs: {
              query_counter_total: _vm.query_complaint,
              firm_type: _vm.firm_type,
              href:
                "/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=COMPLAINT&searchStatus=&searchType=" +
                _vm.firm_type +
                "&search1586=&search8749=&search9275=&search6969=&search9003=",
              label: "COMPLAINT",
            },
          }),
        ],
        1
      ),
    ]),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);