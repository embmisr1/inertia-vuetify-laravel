"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_mixins_user_modal_js"],{

/***/ "./resources/js/src/mixins/user_modal.js":
/*!***********************************************!*\
  !*** ./resources/js/src/mixins/user_modal.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      change_pass_modal: {
        active: false,
        form: this.$inertia.form({
          old: "",
          "new": "",
          conf: ""
        })
      },
      user_modal: {},
      admin_reset_password: {
        active: false,
        form: this.$inertia.form({
          id: "",
          "new": "",
          conf: ""
        })
      }
    };
  },
  methods: {
    setModal: function setModal(data, type) {
      this.user_modal = {
        active: true,
        form: this.$inertia.form(_objectSpread({}, data)),
        type: type
      };
    },
    resetUserModal: function resetUserModal() {
      this.user_modal = {
        active: false,
        form: this.$inertia.form({// username: "",
          // email: "",
          // password: "",
        }),
        type: "Add"
      };
    },
    setChangePassModal: function setChangePassModal(data, type) {
      this.change_pass_modal = {
        active: true,
        form: this.$inertia.form(_objectSpread({}, data)),
        type: type
      };
    },
    setAdminReset: function setAdminReset(data) {
      this.admin_reset_password = {
        active: true,
        form: this.$inertia.form(_objectSpread(_objectSpread({}, data), {}, {
          "new": "",
          conf: ""
        }))
      };
    },
    resetAdminResetPasswordModal: function resetAdminResetPasswordModal() {
      this.admin_reset_password = {
        active: false,
        form: this.$inertia.form({
          id: "",
          "new": "",
          conf: ""
        })
      };
    },
    resetChangePassModal: function resetChangePassModal() {
      this.change_pass_modal = {
        active: false,
        form: this.$inertia.form({
          old: "",
          "new": "",
          conf: ""
        }),
        type: "Change Password"
      };
    }
  }
});

/***/ })

}]);