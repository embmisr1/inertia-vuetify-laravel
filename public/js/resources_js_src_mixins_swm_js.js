(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_src_mixins_swm_js"],{

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./resources/js/src/mixins/swm.js":
/*!****************************************!*\
  !*** ./resources/js/src/mixins/swm.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    query_closed_dumpsite_id: Number,
    lce_edit: Array,
    province_dropdown: Array,
    lce_info: Array,
    query_slf: Array,
    // slf table
    slf_edit: Array,
    query_mrf: Array,
    // mrf table
    mrf_edit: Array,
    cd_edit: Array,
    query_rca: Array,
    attachments: Object,
    query_ten_year: Array,
    ten_year_edit: Array,
    ten_year_monitoring_list: Array,
    ten_year_monitoring_edit: Array,
    ten_year_findings_array: Array,
    query_equipment: Array,
    query_dues: Array,
    dues_edit: Array,
    query_gad: Array,
    query_iec: Array,
    iec_edit: Array,
    query_section24: Array,
    section24_edit: Array
  },
  data: function data() {
    return {
      lce: {
        lce_title: "",
        lce_first_name: "",
        lce_middle_name: "",
        lce_last_name: "",
        lce_salutation: "",
        lce_position: "",
        lce_municipality_FK: "",
        lce_province_FK: "",
        lce_barangay_FK: "",
        lce_disctrict: "",
        lce_zip_code: "",
        lce_focal_person: "",
        lce_contact_number: "",
        lce_email_address: "",
        lce_file: []
      },
      slf: {
        slf_complete_address: null,
        slf_latitude: null,
        slf_longitude: null,
        slf_project_operator: null,
        slf_ecc_number: null,
        slf_contact_person: null,
        slf_contact_number: null,
        slf_category: null,
        slf_site_hectares: null,
        slf_total_capacity: null,
        slf_tons_per_day: null,
        slf_service_life: null,
        slf_remaining_service_life: null,
        slf_exceeded_capacity: null,
        slf_with_planned_extension: null,
        slf_lgu_served: null,
        slf_leachate_treatment: [],
        slf_daily_soil_cover: null,
        slf_presence_of_mrf: null,
        slf_separate_cells_for_hazwaste: null,
        slf_methane_recovery: null,
        slf_discharge_permit: null,
        slf_1586_compliance: null,
        slf_9275_compliance: null,
        slf_6969_compliance: null,
        slf_file: null,
        lce_FK: null
      },
      mrf: {
        mrf_complete_address: null,
        mrf_emb_funded: null,
        mrf_latitude: null,
        mrf_longitude: null,
        mrf_status_operation: null,
        mrf_service_area: null,
        mrf_total_waste_generation: null,
        mrf_biodegradable: null,
        mrf_recyclable: null,
        mrf_special_waste: null,
        mrf_total_waste_diverted: null,
        mrf_number_of_waste_diverted: null,
        mrf_file: null,
        mrf_residual: null,
        lce_FK: null
      },
      cd: {
        cd_total_land_area: null,
        cd_date_monitored: new Date(Date.now() - new Date().getTimezoneOffset() * 60000).toISOString().substr(0, 10),
        cd_site_clearing: null,
        cd_site_grading: null,
        cd_application_maintenance: null,
        cd_provision_drainage: null,
        cd_leachate_management: null,
        cd_gas_management: null,
        cd_fencing_security: null,
        cd_putting_sinages: null,
        cd_prohibition: null,
        cd_status: null,
        cd_remarks: null,
        cd_date_closure: null,
        lce_FK: null
      },
      ten_yr: {
        ten_year_planning_period: null,
        ten_year_year_approved: null,
        ten_year_number: null,
        ten_year_file: null,
        ten_year_copy_plan: null,
        ten_year_copy_resolution: null,
        ten_year_copy_form: null,
        lce_FK: null,
        finding_a: false,
        finding_b: false,
        finding_c: false,
        finding_d: false,
        finding_e: false,
        finding_f: false,
        finding_g: false,
        finding_h: false,
        finding_i: false,
        finding_j: false
      },
      ten_yr_mon: {
        ten_year_mon_status: null,
        ten_year_mon_date_monitored: null,
        ten_year_mon_date_submitted: null,
        ten_year_mon_iis_number: null,
        ten_year_mon_copy_report: null,
        ten_year_mon_by: null,
        ten_year_FK: null
      },
      dues: {
        dues_purpose: null,
        dues_amount_granted: null,
        dues_date_granted: null,
        dues_unliquidated: null,
        dues_remarks: null,
        dues_accountant: null,
        dues_contact_email: null,
        lce_FK: null
      },
      sec_24: {
        section24_iis_number: null,
        section24_catered_barangay: null,
        section24_collection_vehicle: null,
        section24_schedule_of_collection: [],
        section24_swm_personnel: null,
        section24_basis_1: false,
        section24_basis_2: false,
        section24_basis_3: false,
        section24_basis_4: false,
        section24_basis_5: false,
        section24_basis_6: false,
        section24_basis_7: false,
        section24_basis_8: false,
        section24_basis_9: false,
        section24_basis_10: false,
        section24_basis_11: false,
        section24_findings: null,
        section24_remarks: null,
        section24_with_letter: null
      },
      gad: {
        gad_male: null,
        gad_female: null
      },
      iec: {
        iec_topic: null,
        iec_speaker: null,
        iec_male: null,
        iec_female: null,
        iec_youth: null,
        iec_senior_citizen: null,
        iec_pwd: null,
        iec_lgbt: null,
        iec_pdl: null,
        iec_adult: null,
        iec_total: null,
        iec_iis_number: null,
        iec_file: null
      },
      complete_address: null,
      complete_address_setter: {
        prov: {},
        cityMun: {},
        brgy: {}
      },
      equipment: {
        equipment_description: ""
      },
      category: ["Category 1", "Category 2", "Category 3", "Category 4"],
      leachment_type: ["Recirculaation", "Chemical", "Biological"],
      status_of_operation: ["Operational", "Not Operational"],
      cd_status: ["Closed", "Rehabilitation", "Ongoing"],
      cityMun: [],
      brgy: [],
      equipment_modal: {
        active: false,
        type: "create"
      }
    };
  },
  computed: {
    avatar: function avatar() {
      return this.attachments.data[0];
    },
    withAttachment: function withAttachment() {
      var toReturn = true;

      if (this.attachments === undefined) {
        return toReturn = false;
      } else if (this.attachments.data.length === 0) {
        return toReturn = false;
      }

      return toReturn;
    },
    date_now: function date_now() {
      return new Date(Date.now() - new Date().getTimezoneOffset() * 60000).toISOString().substr(0, 10);
    },
    lce_id: function lce_id() {
      return this.lce_details.id;
    },
    lce_details: function lce_details() {
      return this.lce_edit[0];
    },
    lce_complete_name: function lce_complete_name() {
      var _this$lce_details = this.lce_details,
          lce_first_name = _this$lce_details.lce_first_name,
          lce_middle_name = _this$lce_details.lce_middle_name,
          lce_last_name = _this$lce_details.lce_last_name;
      return "".concat(lce_first_name ? lce_first_name : "", " ").concat(lce_middle_name ? lce_middle_name : "", " ").concat(lce_last_name ? lce_last_name : "");
    },
    lce_address: function lce_address() {
      var _this$lce_details2 = this.lce_details,
          provDesc = _this$lce_details2.provDesc,
          citymunDesc = _this$lce_details2.citymunDesc,
          lce_zip_code = _this$lce_details2.lce_zip_code,
          districtCode = _this$lce_details2.districtCode;
      return "".concat(citymunDesc, ", District No ").concat(districtCode ? districtCode : "", ", ").concat(provDesc, ", ").concat(lce_zip_code ? lce_zip_code : "", " ");
    },
    lce_prov_id: function lce_prov_id() {
      return this.lce.lce_province_FK;
    },
    lce_cityMun_id: function lce_cityMun_id() {
      return this.lce.lce_municipality_FK;
    },
    address_setter: function address_setter() {
      return _objectSpread({}, this.complete_address_setter);
    },
    prov_id: function prov_id() {
      return this.complete_address_setter.prov.PK_province_ID;
    },
    cityMun_id: function cityMun_id() {
      return this.complete_address_setter.cityMun.PK_citymun_ID;
    },
    slf_details: function slf_details() {
      return this.slf_info[0];
    }
  },
  watch: {
    lce_prov_id: function lce_prov_id(value) {
      if (value !== "" || value !== null) return this.search_cityMun(value);
    },
    lce_cityMun_id: function lce_cityMun_id(value) {
      if (value !== "" || value !== null) return this.search_brgy(value);
    },
    prov_id: function prov_id(value) {
      if (value !== "" || value !== null) return this.search_cityMun(value);
    },
    cityMun_id: function cityMun_id(value) {
      if (value !== "" || value !== null) return this.search_brgy(value);
    },
    address_setter: function address_setter(data) {
      var _prov$provDesc, _cityMun$citymunDesc, _brgy$brgyDesc;

      var prov = data.prov,
          cityMun = data.cityMun,
          brgy = data.brgy;
      this.complete_address = "".concat((_prov$provDesc = prov.provDesc) !== null && _prov$provDesc !== void 0 ? _prov$provDesc : "", ", ").concat((_cityMun$citymunDesc = cityMun.citymunDesc) !== null && _cityMun$citymunDesc !== void 0 ? _cityMun$citymunDesc : "", ", ").concat((_brgy$brgyDesc = brgy.brgyDesc) !== null && _brgy$brgyDesc !== void 0 ? _brgy$brgyDesc : "");
    }
  },
  methods: {
    export_swm: function export_swm() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var _yield$_this$exportab, value, label, _yield$axios$get, data, blob, fileURL, fileLink;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return _this.exportable;

              case 3:
                _yield$_this$exportab = _context.sent;
                value = _yield$_this$exportab.value;
                label = _yield$_this$exportab.label;
                _context.next = 8;
                return axios__WEBPACK_IMPORTED_MODULE_1___default().get("/app/swm/".concat(value), {
                  params: _objectSpread({}, _this.filter),
                  responseType: "blob"
                });

              case 8:
                _yield$axios$get = _context.sent;
                data = _yield$axios$get.data;
                blob = new Blob([data], {
                  // type: "text/csv",
                  typ: "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                });
                fileURL = window.URL.createObjectURL(blob);
                fileLink = document.createElement("a");
                fileLink.href = fileURL;
                fileLink.setAttribute("download", "".concat(value, ".xlsx")); // fileLink.setAttribute("download", "items.csv");

                document.body.appendChild(fileLink);
                fileLink.click(); // this.get(this.filterObject);

                _context.next = 22;
                break;

              case 19:
                _context.prev = 19;
                _context.t0 = _context["catch"](0);
                console.log(_context.t0);

              case 22:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[0, 19]]);
      }))();
    },
    search_cityMun: function search_cityMun(prov_id) {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var _yield$axios$get2, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _this2.loading = true;
                _context2.next = 4;
                return axios__WEBPACK_IMPORTED_MODULE_1___default().get("http://210.213.92.250/api/app/province_dropdown/".concat(prov_id));

              case 4:
                _yield$axios$get2 = _context2.sent;
                data = _yield$axios$get2.data;
                _this2.cityMun = data;
                _this2.loading = false;
                _context2.next = 15;
                break;

              case 10:
                _context2.prev = 10;
                _context2.t0 = _context2["catch"](0);
                _this2.loading = false;
                console.log("search_cityMun - error");

                _this2.error(_context2.t0.response.data.message);

              case 15:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, null, [[0, 10]]);
      }))();
    },
    search_brgy: function search_brgy(cityMun_id) {
      var _this3 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee3() {
        var _yield$axios$get3, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                _this3.loading = true;
                _context3.next = 4;
                return axios__WEBPACK_IMPORTED_MODULE_1___default().get("http://210.213.92.250/api/app/municipality_dropdown/".concat(cityMun_id));

              case 4:
                _yield$axios$get3 = _context3.sent;
                data = _yield$axios$get3.data;
                _this3.brgy = data;
                _this3.loading = false;
                _context3.next = 15;
                break;

              case 10:
                _context3.prev = 10;
                _context3.t0 = _context3["catch"](0);
                _this3.loading = false;
                console.log("search_brgy - error");

                _this3.error(_context3.t0.response.data.message);

              case 15:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, null, [[0, 10]]);
      }))();
    },
    goBack: function goBack() {
      window.history.back();
    },
    setEquipmentModal: function setEquipmentModal(active, type) {
      this.equipment_modal = {
        active: active,
        type: type
      };
    },
    setUpdateEquipment: function setUpdateEquipment(equip) {
      this.equipment = _objectSpread({}, equip);
      this.setEquipmentModal(true, "update");
    },
    submitEquimentForm: function submitEquimentForm() {
      var _this4 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee4() {
        var data, type;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.prev = 0;
                data = _objectSpread(_objectSpread({}, _this4.equipment), {}, {
                  lce_FK: _this4.lce_id
                });
                type = _this4.equipment_modal.type;
                _this4.loading = true;

                if (!(type === "create")) {
                  _context4.next = 9;
                  break;
                }

                _context4.next = 7;
                return _this4.$inertia.post("/app/swm/equipment_register_process", data);

              case 7:
                _context4.next = 12;
                break;

              case 9:
                if (!(type === "update")) {
                  _context4.next = 12;
                  break;
                }

                _context4.next = 12;
                return _this4.$inertia.post("/app/swm/equipment_update_process", data);

              case 12:
                // this.submitEquimentForm(false,"create")
                _this4.equipment_modal = {
                  active: false,
                  type: "create"
                };
                _this4.loading = false;
                _context4.next = 21;
                break;

              case 16:
                _context4.prev = 16;
                _context4.t0 = _context4["catch"](0);
                _this4.loading = false;

                _this4.error(_context4.t0.response.data.message);

                console.log(_context4.t0);

              case 21:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, null, [[0, 16]]);
      }))();
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


/***/ })

}]);