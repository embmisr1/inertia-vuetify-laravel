(self.webpackChunk=self.webpackChunk||[]).push([[1997],{7757:(t,e,r)=>{t.exports=r(5666)},1997:(t,e,r)=>{"use strict";r.r(e),r.d(e,{default:()=>u});var n=r(7757),o=r.n(n);function i(t,e,r,n,o,i,a){try{var c=t[i](a),_=c.value}catch(t){return void r(t)}c.done?e(_):Promise.resolve(_).then(n,o)}function a(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function c(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?a(Object(r),!0).forEach((function(e){_(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}function _(t,e,r){return e in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}const u={data:function(){return{laws:["PD 1586","RA 8749","RA 9275","RA 6969","RA 9003"],form_basic_info:c({id:"",un_crs_number:"",un_psic_group:"",un_psic_class:"",un_psic_subclass:"",un_firmname:"",un_proponent:"",un_project_type:"",un_project_subtype:"",un_project_specific_type:"",un_project_specific_subtype:"",un_detailed_description:"",un_specific_address:"",un_region:"",un_brgy:"",un_municipality:"",un_province:"",un_lat:"",un_long:"",un_representative_name:"",un_representative_designation:"",un_representative_gender:"",un_remarks:"",un_status:"",un_type:""},this.query),form_permit_info:{perm_id:"",perm_law:"",perm_hazwaste_type:"",perm_number:"",perm_date_issuance:"",perm_date_expiry:"",perm_file:[],perm_description:"",perm_status:"",addFileForm:!1},form_monitoring_info:{mon_id:"",mon_law:[],mon_date_monitored:"",mon_or_survey:"",mon_type:"",mon_file:[],addFileForm:!1},form_legal_info:{nov_id:"",nov_law:[],nov_desc:"",nov_date:"",nov_tc_date:"",nov_tc_status:"",nov_file:[],nov_order_number:"",nov_order_amt:"",nov_order_date_issuance:"",nov_order_date_settlement:"",nov_official_receipt_number:"",nov_compliance_status:"",nov_order_remarks:"",addFileForm:!1},form_hazwaste_info:{haz_id:"",haz_type:"",haz_number:"",haz_date_acceptance:"",haz_date_issuance:"",haz_date_expiry:"",haz_file:"",addFileForm:!1},form_pco_info:{pco_id:"",pco_name:"",pco_number:"",pco_email:"",pco_contact:"",pco_start_date:"",pco_end_date:"",addFileForm:!1},form_complaint_info:{comp_id:"",comp_name:"",comp_nature:"",comp_attached_file:[],comp_action_file:[],comp_remarks:"",addFileForm:!1}}},computed:{basic_info_id:function(){return c({},this.query)}},methods:{submit_basic_info:function(){var t,e=this;return(t=o().mark((function t(){var r;return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(!confirm("Do you want to proceed?")){t.next=10;break}return r={basic:c({},e.form_basic_info),permit:c({},e.form_permit_info),monitoring:c({},e.form_monitoring_info),legal:c({},e.form_legal_info),hazwaste:c({},e.form_hazwaste_info),pco:c({},e.form_pco_info),complaint:c({},e.form_complaint_info)},t.next=4,e.$inertia.post("/app/universe_process",c({},r));case 4:e.reset_permit_info(),e.reset_monitoring_info(),e.reset_legal_info(),e.reset_hazwaste_info(),e.reset_pco_info(),e.reset_complaint_info();case 10:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,o){var a=t.apply(e,r);function c(t){i(a,n,o,c,_,"next",t)}function _(t){i(a,n,o,c,_,"throw",t)}c(void 0)}))})()},reset_basic_info:function(){this.form_basic_info={id:"",un_crs_number:"",un_psic_group:"",un_psic_class:"",un_psic_subclass:"",un_firmname:"",un_proponent:"",un_project_type:"",un_project_subtype:"",un_project_specific_type:"",un_project_specific_subtype:"",un_detailed_description:"",un_specific_address:"",un_region:"",un_brgy:"",un_municipality:"",un_province:"",un_lat:"",un_long:"",un_representative_name:"",un_representative_designation:"",un_representative_gender:"",un_remarks:"",un_status:"",un_type:""}},reset_permit_info:function(){this.form_permit_info={perm_id:"",perm_law:"",perm_hazwaste_type:"",perm_number:"",perm_date_issuance:"",perm_date_expiry:"",perm_file:[],perm_description:"",perm_status:"",addFileForm:!1}},reset_monitoring_info:function(){this.form_monitoring_info={mon_id:"",mon_law:[],mon_date_monitored:"",mon_or_survey:"",mon_type:"",mon_file:[],addFileForm:!1}},reset_legal_info:function(){this.form_legal_info={nov_id:"",nov_law:[],nov_desc:"",nov_date:"",nov_tc_date:"",nov_tc_status:"",nov_file:[],nov_order_number:"",nov_order_amt:"",nov_order_date_issuance:"",nov_order_date_settlement:"",nov_official_receipt_number:"",nov_compliance_status:"",nov_order_remarks:"",addFileForm:!1}},reset_hazwaste_info:function(){this.form_hazwaste_info={haz_id:"",haz_type:"",haz_number:"",haz_date_acceptance:"",haz_date_issuance:"",haz_date_expiry:"",haz_file:[],addFileForm:!1}},reset_pco_info:function(){this.form_pco_info={pco_id:"",pco_name:"",pco_number:"",pco_email:"",pco_contact:"",pco_start_date:"",pco_end_date:"",addFileForm:!1}},reset_complaint_info:function(){this.form_complaint_info={comp_id:"",comp_name:"",comp_nature:"",comp_attached_file:{},comp_action_file:[],comp_remarks:"",addFileForm:!1}}},watch:{basic_info_id:function(t){t.id&&(this.form_basic_info=c({},t))}}}},5666:t=>{var e=function(t){"use strict";var e,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function _(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{_({},"")}catch(t){_=function(t,e,r){return t[e]=r}}function u(t,e,r,n){var o=e&&e.prototype instanceof d?e:d,i=Object.create(o.prototype),a=new z(n||[]);return i._invoke=function(t,e,r){var n=f;return function(o,i){if(n===l)throw new Error("Generator is already running");if(n===m){if("throw"===o)throw i;return P()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=O(a,r);if(c){if(c===h)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===f)throw n=m,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=l;var _=s(t,e,r);if("normal"===_.type){if(n=r.done?m:p,_.arg===h)continue;return{value:_.arg,done:r.done}}"throw"===_.type&&(n=m,r.method="throw",r.arg=_.arg)}}}(t,r,a),i}function s(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=u;var f="suspendedStart",p="suspendedYield",l="executing",m="completed",h={};function d(){}function v(){}function y(){}var g={};_(g,i,(function(){return this}));var b=Object.getPrototypeOf,w=b&&b(b(k([])));w&&w!==r&&n.call(w,i)&&(g=w);var x=y.prototype=d.prototype=Object.create(g);function j(t){["next","throw","return"].forEach((function(e){_(t,e,(function(t){return this._invoke(e,t)}))}))}function F(t,e){function r(o,i,a,c){var _=s(t[o],t,i);if("throw"!==_.type){var u=_.arg,f=u.value;return f&&"object"==typeof f&&n.call(f,"__await")?e.resolve(f.__await).then((function(t){r("next",t,a,c)}),(function(t){r("throw",t,a,c)})):e.resolve(f).then((function(t){u.value=t,a(u)}),(function(t){return r("throw",t,a,c)}))}c(_.arg)}var o;this._invoke=function(t,n){function i(){return new e((function(e,o){r(t,n,e,o)}))}return o=o?o.then(i,i):i()}}function O(t,r){var n=t.iterator[r.method];if(n===e){if(r.delegate=null,"throw"===r.method){if(t.iterator.return&&(r.method="return",r.arg=e,O(t,r),"throw"===r.method))return h;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return h}var o=s(n,t.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,h;var i=o.arg;return i?i.done?(r[t.resultName]=i.value,r.next=t.nextLoc,"return"!==r.method&&(r.method="next",r.arg=e),r.delegate=null,h):i:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,h)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function E(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function z(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function k(t){if(t){var r=t[i];if(r)return r.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,a=function r(){for(;++o<t.length;)if(n.call(t,o))return r.value=t[o],r.done=!1,r;return r.value=e,r.done=!0,r};return a.next=a}}return{next:P}}function P(){return{value:e,done:!0}}return v.prototype=y,_(x,"constructor",y),_(y,"constructor",v),v.displayName=_(y,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===v||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,y):(t.__proto__=y,_(t,c,"GeneratorFunction")),t.prototype=Object.create(x),t},t.awrap=function(t){return{__await:t}},j(F.prototype),_(F.prototype,a,(function(){return this})),t.AsyncIterator=F,t.async=function(e,r,n,o,i){void 0===i&&(i=Promise);var a=new F(u(e,r,n,o),i);return t.isGeneratorFunction(r)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},j(x),_(x,c,"Generator"),_(x,i,(function(){return this})),_(x,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=[];for(var r in t)e.push(r);return e.reverse(),function r(){for(;e.length;){var n=e.pop();if(n in t)return r.value=n,r.done=!1,r}return r.done=!0,r}},t.values=k,z.prototype={constructor:z,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=e,this.done=!1,this.delegate=null,this.method="next",this.arg=e,this.tryEntries.forEach(E),!t)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=e)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var r=this;function o(n,o){return c.type="throw",c.arg=t,r.next=n,o&&(r.method="next",r.arg=e),!!o}for(var i=this.tryEntries.length-1;i>=0;--i){var a=this.tryEntries[i],c=a.completion;if("root"===a.tryLoc)return o("end");if(a.tryLoc<=this.prev){var _=n.call(a,"catchLoc"),u=n.call(a,"finallyLoc");if(_&&u){if(this.prev<a.catchLoc)return o(a.catchLoc,!0);if(this.prev<a.finallyLoc)return o(a.finallyLoc)}else if(_){if(this.prev<a.catchLoc)return o(a.catchLoc,!0)}else{if(!u)throw new Error("try statement without catch or finally");if(this.prev<a.finallyLoc)return o(a.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=e&&e<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=e,i?(this.method="next",this.next=i.finallyLoc,h):this.complete(a)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),h},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),E(r),h}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var o=n.arg;E(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,r,n){return this.delegate={iterator:k(t),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=e),h}},t}(t.exports);try{regeneratorRuntime=e}catch(t){"object"==typeof globalThis?globalThis.regeneratorRuntime=e:Function("r","regeneratorRuntime = r")(e)}}}]);