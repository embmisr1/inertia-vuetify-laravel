(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_pages_universe_tabs_main_tab_vue"],{

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    modal: Boolean,
    close: Function,
    submit: Function
  },
  data: function data() {
    return {
      attachments: []
    };
  },
  methods: {
    submitUpload: function submitUpload() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                try {
                  // this.$emit('submit')
                  _this.submit(_this.attachments);
                } catch (error) {
                  console.log(error);
                }

              case 1:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_2__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_basic_info: Object,
    province_list: Array,
    municipality_list: Array,
    barangay_list: Array,
    psic_group_list: Array,
    psic_class_list: Array,
    psic_subclass_list: Array,
    project_type_list: Array,
    project_subtype_list: Array,
    project_specific_type_list: Array,
    project_specific_subtype_list: Array
  },
  components: {
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_1__.Link
  },
  methods: {
    provinceDropdown: function provinceDropdown(val) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var municipality;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/province_dropdown/".concat(val));

              case 2:
                municipality = _context.sent;
                _this.municipality_list_alter = municipality.data;
                _this.barangay_list_alter = [];

              case 5:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    municipalityDropdown: function municipalityDropdown(val) {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var barangay;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/municipality_dropdown/".concat(val));

              case 2:
                barangay = _context2.sent;
                _this2.barangay_list_alter = barangay.data;

              case 4:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }))();
    },
    psicGroupDropdown: function psicGroupDropdown(val) {
      var _this3 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee3() {
        var psic_class;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/psic_group_dropdown/".concat(val));

              case 2:
                psic_class = _context3.sent;
                _this3.psic_class_list_alter = psic_class.data;

              case 4:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3);
      }))();
    },
    psicClassDropdown: function psicClassDropdown(val) {
      var _this4 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee4() {
        var psic_subclass;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/psic_class_dropdown/".concat(val));

              case 2:
                psic_subclass = _context4.sent;
                _this4.psic_subclass_list_alter = psic_subclass.data;

              case 4:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4);
      }))();
    },
    projectTypeDropdown: function projectTypeDropdown(val) {
      var _this5 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee5() {
        var project_subtype;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/project_type_dropdown/".concat(val));

              case 2:
                project_subtype = _context5.sent;
                _this5.project_subtype_list_alter = project_subtype.data;

              case 4:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5);
      }))();
    },
    projectSubTypeDropdown: function projectSubTypeDropdown(val) {
      var _this6 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee6() {
        var project_specific_type;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/project_subtype_dropdown/".concat(val));

              case 2:
                project_specific_type = _context6.sent;
                _this6.project_specific_type_list_alter = project_specific_type.data;

              case 4:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6);
      }))();
    },
    projectSpecificTypeDropdown: function projectSpecificTypeDropdown(val) {
      var _this7 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee7() {
        var project_specific_subtype;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.next = 2;
                return axios__WEBPACK_IMPORTED_MODULE_2___default().get("http://127.0.0.1:8000/api/app/project_specific_type_dropdown/".concat(val));

              case 2:
                project_specific_subtype = _context7.sent;
                _this7.project_specific_subtype_list_alter = project_specific_subtype.data;

              case 4:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7);
      }))();
    }
  },
  data: function data() {
    return {
      universe_type_selection: [{
        'universe_type_selection_obj': 'FIRM'
      }, {
        'universe_type_selection_obj': 'LGU'
      }],
      basic_tab: null,
      province_list_alter: this.province_list,
      municipality_list_alter: this.municipality_list,
      barangay_list_alter: this.barangay_list,
      basic_status: [{
        'basic_status_selection': 'Active-Operational'
      }, {
        'basic_status_selection': 'Operational'
      }, {
        'basic_status_selection': 'Non-Operational'
      }, {
        'basic_status_selection': 'Temporary Closure'
      }, {
        'basic_status_selection': 'Closed'
      }, {
        'basic_status_selection': 'Temporary Ceased Operation'
      }, {
        'basic_status_selection': 'Ceased'
      }, {
        'basic_status_selection': 'Completed'
      }, {
        'basic_status_selection': 'Cancelled'
      }, {
        'basic_status_selection': 'Delisted'
      }],
      psic_group_list_alter: this.psic_group_list,
      psic_class_list_alter: this.psic_class_list,
      psic_subclass_list_alter: this.psic_subclass_list,
      project_type_list_alter: this.project_type_list,
      project_subtype_list_alter: this.project_subtype_list,
      project_specific_type_list_alter: this.project_specific_type_list,
      project_specific_subtype_list_alter: this.project_specific_subtype_list
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_complaint_info: Object,
    complaint_table: Array
  },
  data: function data() {
    return {
      headers: [{
        text: "Name of Complainant",
        align: "start",
        sortable: false,
        value: "comp_name"
      }, {
        text: "Nature of Complaint",
        align: "start",
        sortable: false,
        value: "comp_nature"
      }, {
        text: "Attachment",
        align: "start",
        sortable: false,
        value: "comp_attached_file"
      }, {
        text: "Action Taken",
        align: "start",
        sortable: false,
        value: "comp_action_file"
      }, {
        text: "Remarks",
        align: "start",
        sortable: false,
        value: "comp_remarks"
      }, {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false
      }],
      addFileForm: false
    };
  },
  methods: {
    editComplaint: function editComplaint(item) {
      this.form_complaint_info.comp_id = item.id;
      this.form_complaint_info.comp_name = item.comp_name;
      this.form_complaint_info.comp_nature = item.comp_nature;
      this.form_complaint_info.comp_attached_file = item.comp_attached_file;
      this.form_complaint_info.comp_action_file = item.comp_action_file;
      this.form_complaint_info.comp_remarks = item.comp_remarks;
      this.addFileForm = true;
    },
    deleteComplaint: function deleteComplaint(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_complaint/".concat(item.id));

              case 2:
                _this.resetComplaint();

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    resetComplaint: function resetComplaint() {
      this.form_complaint_info.comp_id = null;
      this.form_complaint_info.comp_name = null;
      this.form_complaint_info.comp_nature = null;
      this.form_complaint_info.comp_attached_file = [];
      this.form_complaint_info.comp_action_file = [];
      this.form_complaint_info.comp_remarks = null;
    },
    addFile: function addFile() {
      this.addFileForm = true;
    },
    closeFile: function closeFile() {
      this.addFileForm = false;
      this.resetComplaint();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_hazwaste_info: Object,
    hazwaste_table: Array
  },
  data: function data() {
    return {
      headers: [{
        text: 'Hazwaste Type',
        align: 'start',
        sortable: false,
        value: 'haz_type'
      }, {
        text: 'Hazwaste Number',
        align: 'start',
        sortable: false,
        value: 'haz_number'
      }, {
        text: 'Date Acceptance',
        align: 'start',
        sortable: false,
        value: 'haz_date_acceptance'
      }, {
        text: 'Date Issued',
        align: 'start',
        sortable: false,
        value: 'haz_date_issuance'
      }, {
        text: 'Date Expiry',
        align: 'start',
        sortable: false,
        value: 'haz_date_expiry'
      }, {
        text: 'Attachment',
        align: 'start',
        sortable: false,
        value: 'haz_file'
      }, {
        width: '100px',
        text: 'Actions',
        value: 'actions',
        sortable: false
      }]
    };
  },
  methods: {
    editHazwaste: function editHazwaste(item) {
      this.form_hazwaste_info.haz_id = item.id;
      this.form_hazwaste_info.haz_type = item.haz_type;
      this.form_hazwaste_info.haz_number = item.haz_number;
      this.form_hazwaste_info.haz_date_acceptance = item.haz_date_acceptance;
      this.form_hazwaste_info.haz_date_issuance = item.haz_date_issuance;
      this.form_hazwaste_info.haz_date_expiry = item.haz_date_expiry;
      this.form_hazwaste_info.haz_file = item.haz_file;
    },
    deleteHazwaste: function deleteHazwaste(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_hazwaste/".concat(item.id));

              case 2:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_legal_info: Object,
    legal_table: Array,
    laws: Array
  },
  data: function data() {
    return {
      headers: [{
        text: "Law",
        align: "start",
        sortable: false,
        value: "nov_law"
      }, {
        text: "Description",
        align: "start",
        sortable: false,
        value: "nov_desc"
      }, {
        text: "NOV Date",
        align: "start",
        sortable: false,
        value: "nov_date"
      }, {
        text: "TC Date",
        align: "start",
        sortable: false,
        value: "nov_tc_date"
      }, {
        text: "TC Status",
        align: "start",
        sortable: false,
        value: "nov_tc_status"
      }, {
        text: "Compliance Status",
        align: "start",
        sortable: false,
        value: "nov_compliance_status"
      }, {
        text: "Attachments",
        align: "start",
        sortable: false,
        value: "nov_desc"
      }, {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false
      }],
      legal_tc_status_selection: [{
        tc_status_selection: "Attended"
      }, {
        tc_status_selection: "Not Attended"
      }],
      legal_compliance_status_selection: [{
        compliance_status_selection: "Complied"
      }, {
        compliance_status_selection: "Not Complied"
      }, {
        compliance_status_selection: "Partially Complied"
      }],
      date_legal_nov_menu: "",
      date_legal_tc_menu: "",
      date_legal_order_issuance_menu: "",
      date_legal_order_settlement_menu: "",
      addFileForm: false
    };
  },
  methods: {
    editLegal: function editLegal(item) {
      var lawArray = item.nov_law.split(", ");
      this.form_legal_info.nov_id = item.id;
      this.form_legal_info.nov_law = lawArray;
      this.form_legal_info.nov_desc = item.nov_desc;
      this.form_legal_info.nov_date = item.nov_date;
      this.form_legal_info.nov_tc_date = item.nov_tc_date;
      this.form_legal_info.nov_tc_status = item.nov_tc_status;
      this.form_legal_info.nov_file = item.nov_file;
      this.form_legal_info.nov_order_number = item.nov_order_number;
      this.form_legal_info.nov_order_amt = item.nov_order_amt;
      this.form_legal_info.nov_order_date_issuance = item.nov_order_date_issuance;
      this.form_legal_info.nov_order_date_settlement = item.nov_order_date_settlement;
      this.form_legal_info.nov_official_receipt_number = item.nov_official_receipt_number;
      this.form_legal_info.nov_compliance_status = item.nov_compliance_status;
      this.form_legal_info.nov_order_remarks = item.nov_order_remarks;
      this.addFileForm = true;
    },
    deleteLegal: function deleteLegal(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_legal/".concat(item.id));

              case 2:
                _this.resetLegal();

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    resetLegal: function resetLegal() {
      this.form_legal_info.nov_id = null;
      this.form_legal_info.nov_law = [];
      this.form_legal_info.nov_desc = null;
      this.form_legal_info.nov_date = null;
      this.form_legal_info.nov_tc_date = null;
      this.form_legal_info.nov_tc_status = null;
      this.form_legal_info.nov_file = [];
      this.form_legal_info.nov_order_number = null;
      this.form_legal_info.nov_order_amt = null;
      this.form_legal_info.nov_order_date_issuance = null;
      this.form_legal_info.nov_order_date_settlement = null;
      this.form_legal_info.nov_official_receipt_number = null;
      this.form_legal_info.nov_compliance_status = null;
      this.form_legal_info.nov_order_remarks = null;
    },
    addFile: function addFile() {
      this.addFileForm = true;
    },
    closeFile: function closeFile() {
      this.addFileForm = false;
      this.resetLegal();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _basic_tab__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./basic_tab */ "./resources/js/src/pages/universe/tabs/basic_tab.vue");
/* harmony import */ var _permit_tab__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./permit_tab */ "./resources/js/src/pages/universe/tabs/permit_tab.vue");
/* harmony import */ var _monitoring_tab__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./monitoring_tab */ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue");
/* harmony import */ var _legal_tab__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./legal_tab */ "./resources/js/src/pages/universe/tabs/legal_tab.vue");
/* harmony import */ var _hazwaste_tab__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./hazwaste_tab */ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue");
/* harmony import */ var _pco_tab__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./pco_tab */ "./resources/js/src/pages/universe/tabs/pco_tab.vue");
/* harmony import */ var _complaint_tab__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./complaint_tab */ "./resources/js/src/pages/universe/tabs/complaint_tab.vue");
/* harmony import */ var _mini_dashboard_mini_dashboard_card__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./mini_dashboard/mini_dashboard_card */ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_basic_info: Object,
    form_permit_info: Object,
    form_monitoring_info: Object,
    form_legal_info: Object,
    form_hazwaste_info: Object,
    form_complaint_info: Object,
    form_pco_info: Object,
    permit_table: Array,
    monitoring_table: Array,
    legal_table: Array,
    hazwaste_table: Array,
    complaint_table: Array,
    pco_table: Array,
    submit_basic_info: Function,
    ctr_file: Object,
    province_list: Array,
    municipality_list: Array,
    barangay_list: Array,
    psic_group_list: Array,
    psic_class_list: Array,
    psic_subclass_list: Array,
    project_type_list: Array,
    project_subtype_list: Array,
    project_specific_type_list: Array,
    project_specific_subtype_list: Array,
    laws: Array
  },
  components: {
    BasicTab: _basic_tab__WEBPACK_IMPORTED_MODULE_0__["default"],
    PermitTab: _permit_tab__WEBPACK_IMPORTED_MODULE_1__["default"],
    MonitoringTab: _monitoring_tab__WEBPACK_IMPORTED_MODULE_2__["default"],
    LegalTab: _legal_tab__WEBPACK_IMPORTED_MODULE_3__["default"],
    HazwasteTab: _hazwaste_tab__WEBPACK_IMPORTED_MODULE_4__["default"],
    PcoTab: _pco_tab__WEBPACK_IMPORTED_MODULE_5__["default"],
    ComplaintTab: _complaint_tab__WEBPACK_IMPORTED_MODULE_6__["default"],
    MiniDashboard: _mini_dashboard_mini_dashboard_card__WEBPACK_IMPORTED_MODULE_7__["default"]
  },
  data: function data() {
    return {
      tab: null
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    dashboard_header_label: String,
    dashboard_header: Number,
    dashboard_content_label: Array,
    dashboard_content: Array
  },
  components: {},
  data: function data() {
    return {};
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_monitoring_info: Object,
    monitoring_table: Array,
    laws: Array
  },
  data: function data() {
    return {
      headers: [{
        text: "Law",
        align: "start",
        sortable: false,
        value: "mon_law"
      }, {
        text: "Date Monitored",
        align: "start",
        sortable: false,
        value: "mon_date_monitored"
      }, {
        text: "Type",
        align: "start",
        sortable: false,
        value: "mon_type"
      }, {
        text: "Attachment",
        align: "start",
        sortable: false,
        value: "mon_file"
      }, {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false
      }],
      date_monitoring_menu: "",
      addFileForm: false,
      mon_or_sur_selection: ["Monitoring", "Survey"]
    };
  },
  methods: {
    editMonitoring: function editMonitoring(item) {
      var lawArray = item.mon_law.split(", ");
      this.form_monitoring_info.mon_id = item.id;
      this.form_monitoring_info.mon_law = lawArray;
      this.form_monitoring_info.mon_date_monitored = item.mon_date_monitored;
      this.form_monitoring_info.mon_or_survey = item.mon_or_survey;
      this.form_monitoring_info.mon_type = item.mon_type;
      this.form_monitoring_info.mon_file = item.mon_file;
      this.addFileForm = true;
    },
    deleteMonitoring: function deleteMonitoring(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_monitoring/".concat(item.id));

              case 2:
                _this.resetMonitoring();

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    resetMonitoring: function resetMonitoring() {
      this.form_monitoring_info.mon_id = null;
      this.form_monitoring_info.mon_law = [];
      this.form_monitoring_info.mon_date_monitored = null;
      this.form_monitoring_info.mon_or_survey = null;
      this.form_monitoring_info.mon_type = null;
      this.form_monitoring_info.mon_file = [];
    },
    addFile: function addFile() {
      this.addFileForm = true;
    },
    closeFile: function closeFile() {
      this.addFileForm = false;
      this.resetMonitoring();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_pco_info: Object,
    pco_table: Array
  },
  data: function data() {
    return {
      headers: [{
        text: "Name",
        align: "start",
        sortable: false,
        value: "pco_name"
      }, {
        text: "Pco no.",
        align: "start",
        sortable: false,
        value: "pco_number"
      }, {
        text: "Email",
        align: "start",
        sortable: false,
        value: "pco_email"
      }, {
        text: "Contact no.",
        align: "start",
        sortable: false,
        value: "pco_contact"
      }, {
        text: "Start Date",
        align: "start",
        sortable: false,
        value: "pco_start_date"
      }, {
        text: "End Date",
        align: "start",
        sortable: false,
        value: "pco_end_date"
      }, {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false
      }],
      date_pco_start_menu: "",
      date_pco_end_menu: "",
      addFileForm: false
    };
  },
  methods: {
    editPco: function editPco(item) {
      this.form_pco_info.pco_id = item.id;
      this.form_pco_info.pco_name = item.pco_name;
      this.form_pco_info.pco_number = item.pco_number;
      this.form_pco_info.pco_email = item.pco_email;
      this.form_pco_info.pco_contact = item.pco_contact;
      this.form_pco_info.pco_start_date = item.pco_start_date;
      this.form_pco_info.pco_end_date = item.pco_end_date;
      this.addFileForm = true;
    },
    deletePco: function deletePco(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_pco/".concat(item.id));

              case 2:
                _this.form_pco_info.pco_id = null;
                _this.form_pco_info.pco_name = null;
                _this.form_pco_info.pco_number = null;
                _this.form_pco_info.pco_email = null;
                _this.form_pco_info.pco_contact = null;
                _this.form_pco_info.pco_start_date = null;
                _this.form_pco_info.pco_end_date = null;

                _this.resetPco();

              case 10:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    resetPco: function resetPco() {
      this.form_pco_info.pco_id = null;
      this.form_pco_info.pco_name = null;
      this.form_pco_info.pco_number = null;
      this.form_pco_info.pco_email = null;
      this.form_pco_info.pco_contact = null;
      this.form_pco_info.pco_start_date = null;
      this.form_pco_info.pco_end_date = null;
    },
    addFile: function addFile() {
      this.addFileForm = true;
    },
    closeFile: function closeFile() {
      this.addFileForm = false;
      this.resetPco();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vue2_dropzone__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue2-dropzone */ "./node_modules/vue2-dropzone/dist/vue2Dropzone.js");
/* harmony import */ var vue2_dropzone__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vue2_dropzone__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var vue2_dropzone_dist_vue2Dropzone_min_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vue2-dropzone/dist/vue2Dropzone.min.css */ "./node_modules/vue2-dropzone/dist/vue2Dropzone.min.css");
/* harmony import */ var _components_UploadDialog_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../components/UploadDialog.vue */ "./resources/js/src/components/UploadDialog.vue");
/* harmony import */ var _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @inertiajs/inertia-vue */ "./node_modules/@inertiajs/inertia-vue/dist/index.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
    form_permit_info: Object,
    permit_table: Array
  },
  components: {
    vueDropzone: (vue2_dropzone__WEBPACK_IMPORTED_MODULE_1___default()),
    UploadDialog: _components_UploadDialog_vue__WEBPACK_IMPORTED_MODULE_3__["default"],
    Link: _inertiajs_inertia_vue__WEBPACK_IMPORTED_MODULE_4__.Link
  },
  data: function data() {
    return {
      uploadDialog: false,
      headers: [{
        text: "Law",
        align: "start",
        sortable: false,
        value: "perm_law"
      }, {
        text: "Hazwaste Type",
        align: "start",
        sortable: false,
        value: "perm_hazwaste_type"
      }, {
        text: "No.",
        align: "start",
        sortable: false,
        value: "perm_number"
      }, {
        text: "Status.",
        align: "start",
        sortable: false,
        value: "perm_status"
      }, {
        text: "Date Issuance",
        align: "start",
        sortable: false,
        value: "perm_date_issuance"
      }, {
        text: "Date Expiry",
        align: "start",
        sortable: false,
        value: "perm_date_expiry"
      }, {
        text: "Attachment",
        align: "start",
        sortable: false,
        value: "perm_file"
      }, {
        width: "100px",
        text: "Actions",
        value: "actions",
        sortable: false
      }],
      permit_law_selection: [{
        law_selection: "PD 1586"
      }, {
        law_selection: "RA 8749"
      }, {
        law_selection: "RA 9275"
      }, {
        law_selection: "RA 6969"
      }],
      permit_status_selection: [{
        status_selection: "Operational"
      }, {
        status_selection: "Relief"
      }, {
        status_selection: "Delisted"
      }, {
        status_selection: "Non Operational"
      }, {
        status_selection: "Exempted"
      }, {
        status_selection: "Cancelled"
      }],
      permit_hazwaste_selection: [{
        hazwaste_selection: "TSD"
      }, {
        hazwaste_selection: "Transporter"
      }, {
        hazwaste_selection: "Hazwaste ID"
      }, {
        hazwaste_selection: "CCO Cyanide"
      }, {
        hazwaste_selection: "CCO Mercury"
      }, {
        hazwaste_selection: "CCO Asbestos"
      }],
      date_permit_issuance_menu: "",
      date_permit_expiry_menu: "",
      dropzoneOptions: {
        url: "/store-multiple-image" //   headers: {
        //     "X-CSRF-TOKEN": document.head.querySelector("[name=csrf-token]").content
        //    }

      },
      addFileForm: false
    };
  },
  methods: {
    editPermit: function editPermit(item) {
      console.log(this.form_permit_info);
      this.form_permit_info.perm_law = item.perm_law;
      this.form_permit_info.perm_hazwaste_type = item.perm_hazwaste_type;
      this.form_permit_info.perm_date_expiry = item.perm_date_expiry;
      this.form_permit_info.perm_date_issuance = item.perm_date_issuance;
      this.form_permit_info.perm_description = item.perm_description;
      this.form_permit_info.perm_file = item.perm_file;
      this.form_permit_info.perm_id = item.id;
      this.form_permit_info.perm_law = item.perm_law;
      this.form_permit_info.perm_number = item.perm_number;
      this.form_permit_info.perm_status = item.perm_status;
      this.addFileForm = true;
    },
    deletePermit: function deletePermit(item) {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$inertia["delete"]("/app/delete_permit/".concat(item.id));

              case 2:
                _this.resetPermit();

              case 3:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    resetPermit: function resetPermit() {
      this.form_permit_info.perm_law = null;
      this.form_permit_info.perm_hazwaste_type = null;
      this.form_permit_info.perm_date_expiry = null;
      this.form_permit_info.perm_date_issuance = null;
      this.form_permit_info.perm_description = null;
      this.form_permit_info.perm_file = [];
      this.form_permit_info.perm_id = null;
      this.form_permit_info.perm_law = null;
      this.form_permit_info.perm_number = null;
      this.form_permit_info.perm_status = null;
    },
    addFile: function addFile() {
      this.addFileForm = true;
    },
    closeFile: function closeFile() {
      this.addFileForm = false;
      this.resetPermit();
    }
  }
});

/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  define(Gp, iteratorSymbol, function() {
    return this;
  });

  define(Gp, "toString", function() {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


/***/ }),

/***/ "./resources/js/src/components/UploadDialog.vue":
/*!******************************************************!*\
  !*** ./resources/js/src/components/UploadDialog.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UploadDialog.vue?vue&type=template&id=89c0f12e& */ "./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e&");
/* harmony import */ var _UploadDialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UploadDialog.vue?vue&type=script&lang=js& */ "./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _UploadDialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__.render,
  _UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/components/UploadDialog.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/basic_tab.vue":
/*!************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/basic_tab.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./basic_tab.vue?vue&type=template&id=df7ded0e& */ "./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e&");
/* harmony import */ var _basic_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./basic_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _basic_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__.render,
  _basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/basic_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/complaint_tab.vue":
/*!****************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/complaint_tab.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./complaint_tab.vue?vue&type=template&id=06c8a314& */ "./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314&");
/* harmony import */ var _complaint_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./complaint_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _complaint_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__.render,
  _complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/complaint_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue":
/*!***************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/hazwaste_tab.vue ***!
  \***************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hazwaste_tab.vue?vue&type=template&id=7ff7c48a& */ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a&");
/* harmony import */ var _hazwaste_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./hazwaste_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _hazwaste_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__.render,
  _hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/hazwaste_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/legal_tab.vue":
/*!************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/legal_tab.vue ***!
  \************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./legal_tab.vue?vue&type=template&id=ccec45f8& */ "./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8&");
/* harmony import */ var _legal_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./legal_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _legal_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__.render,
  _legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/legal_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/main_tab.vue":
/*!***********************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/main_tab.vue ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main_tab.vue?vue&type=template&id=6bb2f6aa& */ "./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa&");
/* harmony import */ var _main_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./main_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _main_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__.render,
  _main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/main_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue":
/*!*************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./mini_dashboard_card.vue?vue&type=template&id=05b2953b& */ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b&");
/* harmony import */ var _mini_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mini_dashboard_card.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _mini_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__.render,
  _mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue":
/*!*****************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/monitoring_tab.vue ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./monitoring_tab.vue?vue&type=template&id=790ea7f9& */ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9&");
/* harmony import */ var _monitoring_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./monitoring_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _monitoring_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__.render,
  _monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/monitoring_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/pco_tab.vue":
/*!**********************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/pco_tab.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pco_tab.vue?vue&type=template&id=2c8a2932& */ "./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932&");
/* harmony import */ var _pco_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./pco_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _pco_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__.render,
  _pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/pco_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/permit_tab.vue":
/*!*************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/permit_tab.vue ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./permit_tab.vue?vue&type=template&id=23e91e4c& */ "./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c&");
/* harmony import */ var _permit_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./permit_tab.vue?vue&type=script&lang=js& */ "./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _permit_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__.render,
  _permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/src/pages/universe/tabs/permit_tab.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UploadDialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./UploadDialog.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UploadDialog_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_basic_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./basic_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_basic_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_complaint_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./complaint_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_complaint_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hazwaste_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./hazwaste_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_hazwaste_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js&":
/*!*************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_legal_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./legal_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_legal_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_main_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./main_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_main_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_mini_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./mini_dashboard_card.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_mini_dashboard_card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_monitoring_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./monitoring_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_monitoring_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pco_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./pco_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_pco_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js&":
/*!**************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_permit_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./permit_tab.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_permit_tab_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e&":
/*!*************************************************************************************!*\
  !*** ./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UploadDialog_vue_vue_type_template_id_89c0f12e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./UploadDialog.vue?vue&type=template&id=89c0f12e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_basic_tab_vue_vue_type_template_id_df7ded0e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./basic_tab.vue?vue&type=template&id=df7ded0e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314& ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_complaint_tab_vue_vue_type_template_id_06c8a314___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./complaint_tab.vue?vue&type=template&id=06c8a314& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a& ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_hazwaste_tab_vue_vue_type_template_id_7ff7c48a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./hazwaste_tab.vue?vue&type=template&id=7ff7c48a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8&":
/*!*******************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8& ***!
  \*******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_legal_tab_vue_vue_type_template_id_ccec45f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./legal_tab.vue?vue&type=template&id=ccec45f8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa&":
/*!******************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_main_tab_vue_vue_type_template_id_6bb2f6aa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./main_tab.vue?vue&type=template&id=6bb2f6aa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b&":
/*!********************************************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b& ***!
  \********************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mini_dashboard_card_vue_vue_type_template_id_05b2953b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./mini_dashboard_card.vue?vue&type=template&id=05b2953b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9&":
/*!************************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9& ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_monitoring_tab_vue_vue_type_template_id_790ea7f9___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./monitoring_tab.vue?vue&type=template&id=790ea7f9& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_pco_tab_vue_vue_type_template_id_2c8a2932___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./pco_tab.vue?vue&type=template&id=2c8a2932& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932&");


/***/ }),

/***/ "./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c&":
/*!********************************************************************************************!*\
  !*** ./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c& ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_permit_tab_vue_vue_type_template_id_23e91e4c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./permit_tab.vue?vue&type=template&id=23e91e4c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/components/UploadDialog.vue?vue&type=template&id=89c0f12e& ***!
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
    "v-dialog",
    {
      attrs: { "max-width": "800" },
      model: {
        value: _vm.modal,
        callback: function ($$v) {
          _vm.modal = $$v
        },
        expression: "modal",
      },
    },
    [
      _c(
        "v-card",
        [
          _c("v-card-title", { staticClass: "text-h5" }, [
            _vm._v(" Upload A File/s "),
          ]),
          _vm._v(" "),
          _c("v-card-text", [
            _c(
              "div",
              { staticClass: "flex justify-between" },
              [
                _c(
                  "b-field",
                  [
                    _c(
                      "b-upload",
                      {
                        attrs: {
                          multiple: "",
                          "drag-drop": "",
                          expanded: "",
                          type: "is-dark",
                          accept: ".pdf,.docx,.jpeg,.jpg,.png",
                        },
                        model: {
                          value: _vm.attachments,
                          callback: function ($$v) {
                            _vm.attachments = $$v
                          },
                          expression: "attachments",
                        },
                      },
                      [
                        _c("section", { staticClass: "section" }, [
                          _c(
                            "div",
                            { staticClass: "content has-text-centered" },
                            [
                              _c(
                                "p",
                                [
                                  _c("b-icon", {
                                    attrs: {
                                      icon: "upload",
                                      size: "is-medium",
                                    },
                                  }),
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("p", [
                                _vm._v(
                                  "Drop your files here or click to upload"
                                ),
                              ]),
                            ]
                          ),
                        ]),
                      ]
                    ),
                  ],
                  1
                ),
                _vm._v(" "),
                _vm.attachments.length
                  ? _c(
                      "div",
                      { staticClass: "h-56 overflow-y-auto" },
                      [
                        _c(
                          "v-list",
                          { attrs: { dense: "" } },
                          [
                            _c(
                              "v-list-item-group",
                              [
                                _vm._l(_vm.attachments, function (item, index) {
                                  return _c(
                                    "div",
                                    { key: item.name },
                                    [
                                      _c("v-list-item", {
                                        scopedSlots: _vm._u(
                                          [
                                            {
                                              key: "default",
                                              fn: function (ref) {
                                                var active = ref.active
                                                return [
                                                  _c(
                                                    "v-list-item-content",
                                                    [
                                                      _c("v-list-item-title", {
                                                        domProps: {
                                                          textContent: _vm._s(
                                                            item.name
                                                          ),
                                                        },
                                                      }),
                                                    ],
                                                    1
                                                  ),
                                                  _vm._v(" "),
                                                  _c(
                                                    "v-list-item-action",
                                                    [
                                                      _c("box-icon", {
                                                        attrs: {
                                                          type: "solid",
                                                          name: "trash",
                                                          animation:
                                                            "tada-hover",
                                                        },
                                                      }),
                                                    ],
                                                    1
                                                  ),
                                                ]
                                              },
                                            },
                                          ],
                                          null,
                                          true
                                        ),
                                      }),
                                      _vm._v(" "),
                                      index < _vm.attachments.length - 1
                                        ? _c("v-divider", { key: index })
                                        : _vm._e(),
                                    ],
                                    1
                                  )
                                }),
                              ],
                              2
                            ),
                          ],
                          1
                        ),
                      ],
                      1
                    )
                  : _vm._e(),
              ],
              1
            ),
          ]),
          _vm._v(" "),
          _c(
            "v-card-actions",
            [
              _c("v-spacer"),
              _vm._v(" "),
              _c(
                "v-btn",
                {
                  attrs: { color: "red darken-1", text: "" },
                  on: { click: _vm.close },
                },
                [_vm._v("\n                Close\n            ")]
              ),
              _vm._v(" "),
              _c(
                "v-btn",
                {
                  attrs: { color: "green darken-1", text: "" },
                  on: { click: _vm.submitUpload },
                },
                [_vm._v("\n                Submit\n            ")]
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
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/basic_tab.vue?vue&type=template&id=df7ded0e& ***!
  \**********************************************************************************************************************************************************************************************************************************/
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
  return _c("v-card", { staticClass: "p-4", attrs: { elevation: "0" } }, [
    _c("div", { staticClass: "grid grid-cols-4 gap-y-0 gap-x-4 mt-0 ml-8" }, [
      _c("div", { staticClass: "col-span-4" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("Basic Information")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        { attrs: { hidden: "" } },
        [
          _c("v-text-field", {
            attrs: { label: "Universe ID", clearable: "" },
            model: {
              value: _vm.form_basic_info.id,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "id", $$v)
              },
              expression: "form_basic_info.id",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Firm Name", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_firmname,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_firmname", $$v)
              },
              expression: "form_basic_info.un_firmname",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Proponent", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_proponent,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_proponent", $$v)
              },
              expression: "form_basic_info.un_proponent",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "CRS No.", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_crs_number,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_crs_number", $$v)
              },
              expression: "form_basic_info.un_crs_number",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.universe_type_selection,
              label: "Universe Type",
              "item-text": "universe_type_selection_obj",
              "item-value": "universe_type_selection_obj",
              clearable: "",
            },
            model: {
              value: _vm.form_basic_info.un_type,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_type", $$v)
              },
              expression: "form_basic_info.un_type",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-3 gap-y-0 gap-x-4 ml-8" }, [
      _c("div", { staticClass: "col-span-3" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("Project Location")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.province_list_alter,
              label: "Province",
              "item-text": "provDesc",
              "item-value": "PK_province_ID",
              clearable: "",
            },
            on: { change: _vm.provinceDropdown },
            model: {
              value: _vm.form_basic_info.un_province,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_province", $$v)
              },
              expression: "form_basic_info.un_province",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.municipality_list_alter,
              label: "Municipality",
              "item-text": "citymunDesc",
              "item-value": "PK_citymun_ID",
              clearable: "",
            },
            on: { change: _vm.municipalityDropdown },
            model: {
              value: _vm.form_basic_info.un_municipality,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_municipality", $$v)
              },
              expression: "form_basic_info.un_municipality",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.barangay_list_alter,
              label: "Barangay",
              "item-text": "brgyDesc",
              "item-value": "PK_brgy_ID",
              clearable: "",
            },
            model: {
              value: _vm.form_basic_info.un_brgy,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_brgy", $$v)
              },
              expression: "form_basic_info.un_brgy",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Specific Address", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_specific_address,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_specific_address", $$v)
              },
              expression: "form_basic_info.un_specific_address",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Latitude", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_lat,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_lat", $$v)
              },
              expression: "form_basic_info.un_lat",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Longitude", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_long,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_long", $$v)
              },
              expression: "form_basic_info.un_long",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "mb-5 col-span-3 text-right" },
        [
          _c(
            "v-btn",
            { attrs: { tile: "", type: "button", color: "success" } },
            [
              _c(
                "a",
                {
                  staticClass: "text-white",
                  attrs: {
                    href: "/app/universe_map/" + _vm.form_basic_info.id,
                    target: "_blank",
                  },
                },
                [
                  _vm._v(
                    "\n                        View Location\n                    "
                  ),
                ]
              ),
            ]
          ),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-3 gap-y-0 gap-x-4 ml-8" }, [
      _c("div", { staticClass: "col-span-3" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("Representative")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Name", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_representative_name,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_representative_name", $$v)
              },
              expression: "form_basic_info.un_representative_name",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Designation", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_representative_designation,
              callback: function ($$v) {
                _vm.$set(
                  _vm.form_basic_info,
                  "un_representative_designation",
                  $$v
                )
              },
              expression: "form_basic_info.un_representative_designation",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Gender", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_representative_gender,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_representative_gender", $$v)
              },
              expression: "form_basic_info.un_representative_gender",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-3 gap-y-0 gap-x-4 ml-8" }, [
      _c("div", { staticClass: "col-span-3" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("PSIC Code")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.psic_group_list_alter,
              label: "Group",
              "item-text": "psic_group_desc",
              "item-value": "id",
              clearable: "",
            },
            on: { change: _vm.psicGroupDropdown },
            model: {
              value: _vm.form_basic_info.un_psic_group,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_psic_group", $$v)
              },
              expression: "form_basic_info.un_psic_group",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.psic_class_list_alter,
              label: "Class",
              "item-text": "psic_class_desc",
              "item-value": "id",
              clearable: "",
            },
            on: { change: _vm.psicClassDropdown },
            model: {
              value: _vm.form_basic_info.un_psic_class,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_psic_class", $$v)
              },
              expression: "form_basic_info.un_psic_class",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.psic_subclass_list_alter,
              label: "Sub Class",
              "item-text": "psic_subclass_desc",
              "item-value": "id",
              clearable: "",
            },
            model: {
              value: _vm.form_basic_info.un_psic_subclass,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_psic_subclass", $$v)
              },
              expression: "form_basic_info.un_psic_subclass",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-3 gap-y-0 gap-x-4 ml-8" }, [
      _c("div", { staticClass: "col-span-3" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("Project Type")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.project_type_list_alter,
              label: "Project Type",
              "item-text": "project_type_desc",
              "item-value": "id",
              clearable: "",
            },
            on: { change: _vm.projectTypeDropdown },
            model: {
              value: _vm.form_basic_info.un_project_type,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_project_type", $$v)
              },
              expression: "form_basic_info.un_project_type",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.project_subtype_list_alter,
              label: "Project Sub Type",
              "item-text": "project_subtype_desc",
              "item-value": "id",
              clearable: "",
            },
            on: { change: _vm.projectSubTypeDropdown },
            model: {
              value: _vm.form_basic_info.un_project_subtype,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_project_subtype", $$v)
              },
              expression: "form_basic_info.un_project_subtype",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.project_specific_type_list_alter,
              label: "Project Specific Type",
              "item-text": "project_specific_type_desc",
              "item-value": "id",
              clearable: "",
            },
            on: { change: _vm.projectSpecificTypeDropdown },
            model: {
              value: _vm.form_basic_info.un_project_specific_type,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_project_specific_type", $$v)
              },
              expression: "form_basic_info.un_project_specific_type",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.project_specific_subtype_list_alter,
              label: "Project Specific Sub Type",
              "item-text": "project_specific_subtype_desc",
              "item-value": "id",
              clearable: "",
            },
            model: {
              value: _vm.form_basic_info.un_project_specific_subtype,
              callback: function ($$v) {
                _vm.$set(
                  _vm.form_basic_info,
                  "un_project_specific_subtype",
                  $$v
                )
              },
              expression: "form_basic_info.un_project_specific_subtype",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Description", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_detailed_description,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_detailed_description", $$v)
              },
              expression: "form_basic_info.un_detailed_description",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "grid grid-cols-2 gap-y-0 gap-x-4 ml-8" }, [
      _c("div", { staticClass: "col-span-2" }, [
        _c(
          "div",
          {
            staticClass: "text-white bg-blue-500 rounded-md p-2",
            staticStyle: { "box-shadow": "0px 0px 5px #9C9C9C" },
          },
          [_vm._v("Status")]
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-text-field", {
            attrs: { label: "Remarks", clearable: "" },
            model: {
              value: _vm.form_basic_info.un_remarks,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_remarks", $$v)
              },
              expression: "form_basic_info.un_remarks",
            },
          }),
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "div",
        [
          _c("v-autocomplete", {
            attrs: {
              items: _vm.basic_status,
              label: "Status",
              "item-text": "basic_status_selection",
              "item-value": "basic_status_selection",
              clearable: "",
            },
            model: {
              value: _vm.form_basic_info.un_status,
              callback: function ($$v) {
                _vm.$set(_vm.form_basic_info, "un_status", $$v)
              },
              expression: "form_basic_info.un_status",
            },
          }),
        ],
        1
      ),
    ]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "text-center" },
      [
        _c(
          "v-btn",
          { attrs: { depressed: "", color: "primary", type: "submit" } },
          [_vm._v("\n            Submit\n        ")]
        ),
      ],
      1
    ),
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/complaint_tab.vue?vue&type=template&id=06c8a314& ***!
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
  return _c(
    "v-card",
    { staticClass: "p-4", attrs: { elevation: "0" } },
    [
      _vm.addFileForm
        ? _c("div", [
            _c(
              "div",
              { staticClass: "grid grid-cols-2 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  { attrs: { hidden: "" } },
                  [
                    _c("v-text-field", {
                      attrs: { label: "Complaint Id", clearable: "" },
                      model: {
                        value: _vm.form_complaint_info.comp_id,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_complaint_info, "comp_id", $$v)
                        },
                        expression: "form_complaint_info.comp_id",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "name_of_complaint",
                        name: "Name of Complainant",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Name of Complainant",
                                    clearable: "",
                                  },
                                  model: {
                                    value: _vm.form_complaint_info.comp_name,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_complaint_info,
                                        "comp_name",
                                        $$v
                                      )
                                    },
                                    expression: "form_complaint_info.comp_name",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        2119726820
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "nature_of_complaint",
                        name: "Nature of Complaint",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Nature of complaint",
                                    clearable: "",
                                  },
                                  model: {
                                    value: _vm.form_complaint_info.comp_nature,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_complaint_info,
                                        "comp_nature",
                                        $$v
                                      )
                                    },
                                    expression:
                                      "form_complaint_info.comp_nature",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        3127160875
                      ),
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "grid grid-cols-2 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  [
                    _c("v-file-input", {
                      attrs: {
                        accept: "application/pdf",
                        "show-size": "",
                        counter: "",
                        multiple: "",
                        label: "Attached File",
                      },
                      model: {
                        value: _vm.form_complaint_info.comp_attached_file,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_complaint_info,
                            "comp_attached_file",
                            $$v
                          )
                        },
                        expression: "form_complaint_info.comp_attached_file",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-file-input", {
                      attrs: {
                        accept: "application/pdf",
                        "show-size": "",
                        counter: "",
                        multiple: "",
                        label: "Action File",
                      },
                      model: {
                        value: _vm.form_complaint_info.comp_action_file,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_complaint_info,
                            "comp_action_file",
                            $$v
                          )
                        },
                        expression: "form_complaint_info.comp_action_file",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "grid grid-cols-1 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Complaint Remarks", clearable: "" },
                      model: {
                        value: _vm.form_complaint_info.comp_remarks,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_complaint_info, "comp_remarks", $$v)
                        },
                        expression: "form_complaint_info.comp_remarks",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center" },
              [
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "primary", type: "submit" },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-content-save ")]
                    ),
                    _vm._v("\n                Submit\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "warning", type: "button" },
                    on: { click: _vm.resetComplaint },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-autorenew ")]
                    ),
                    _vm._v("\n                Reset\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "error", type: "button" },
                    on: { click: _vm.closeFile },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-plus-circle ")]
                    ),
                    _vm._v("\n                Close\n            "),
                  ],
                  1
                ),
              ],
              1
            ),
          ])
        : _vm._e(),
      _vm._v(" "),
      !_vm.addFileForm
        ? _c(
            "v-btn",
            {
              attrs: { depressed: "", color: "success", type: "button" },
              on: { click: _vm.addFile },
            },
            [
              _c("v-icon", { staticClass: "mr-2", attrs: { small: "" } }, [
                _vm._v(" mdi-plus-circle "),
              ]),
              _vm._v("\n        Add File\n    "),
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      [
        _c(
          "v-card",
          { staticClass: "mt-5", attrs: { elevation: "2" } },
          [
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                dense: "",
                headers: _vm.headers,
                items: _vm.complaint_table,
                "item-key": "complaint_tables",
              },
              scopedSlots: _vm._u([
                {
                  key: "item.comp_attached_file",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "a",
                        {
                          attrs: {
                            href:
                              "/app/attachments?type=complaint&id=" + item.id,
                            target: "_blank",
                          },
                        },
                        [
                          _c("v-btn", { attrs: { small: "", dark: "" } }, [
                            _vm._v("Download File"),
                          ]),
                        ],
                        1
                      ),
                    ]
                  },
                },
                {
                  key: "item.comp_action_file",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "a",
                        {
                          attrs: {
                            href:
                              "/app/attachments?type=complaintaction&id=" +
                              item.id,
                            target: "_blank",
                          },
                        },
                        [
                          _c("v-btn", { attrs: { small: "", dark: "" } }, [
                            _vm._v("Download File"),
                          ]),
                        ],
                        1
                      ),
                    ]
                  },
                },
                {
                  key: "item.actions",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.editComplaint(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-pencil\n                    "
                          ),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.deleteComplaint(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-delete\n                    "
                          ),
                        ]
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
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a&":
/*!*************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/hazwaste_tab.vue?vue&type=template&id=7ff7c48a& ***!
  \*************************************************************************************************************************************************************************************************************************************/
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
    "v-card",
    { staticClass: "p-4", attrs: { elevation: "0" } },
    [
      _c("div", { staticClass: "grid grid-cols-5 gap-y-0 gap-x-4 ml-8" }, [
        _c(
          "div",
          { attrs: { hidden: "" } },
          [
            _c("v-text-field", {
              attrs: { label: "Hazwaste Id", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_id,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_id", $$v)
                },
                expression: "form_hazwaste_info.haz_id",
              },
            }),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Hazwaste Type", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_type,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_type", $$v)
                },
                expression: "form_hazwaste_info.haz_type",
              },
            }),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Hazwaste Number", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_number,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_number", $$v)
                },
                expression: "form_hazwaste_info.haz_number",
              },
            }),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Date Acceptance", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_date_acceptance,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_date_acceptance", $$v)
                },
                expression: "form_hazwaste_info.haz_date_acceptance",
              },
            }),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Date Issuance", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_date_issuance,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_date_issuance", $$v)
                },
                expression: "form_hazwaste_info.haz_date_issuance",
              },
            }),
          ],
          1
        ),
        _vm._v(" "),
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Date Expiry", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_date_expiry,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_date_expiry", $$v)
                },
                expression: "form_hazwaste_info.haz_date_expiry",
              },
            }),
          ],
          1
        ),
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "grid grid-cols-1 gap-y-0 gap-x-4 ml-8" }, [
        _c(
          "div",
          [
            _c("v-text-field", {
              attrs: { label: "Hazwaste File", clearable: "" },
              model: {
                value: _vm.form_hazwaste_info.haz_file,
                callback: function ($$v) {
                  _vm.$set(_vm.form_hazwaste_info, "haz_file", $$v)
                },
                expression: "form_hazwaste_info.haz_file",
              },
            }),
          ],
          1
        ),
      ]),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "text-center" },
        [
          _c(
            "v-btn",
            { attrs: { depressed: "", color: "primary", type: "submit" } },
            [_vm._v("\n            Submit\n        ")]
          ),
        ],
        1
      ),
      _vm._v(" "),
      [
        _c(
          "v-card",
          { staticClass: "mt-5", attrs: { elevation: "2" } },
          [
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                dense: "",
                headers: _vm.headers,
                items: _vm.hazwaste_table,
                "item-key": "hazwaste_tables",
              },
              scopedSlots: _vm._u([
                {
                  key: "item.actions",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.editHazwaste(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-pencil\n                    "
                          ),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.deleteHazwaste(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-delete\n                    "
                          ),
                        ]
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
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8&":
/*!**********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/legal_tab.vue?vue&type=template&id=ccec45f8& ***!
  \**********************************************************************************************************************************************************************************************************************************/
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
    "v-card",
    { staticClass: "p-4", attrs: { elevation: "0" } },
    [
      _vm.addFileForm
        ? _c("div", [
            _c(
              "div",
              { staticClass: "grid grid-cols-4 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  { attrs: { hidden: "" } },
                  [
                    _c("v-text-field", {
                      attrs: { label: "NOV Id", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_id,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_id", $$v)
                        },
                        expression: "form_legal_info.nov_id",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "select_legal_laws",
                        name: "Select Law/s",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-select", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    items: _vm.laws,
                                    label: "Select Law/s",
                                    multiple: "",
                                    hint: "Select Law/s",
                                    "persistent-hint": "",
                                  },
                                  model: {
                                    value: _vm.form_legal_info.nov_law,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_legal_info,
                                        "nov_law",
                                        $$v
                                      )
                                    },
                                    expression: "form_legal_info.nov_law",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1245338709
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "nov_date",
                        name: "Nov Data",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    type: "date",
                                    label: "NOV Date",
                                    required: "",
                                  },
                                  model: {
                                    value: _vm.form_legal_info.nov_date,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_legal_info,
                                        "nov_date",
                                        $$v
                                      )
                                    },
                                    expression: "form_legal_info.nov_date",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1378031734
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { type: "date", label: "TC Date", required: "" },
                      model: {
                        value: _vm.form_legal_info.nov_tc_date,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_tc_date", $$v)
                        },
                        expression: "form_legal_info.nov_tc_date",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-autocomplete", {
                      attrs: {
                        items: _vm.legal_tc_status_selection,
                        label: "TC Status",
                        "item-text": "tc_status_selection",
                        "item-value": "tc_status_selection",
                        clearable: "",
                      },
                      model: {
                        value: _vm.form_legal_info.nov_tc_status,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_tc_status", $$v)
                        },
                        expression: "form_legal_info.nov_tc_status",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "grid grid-cols-1 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Description", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_desc,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_desc", $$v)
                        },
                        expression: "form_legal_info.nov_desc",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "grid grid-cols-4 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Order Number", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_order_number,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_order_number", $$v)
                        },
                        expression: "form_legal_info.nov_order_number",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Order Amount", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_order_amt,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_order_amt", $$v)
                        },
                        expression: "form_legal_info.nov_order_amt",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: {
                        type: "date",
                        label: "Order Date Issuance",
                        required: "",
                      },
                      model: {
                        value: _vm.form_legal_info.nov_order_date_issuance,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_legal_info,
                            "nov_order_date_issuance",
                            $$v
                          )
                        },
                        expression: "form_legal_info.nov_order_date_issuance",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: {
                        type: "date",
                        label: "Order Date Settlement",
                        required: "",
                      },
                      model: {
                        value: _vm.form_legal_info.nov_order_date_settlement,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_legal_info,
                            "nov_order_date_settlement",
                            $$v
                          )
                        },
                        expression: "form_legal_info.nov_order_date_settlement",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Order Official Receipt", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_official_receipt_number,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_legal_info,
                            "nov_official_receipt_number",
                            $$v
                          )
                        },
                        expression:
                          "form_legal_info.nov_official_receipt_number",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "compliance_status",
                        name: "Compliance Status",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-autocomplete", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    items:
                                      _vm.legal_compliance_status_selection,
                                    label: "Compliance Status",
                                    "item-text": "compliance_status_selection",
                                    "item-value": "compliance_status_selection",
                                    clearable: "",
                                  },
                                  model: {
                                    value:
                                      _vm.form_legal_info.nov_compliance_status,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_legal_info,
                                        "nov_compliance_status",
                                        $$v
                                      )
                                    },
                                    expression:
                                      "form_legal_info.nov_compliance_status",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        2886275615
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-span-2" },
                  [
                    _c("v-text-field", {
                      attrs: { label: "Order Remarks", clearable: "" },
                      model: {
                        value: _vm.form_legal_info.nov_order_remarks,
                        callback: function ($$v) {
                          _vm.$set(
                            _vm.form_legal_info,
                            "nov_order_remarks",
                            $$v
                          )
                        },
                        expression: "form_legal_info.nov_order_remarks",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "grid grid-cols-1 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  [
                    _c("v-file-input", {
                      attrs: {
                        accept: "application/pdf",
                        "show-size": "",
                        counter: "",
                        multiple: "",
                        label: "Attachments",
                      },
                      model: {
                        value: _vm.form_legal_info.nov_file,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_legal_info, "nov_file", $$v)
                        },
                        expression: "form_legal_info.nov_file",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center" },
              [
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "primary", type: "submit" },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-content-save ")]
                    ),
                    _vm._v("\n                Submit\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "warning", type: "button" },
                    on: { click: _vm.resetLegal },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-autorenew ")]
                    ),
                    _vm._v("\n                Reset\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "error", type: "button" },
                    on: { click: _vm.closeFile },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-plus-circle ")]
                    ),
                    _vm._v("\n                Close\n            "),
                  ],
                  1
                ),
              ],
              1
            ),
          ])
        : _vm._e(),
      _vm._v(" "),
      !_vm.addFileForm
        ? _c(
            "v-btn",
            {
              attrs: { depressed: "", color: "success", type: "button" },
              on: { click: _vm.addFile },
            },
            [
              _c("v-icon", { staticClass: "mr-2", attrs: { small: "" } }, [
                _vm._v(" mdi-plus-circle "),
              ]),
              _vm._v("\n        Add File\n    "),
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      [
        _c(
          "v-card",
          { staticClass: "mt-5", attrs: { elevation: "2" } },
          [
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                dense: "",
                headers: _vm.headers,
                items: _vm.legal_table,
                "item-key": "legal_tables",
              },
              scopedSlots: _vm._u([
                {
                  key: "item.nov_file",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "a",
                        {
                          attrs: {
                            href: "/app/attachments?type=legal&id=" + item.id,
                            target: "_blank",
                          },
                        },
                        [
                          _c("v-btn", { attrs: { small: "", dark: "" } }, [
                            _vm._v("Download File"),
                          ]),
                        ],
                        1
                      ),
                    ]
                  },
                },
                {
                  key: "item.actions",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.editLegal(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-pencil\n                    "
                          ),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.deleteLegal(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-delete\n                    "
                          ),
                        ]
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
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/main_tab.vue?vue&type=template&id=6bb2f6aa& ***!
  \*********************************************************************************************************************************************************************************************************************************/
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
    "v-form",
    {
      on: {
        submit: function ($event) {
          $event.preventDefault()
          return _vm.submit_basic_info.apply(null, arguments)
        },
      },
    },
    [
      _c("div", { staticClass: "grid grid-cols-1 gap-4 mt-5 mb-5" }, [
        _vm.ctr_file
          ? _c(
              "div",
              { staticClass: "grid grid-cols-6 gap-y-3 gap-x-3 mb-2" },
              [
                _c(
                  "div",
                  {
                    staticClass: "grid grid-cols-1 col-span-2 gap-y-2 gap-x-2",
                  },
                  [
                    _c("MiniDashboard", {
                      attrs: {
                        dashboard_header_label: "Permits: ",
                        dashboard_header: _vm.ctr_file["permit"].header,
                        dashboard_content_label:
                          _vm.ctr_file["permit"].content_label,
                        dashboard_content: _vm.ctr_file["permit"].content,
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c("MiniDashboard", {
                  attrs: {
                    dashboard_header_label: "NOV's: ",
                    dashboard_header: _vm.ctr_file["nov"].header,
                    dashboard_content_label: _vm.ctr_file["nov"].content_label,
                    dashboard_content: _vm.ctr_file["nov"].content,
                  },
                }),
                _vm._v(" "),
                _c("MiniDashboard", {
                  attrs: {
                    dashboard_header_label: "Monitoring: ",
                    dashboard_header: _vm.ctr_file["monitoring"].header,
                    dashboard_content_label:
                      _vm.ctr_file["monitoring"].content_label,
                    dashboard_content: _vm.ctr_file["monitoring"].content,
                  },
                }),
                _vm._v(" "),
                _c("MiniDashboard", {
                  attrs: {
                    dashboard_header_label: "PCO",
                    dashboard_header: _vm.ctr_file["pco"].header,
                    dashboard_content_label: _vm.ctr_file["pco"].content_label,
                    dashboard_content: _vm.ctr_file["pco"].content,
                  },
                }),
                _vm._v(" "),
                _c("MiniDashboard", {
                  attrs: {
                    dashboard_header_label: "Complaint",
                    dashboard_header: _vm.ctr_file["complaint"].header,
                    dashboard_content_label:
                      _vm.ctr_file["complaint"].content_label,
                    dashboard_content: _vm.ctr_file["complaint"].content,
                  },
                }),
              ],
              1
            )
          : _vm._e(),
      ]),
      _vm._v(" "),
      _c(
        "div",
        [
          _c(
            "v-card",
            [
              [
                _c(
                  "v-card",
                  [
                    _c(
                      "v-toolbar",
                      { attrs: { flat: "", color: "primary", dark: "" } },
                      [_c("v-toolbar-title", [_vm._v("Firm Information")])],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-tabs",
                      { attrs: { vertical: "" } },
                      [
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [_vm._v("mdi-information")]),
                              _vm._v(
                                " \n                Basic Information\n              "
                              ),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [
                                _vm._v("mdi-file-document-multiple-outline"),
                              ]),
                              _vm._v(
                                " \n                Permit\n              "
                              ),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [
                                _vm._v("mdi-file-document-multiple-outline"),
                              ]),
                              _vm._v(
                                " \n                Monitoring\n              "
                              ),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [
                                _vm._v("mdi-file-document-multiple-outline"),
                              ]),
                              _vm._v(
                                " \n                Legal\n              "
                              ),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [
                                _vm._v("mdi-file-document-multiple-outline"),
                              ]),
                              _vm._v(" \n                PCO\n              "),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c("v-tab", [
                          _c(
                            "div",
                            { staticClass: "flex flex-start text-left" },
                            [
                              _c("v-icon", [
                                _vm._v("mdi-file-document-multiple-outline"),
                              ]),
                              _vm._v(
                                " \n                Complaint\n              "
                              ),
                            ],
                            1
                          ),
                        ]),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("BasicTab", {
                              attrs: {
                                form_basic_info: _vm.form_basic_info,
                                province_list: _vm.province_list,
                                municipality_list: _vm.municipality_list,
                                barangay_list: _vm.barangay_list,
                                psic_group_list: _vm.psic_group_list,
                                psic_class_list: _vm.psic_class_list,
                                psic_subclass_list: _vm.psic_subclass_list,
                                project_type_list: _vm.project_type_list,
                                project_subtype_list: _vm.project_subtype_list,
                                project_specific_type_list:
                                  _vm.project_specific_type_list,
                                project_specific_subtype_list:
                                  _vm.project_specific_subtype_list,
                              },
                            }),
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("PermitTab", {
                              attrs: {
                                form_permit_info: _vm.form_permit_info,
                                permit_table: _vm.permit_table,
                              },
                            }),
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("MonitoringTab", {
                              attrs: {
                                laws: _vm.laws,
                                form_monitoring_info: _vm.form_monitoring_info,
                                monitoring_table: _vm.monitoring_table,
                              },
                            }),
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("LegalTab", {
                              attrs: {
                                laws: _vm.laws,
                                form_legal_info: _vm.form_legal_info,
                                legal_table: _vm.legal_table,
                              },
                            }),
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("PcoTab", {
                              attrs: {
                                form_pco_info: _vm.form_pco_info,
                                pco_table: _vm.pco_table,
                              },
                            }),
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "v-tab-item",
                          [
                            _c("ComplaintTab", {
                              attrs: {
                                form_complaint_info: _vm.form_complaint_info,
                                complaint_table: _vm.complaint_table,
                              },
                            }),
                          ],
                          1
                        ),
                      ],
                      1
                    ),
                  ],
                  1
                ),
              ],
            ],
            2
          ),
        ],
        1
      ),
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b&":
/*!***********************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/mini_dashboard/mini_dashboard_card.vue?vue&type=template&id=05b2953b& ***!
  \***********************************************************************************************************************************************************************************************************************************************************/
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
            "v-icon",
            { staticClass: "float-left mt-1", attrs: { dark: "" } },
            [_vm._v(" mdi-folder")]
          ),
          _vm._v(" " + _vm._s(_vm.dashboard_header_label)),
          _c("b", { staticClass: "text-2xl" }, [
            _vm._v(_vm._s(_vm.dashboard_header)),
          ]),
        ],
        1
      ),
      _vm._v(" "),
      _c("div", { staticClass: "text-lg p-4" }, [
        _vm.dashboard_header_label === "Permits: "
          ? _c("div", [
              _c(
                "div",
                { staticClass: "text-xl text-center grid grid-cols-2" },
                [
                  _vm._l(_vm.dashboard_content, function (item, index) {
                    return index <= 3
                      ? _c("div", { key: index }, [
                          _vm._v(
                            "\n                    " +
                              _vm._s(_vm.dashboard_content_label[index])
                          ),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.dashboard_content[index])),
                          ]),
                        ])
                      : _vm._e()
                  }),
                  _vm._v(" "),
                  _vm._l(_vm.dashboard_content, function (item, index) {
                    return index >= 4
                      ? _c("div", { key: index }, [
                          _c("hr"),
                          _vm._v(
                            "\n                    " +
                              _vm._s(_vm.dashboard_content_label[index])
                          ),
                          _c("b", { staticClass: "text-2xl" }, [
                            _vm._v(_vm._s(_vm.dashboard_content[index])),
                          ]),
                        ])
                      : _vm._e()
                  }),
                ],
                2
              ),
            ])
          : _c(
              "div",
              _vm._l(_vm.dashboard_content, function (item, index) {
                return _c(
                  "div",
                  {
                    key: index,
                    staticClass: "text-xl text-center grid grid-cols-1",
                  },
                  [
                    _c("div", [
                      _vm._v(_vm._s(_vm.dashboard_content_label[index])),
                      _c("b", { staticClass: "text-2xl" }, [
                        _vm._v(_vm._s(_vm.dashboard_content[index])),
                      ]),
                    ]),
                  ]
                )
              }),
              0
            ),
      ]),
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9&":
/*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/monitoring_tab.vue?vue&type=template&id=790ea7f9& ***!
  \***************************************************************************************************************************************************************************************************************************************/
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
    "v-card",
    { staticClass: "p-4", attrs: { elevation: "0" } },
    [
      _vm.addFileForm
        ? _c("div", [
            _c(
              "div",
              { staticClass: "grid grid-cols-5 gap-y-0 gap-x-5 ml-8" },
              [
                _c(
                  "div",
                  { attrs: { hidden: "" } },
                  [
                    _c("v-text-field", {
                      attrs: { label: "Monitoring Id", clearable: "" },
                      model: {
                        value: _vm.form_monitoring_info.mon_id,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_monitoring_info, "mon_id", $$v)
                        },
                        expression: "form_monitoring_info.mon_id",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "select_mon_laws",
                        name: "Select Law/s",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-select", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    items: _vm.laws,
                                    label: "Select Law/s",
                                    multiple: "",
                                    hint: "Select Law/s",
                                    "persistent-hint": "",
                                  },
                                  model: {
                                    value: _vm.form_monitoring_info.mon_law,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_monitoring_info,
                                        "mon_law",
                                        $$v
                                      )
                                    },
                                    expression: "form_monitoring_info.mon_law",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        2770830561
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "date_mon",
                        name: "Date Monitored",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    type: "date",
                                    color: "purple darken-2",
                                    label: "Date Monitored",
                                    required: "",
                                  },
                                  model: {
                                    value:
                                      _vm.form_monitoring_info
                                        .mon_date_monitored,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_monitoring_info,
                                        "mon_date_monitored",
                                        $$v
                                      )
                                    },
                                    expression:
                                      "form_monitoring_info.mon_date_monitored",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        3803236551
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "mon_sur",
                        name: "Monitoring/Survey",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-autocomplete", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    items: _vm.mon_or_sur_selection,
                                    label: "Monitoring/Survey",
                                    clearable: "",
                                  },
                                  model: {
                                    value:
                                      _vm.form_monitoring_info.mon_or_survey,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_monitoring_info,
                                        "mon_or_survey",
                                        $$v
                                      )
                                    },
                                    expression:
                                      "form_monitoring_info.mon_or_survey",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1771508428
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-text-field", {
                      attrs: { label: "Monitoring Type", clearable: "" },
                      model: {
                        value: _vm.form_monitoring_info.mon_type,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_monitoring_info, "mon_type", $$v)
                        },
                        expression: "form_monitoring_info.mon_type",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("v-file-input", {
                      attrs: {
                        accept: "application/pdf",
                        "show-size": "",
                        counter: "",
                        multiple: "",
                        label: "Monitoring File",
                      },
                      model: {
                        value: _vm.form_monitoring_info.mon_file,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_monitoring_info, "mon_file", $$v)
                        },
                        expression: "form_monitoring_info.mon_file",
                      },
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center" },
              [
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "primary", type: "submit" },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-content-save ")]
                    ),
                    _vm._v("\n                Submit\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "warning", type: "button" },
                    on: { click: _vm.resetMonitoring },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-autorenew ")]
                    ),
                    _vm._v("\n                Reset\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "error", type: "button" },
                    on: { click: _vm.closeFile },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-plus-circle ")]
                    ),
                    _vm._v("\n                Close\n            "),
                  ],
                  1
                ),
              ],
              1
            ),
          ])
        : _vm._e(),
      _vm._v(" "),
      !_vm.addFileForm
        ? _c(
            "v-btn",
            {
              attrs: { depressed: "", color: "success", type: "button" },
              on: { click: _vm.addFile },
            },
            [
              _c("v-icon", { staticClass: "mr-2", attrs: { small: "" } }, [
                _vm._v(" mdi-plus-circle "),
              ]),
              _vm._v("\n        Add File\n    "),
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      [
        _c(
          "v-card",
          { staticClass: "mt-5", attrs: { elevation: "2" } },
          [
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                dense: "",
                headers: _vm.headers,
                items: _vm.monitoring_table,
                "item-key": "monitoring_tables",
              },
              scopedSlots: _vm._u([
                {
                  key: "item.mon_file",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "a",
                        {
                          attrs: {
                            href:
                              "/app/attachments?type=monitoring&id=" + item.id,
                            target: "_blank",
                          },
                        },
                        [
                          _c("v-btn", { attrs: { small: "", dark: "" } }, [
                            _vm._v("Download File"),
                          ]),
                        ],
                        1
                      ),
                    ]
                  },
                },
                {
                  key: "item.actions",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.editMonitoring(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-pencil\n                    "
                          ),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.deleteMonitoring(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-delete\n                    "
                          ),
                        ]
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
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/pco_tab.vue?vue&type=template&id=2c8a2932& ***!
  \********************************************************************************************************************************************************************************************************************************/
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
    "v-card",
    { staticClass: "p-4", attrs: { elevation: "0" } },
    [
      _vm.addFileForm
        ? _c("div", [
            _c(
              "div",
              { staticClass: "grid grid-cols-4 gap-y-0 gap-x-4 ml-8" },
              [
                _c(
                  "div",
                  { attrs: { hidden: "" } },
                  [
                    _c("v-text-field", {
                      attrs: { label: "Pco Id", clearable: "" },
                      model: {
                        value: _vm.form_pco_info.pco_id,
                        callback: function ($$v) {
                          _vm.$set(_vm.form_pco_info, "pco_id", $$v)
                        },
                        expression: "form_pco_info.pco_id",
                      },
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_name",
                        name: "PCO Name",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Name",
                                    clearable: "",
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_name,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_name",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_name",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        2642792755
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_no",
                        name: "PCO No",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Pco no.",
                                    clearable: "",
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_number,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_number",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_number",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1126792675
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_email",
                        name: "PCO Email",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Email",
                                    clearable: "",
                                    type: "email",
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_email,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_email",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_email",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        3928290321
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_contact",
                        name: "PCO Contact No",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    "error-messages": errors[0],
                                    label: "Contact no.",
                                    clearable: "",
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_contact,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_contact",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_contact",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        2854798332
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_start",
                        name: "Date Start",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    type: "date",
                                    label: "Date Start",
                                    required: "",
                                    "error-messages": errors[0],
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_start_date,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_start_date",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_start_date",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1244628428
                      ),
                    }),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "div",
                  [
                    _c("ValidationProvider", {
                      attrs: {
                        vid: "pco_end",
                        name: "PCO Date End",
                        rules: "required",
                      },
                      scopedSlots: _vm._u(
                        [
                          {
                            key: "default",
                            fn: function (ref) {
                              var errors = ref.errors
                              return [
                                _c("v-text-field", {
                                  attrs: {
                                    type: "date",
                                    label: "Date End",
                                    required: "",
                                    "error-messages": errors[0],
                                  },
                                  model: {
                                    value: _vm.form_pco_info.pco_end_date,
                                    callback: function ($$v) {
                                      _vm.$set(
                                        _vm.form_pco_info,
                                        "pco_end_date",
                                        $$v
                                      )
                                    },
                                    expression: "form_pco_info.pco_end_date",
                                  },
                                }),
                              ]
                            },
                          },
                        ],
                        null,
                        false,
                        1221967180
                      ),
                    }),
                  ],
                  1
                ),
              ]
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "text-center" },
              [
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "primary", type: "submit" },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-content-save ")]
                    ),
                    _vm._v("\n                Submit\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "warning", type: "button" },
                    on: { click: _vm.resetPco },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-autorenew ")]
                    ),
                    _vm._v("\n                Reset\n            "),
                  ],
                  1
                ),
                _vm._v(" "),
                _c(
                  "v-btn",
                  {
                    attrs: { depressed: "", color: "error", type: "button" },
                    on: { click: _vm.closeFile },
                  },
                  [
                    _c(
                      "v-icon",
                      { staticClass: "mr-2", attrs: { small: "" } },
                      [_vm._v(" mdi-plus-circle ")]
                    ),
                    _vm._v("\n                Close\n            "),
                  ],
                  1
                ),
              ],
              1
            ),
          ])
        : _vm._e(),
      _vm._v(" "),
      !_vm.addFileForm
        ? _c(
            "v-btn",
            {
              attrs: { depressed: "", color: "success", type: "button" },
              on: { click: _vm.addFile },
            },
            [
              _c("v-icon", { staticClass: "mr-2", attrs: { small: "" } }, [
                _vm._v(" mdi-plus-circle "),
              ]),
              _vm._v("\n        Add File\n    "),
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      [
        _c(
          "v-card",
          { staticClass: "mt-5", attrs: { elevation: "2" } },
          [
            _c("v-data-table", {
              staticClass: "elevation-1",
              attrs: {
                dense: "",
                headers: _vm.headers,
                items: _vm.pco_table,
                "item-key": "pco_tables",
              },
              scopedSlots: _vm._u([
                {
                  key: "item.actions",
                  fn: function (ref) {
                    var item = ref.item
                    return [
                      _c(
                        "v-icon",
                        {
                          staticClass: "mr-2",
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.editPco(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-pencil\n                    "
                          ),
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "v-icon",
                        {
                          attrs: { small: "" },
                          on: {
                            click: function ($event) {
                              return _vm.deletePco(item)
                            },
                          },
                        },
                        [
                          _vm._v(
                            "\n                        mdi-delete\n                    "
                          ),
                        ]
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
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c&":
/*!***********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/src/pages/universe/tabs/permit_tab.vue?vue&type=template&id=23e91e4c& ***!
  \***********************************************************************************************************************************************************************************************************************************/
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
        "v-card",
        { staticClass: "p-4", attrs: { elevation: "0" } },
        [
          _vm.addFileForm
            ? _c("div", [
                _c(
                  "div",
                  { staticClass: "grid grid-cols-5 gap-y-0 gap-x-4 ml-8" },
                  [
                    _c(
                      "div",
                      { attrs: { hidden: "" } },
                      [
                        _c("v-text-field", {
                          attrs: { label: "Permit Id", clearable: "" },
                          model: {
                            value: _vm.form_permit_info.perm_id,
                            callback: function ($$v) {
                              _vm.$set(_vm.form_permit_info, "perm_id", $$v)
                            },
                            expression: "form_permit_info.perm_id",
                          },
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      [
                        _c("ValidationProvider", {
                          attrs: { vid: "law", name: "Law", rules: "required" },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function (ref) {
                                  var errors = ref.errors
                                  return [
                                    _c("v-autocomplete", {
                                      attrs: {
                                        items: _vm.permit_law_selection,
                                        label: "Law",
                                        "item-text": "law_selection",
                                        "item-value": "law_selection",
                                        clearable: "",
                                        "error-messages": errors[0],
                                      },
                                      model: {
                                        value: _vm.form_permit_info.perm_law,
                                        callback: function ($$v) {
                                          _vm.$set(
                                            _vm.form_permit_info,
                                            "perm_law",
                                            $$v
                                          )
                                        },
                                        expression: "form_permit_info.perm_law",
                                      },
                                    }),
                                  ]
                                },
                              },
                            ],
                            null,
                            false,
                            3601820785
                          ),
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      [
                        _c("ValidationProvider", {
                          attrs: {
                            vid: "permit_no",
                            name: "Permit No",
                            rules: "required",
                          },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function (ref) {
                                  var errors = ref.errors
                                  return [
                                    _c("v-text-field", {
                                      attrs: {
                                        "error-messages": errors[0],
                                        label: "Permit No.",
                                        clearable: "",
                                      },
                                      model: {
                                        value: _vm.form_permit_info.perm_number,
                                        callback: function ($$v) {
                                          _vm.$set(
                                            _vm.form_permit_info,
                                            "perm_number",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "form_permit_info.perm_number",
                                      },
                                    }),
                                  ]
                                },
                              },
                            ],
                            null,
                            false,
                            2455095637
                          ),
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      [
                        _c("ValidationProvider", {
                          attrs: {
                            vid: "permit_status",
                            name: "Permit status",
                            rules: "required",
                          },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function (ref) {
                                  var errors = ref.errors
                                  return [
                                    _c("v-autocomplete", {
                                      attrs: {
                                        "error-messages": errors[0],
                                        items: _vm.permit_status_selection,
                                        label: "Permit Status",
                                        "item-text": "status_selection",
                                        "item-value": "status_selection",
                                        clearable: "",
                                      },
                                      model: {
                                        value: _vm.form_permit_info.perm_status,
                                        callback: function ($$v) {
                                          _vm.$set(
                                            _vm.form_permit_info,
                                            "perm_status",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "form_permit_info.perm_status",
                                      },
                                    }),
                                  ]
                                },
                              },
                            ],
                            null,
                            false,
                            3946773928
                          ),
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      [
                        _c("ValidationProvider", {
                          attrs: {
                            vid: "date_issuance",
                            name: "Date Issuance",
                            rules: "required",
                          },
                          scopedSlots: _vm._u(
                            [
                              {
                                key: "default",
                                fn: function (ref) {
                                  var errors = ref.errors
                                  return [
                                    _c("v-text-field", {
                                      attrs: {
                                        "error-messages": errors[0],
                                        type: "date",
                                        color: "purple darken-2",
                                        label: "Date Issuance",
                                        required: "",
                                      },
                                      model: {
                                        value:
                                          _vm.form_permit_info
                                            .perm_date_issuance,
                                        callback: function ($$v) {
                                          _vm.$set(
                                            _vm.form_permit_info,
                                            "perm_date_issuance",
                                            $$v
                                          )
                                        },
                                        expression:
                                          "form_permit_info.perm_date_issuance",
                                      },
                                    }),
                                  ]
                                },
                              },
                            ],
                            null,
                            false,
                            795223868
                          ),
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      [
                        _c("v-text-field", {
                          attrs: {
                            type: "date",
                            color: "purple darken-2",
                            label: "Date Expiry",
                            required: "",
                          },
                          model: {
                            value: _vm.form_permit_info.perm_date_expiry,
                            callback: function ($$v) {
                              _vm.$set(
                                _vm.form_permit_info,
                                "perm_date_expiry",
                                $$v
                              )
                            },
                            expression: "form_permit_info.perm_date_expiry",
                          },
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _vm.form_permit_info.perm_law === "RA 6969"
                      ? _c(
                          "div",
                          [
                            _c("v-autocomplete", {
                              attrs: {
                                items: _vm.permit_hazwaste_selection,
                                label: "Hazwaste Type",
                                "item-text": "hazwaste_selection",
                                "item-value": "hazwaste_selection",
                                clearable: "",
                              },
                              model: {
                                value: _vm.form_permit_info.perm_hazwaste_type,
                                callback: function ($$v) {
                                  _vm.$set(
                                    _vm.form_permit_info,
                                    "perm_hazwaste_type",
                                    $$v
                                  )
                                },
                                expression:
                                  "form_permit_info.perm_hazwaste_type",
                              },
                            }),
                          ],
                          1
                        )
                      : _vm._e(),
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "grid grid-cols-2 gap-y-0 gap-x-4 ml-8" },
                  [
                    _c(
                      "div",
                      [
                        _c("v-text-field", {
                          attrs: { label: "Permit Description", clearable: "" },
                          model: {
                            value: _vm.form_permit_info.perm_description,
                            callback: function ($$v) {
                              _vm.$set(
                                _vm.form_permit_info,
                                "perm_description",
                                $$v
                              )
                            },
                            expression: "form_permit_info.perm_description",
                          },
                        }),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "pt-2" },
                      [
                        _c("v-file-input", {
                          attrs: {
                            accept: "application/pdf",
                            "show-size": "",
                            counter: "",
                            multiple: "",
                            label: "Permit File Upload",
                          },
                          model: {
                            value: _vm.form_permit_info.perm_file,
                            callback: function ($$v) {
                              _vm.$set(_vm.form_permit_info, "perm_file", $$v)
                            },
                            expression: "form_permit_info.perm_file",
                          },
                        }),
                      ],
                      1
                    ),
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "text-center" },
                  [
                    _c(
                      "v-btn",
                      {
                        attrs: {
                          depressed: "",
                          color: "primary",
                          type: "submit",
                        },
                      },
                      [
                        _c(
                          "v-icon",
                          { staticClass: "mr-2", attrs: { small: "" } },
                          [_vm._v(" mdi-content-save ")]
                        ),
                        _vm._v(
                          "\n                    Submit\n                "
                        ),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: {
                          depressed: "",
                          color: "warning",
                          type: "button",
                        },
                        on: { click: _vm.resetPermit },
                      },
                      [
                        _c(
                          "v-icon",
                          { staticClass: "mr-2", attrs: { small: "" } },
                          [_vm._v(" mdi-autorenew ")]
                        ),
                        _vm._v("\n                    Reset\n                "),
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "v-btn",
                      {
                        attrs: {
                          depressed: "",
                          color: "error",
                          type: "button",
                        },
                        on: { click: _vm.closeFile },
                      },
                      [
                        _c(
                          "v-icon",
                          { staticClass: "mr-2", attrs: { small: "" } },
                          [_vm._v(" mdi-plus-circle ")]
                        ),
                        _vm._v("\n                    Close\n                "),
                      ],
                      1
                    ),
                  ],
                  1
                ),
              ])
            : _vm._e(),
          _vm._v(" "),
          !_vm.addFileForm
            ? _c(
                "v-btn",
                {
                  attrs: { depressed: "", color: "success", type: "button" },
                  on: { click: _vm.addFile },
                },
                [
                  _c("v-icon", { staticClass: "mr-2", attrs: { small: "" } }, [
                    _vm._v(" mdi-plus-circle "),
                  ]),
                  _vm._v("\n            Add File\n        "),
                ],
                1
              )
            : _vm._e(),
          _vm._v(" "),
          [
            _c(
              "v-card",
              { staticClass: "mt-5", attrs: { elevation: "2" } },
              [
                _c("v-data-table", {
                  staticClass: "elevation-1",
                  attrs: {
                    dense: "",
                    headers: _vm.headers,
                    items: _vm.permit_table,
                    "item-key": "permit_tables",
                  },
                  scopedSlots: _vm._u([
                    {
                      key: "item.perm_file",
                      fn: function (ref) {
                        var item = ref.item
                        return [
                          item.perm_file > 0
                            ? _c(
                                "a",
                                {
                                  attrs: {
                                    href:
                                      "/app/attachments?type=permits&id=" +
                                      item.id,
                                    target: "_blank",
                                  },
                                },
                                [
                                  _c(
                                    "v-btn",
                                    { attrs: { small: "", dark: "" } },
                                    [_vm._v("Download File")]
                                  ),
                                ],
                                1
                              )
                            : _c(
                                "div",
                                { staticClass: "text-xs font-bold italic" },
                                [
                                  _vm._v(
                                    "\n                            No Attachment Found\n                        "
                                  ),
                                ]
                              ),
                        ]
                      },
                    },
                    {
                      key: "item.actions",
                      fn: function (ref) {
                        var item = ref.item
                        return [
                          _c(
                            "v-icon",
                            {
                              staticClass: "mr-2",
                              attrs: { small: "" },
                              on: {
                                click: function ($event) {
                                  return _vm.editPermit(item)
                                },
                              },
                            },
                            [
                              _vm._v(
                                "\n                            mdi-pencil\n                        "
                              ),
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "v-icon",
                            {
                              attrs: { small: "" },
                              on: {
                                click: function ($event) {
                                  return _vm.deletePermit(item)
                                },
                              },
                            },
                            [
                              _vm._v(
                                "\n                            mdi-delete\n                        "
                              ),
                            ]
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
        ],
        2
      ),
      _vm._v(" "),
      _c("UploadDialog", {
        attrs: {
          modal: _vm.uploadDialog,
          close: function () {
            _vm.uploadDialog = false
          },
          submit: function () {},
        },
      }),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);