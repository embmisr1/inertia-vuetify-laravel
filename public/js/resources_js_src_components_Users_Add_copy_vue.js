"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_components_Users_Add_copy_vue"],{

/***/ "./resources/js/src/components/Users/Add copy.vue":
/*!********************************************************!*\
  !*** ./resources/js/src/components/Users/Add copy.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Add copy.vue?vue&type=template&id=4e9a74ca& */ "./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  script,
  _Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__.render,
  _Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/components/Users/Add copy.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca&":
/*!***************************************************************************************!*\
  !*** ./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Add_copy_vue_vue_type_template_id_4e9a74ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Add copy.vue?vue&type=template&id=4e9a74ca& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/Users/Add copy.vue?vue&type=template&id=4e9a74ca& ***!
  \******************************************************************************************************************************************************************************************************************************/
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
    "v-row",
    { attrs: { justify: "space-around" } },
    [
      _c(
        "v-col",
        { attrs: { cols: "auto" } },
        [
          _c("v-dialog", {
            attrs: {
              transition: "dialog-bottom-transition",
              "max-width": "600",
            },
            scopedSlots: _vm._u([
              {
                key: "activator",
                fn: function (ref) {
                  var on = ref.on
                  var attrs = ref.attrs
                  return [
                    _c(
                      "v-btn",
                      _vm._g(
                        _vm._b(
                          { attrs: { color: "primary" } },
                          "v-btn",
                          attrs,
                          false
                        ),
                        on
                      ),
                      [_vm._v("From the bottom")]
                    ),
                  ]
                },
              },
              {
                key: "default",
                fn: function (dialog) {
                  return [
                    _c(
                      "v-card",
                      [
                        _c(
                          "v-toolbar",
                          { attrs: { color: "primary", dark: "" } },
                          [_vm._v("Opening from the bottom")]
                        ),
                        _vm._v(" "),
                        _c("v-card-text", [
                          _c("div", { staticClass: "text-h2 pa-12" }, [
                            _vm._v("Hello world!"),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c(
                          "v-card-actions",
                          { staticClass: "justify-end" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: { text: "" },
                                on: {
                                  click: function ($event) {
                                    dialog.value = false
                                  },
                                },
                              },
                              [_vm._v("Close")]
                            ),
                          ],
                          1
                        ),
                      ],
                      1
                    ),
                  ]
                },
              },
            ]),
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "v-col",
        { attrs: { cols: "auto" } },
        [
          _c("v-dialog", {
            attrs: { transition: "dialog-top-transition", "max-width": "600" },
            scopedSlots: _vm._u([
              {
                key: "activator",
                fn: function (ref) {
                  var on = ref.on
                  var attrs = ref.attrs
                  return [
                    _c(
                      "v-btn",
                      _vm._g(
                        _vm._b(
                          { attrs: { color: "primary" } },
                          "v-btn",
                          attrs,
                          false
                        ),
                        on
                      ),
                      [_vm._v("From the top")]
                    ),
                  ]
                },
              },
              {
                key: "default",
                fn: function (dialog) {
                  return [
                    _c(
                      "v-card",
                      [
                        _c(
                          "v-toolbar",
                          { attrs: { color: "primary", dark: "" } },
                          [_vm._v("Opening from the top")]
                        ),
                        _vm._v(" "),
                        _c("v-card-text", [
                          _c("div", { staticClass: "text-h2 pa-12" }, [
                            _vm._v("Hello world!"),
                          ]),
                        ]),
                        _vm._v(" "),
                        _c(
                          "v-card-actions",
                          { staticClass: "justify-end" },
                          [
                            _c(
                              "v-btn",
                              {
                                attrs: { text: "" },
                                on: {
                                  click: function ($event) {
                                    dialog.value = false
                                  },
                                },
                              },
                              [_vm._v("Close")]
                            ),
                          ],
                          1
                        ),
                      ],
                      1
                    ),
                  ]
                },
              },
            ]),
          }),
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

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

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