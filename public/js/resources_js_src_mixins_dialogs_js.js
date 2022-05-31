"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_mixins_dialogs_js"],{

/***/ "./resources/js/src/mixins/dialogs.js":
/*!********************************************!*\
  !*** ./resources/js/src/mixins/dialogs.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  methods: {
    confirmDelete: function confirmDelete() {
      var message = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'This action  cannot be undone';
      var callback = arguments.length > 1 ? arguments[1] : undefined;
      this.$buefy.dialog.confirm({
        title: 'Are You Sure',
        message: message,
        confirmText: 'Delete',
        type: 'is-danger',
        hasIcon: true,
        onConfirm: callback
      });
    }
  }
});

/***/ })

}]);