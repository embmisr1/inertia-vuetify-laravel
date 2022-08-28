"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_mixins_toasts_js"],{

/***/ "./resources/js/src/mixins/toasts.js":
/*!*******************************************!*\
  !*** ./resources/js/src/mixins/toasts.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  methods: {
    success: function success() {
      var message = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "No Message";
      this.$buefy.toast.open({
        message: message,
        type: "is-success",
        position: "is-bottom-right",
        queue: false
      });
    },
    error: function error() {
      var message = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "No Message";
      this.$buefy.toast.open({
        message: message,
        type: "is-danger",
        position: "is-top",
        queue: false
      });
    },
    info: function info() {
      var message = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "No Message";
      this.$buefy.toast.open({
        message: message,
        position: "is-top-right",
        queue: false
      });
    }
  }
});

/***/ })

}]);