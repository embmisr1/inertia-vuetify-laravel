(self.webpackChunk=self.webpackChunk||[]).push([[338],{7757:(t,n,e)=>{t.exports=e(5666)},5666:t=>{var n=function(t){"use strict";var n,e=Object.prototype,r=e.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",s=o.toStringTag||"@@toStringTag";function l(t,n,e){return Object.defineProperty(t,n,{value:e,enumerable:!0,configurable:!0,writable:!0}),t[n]}try{l({},"")}catch(t){l=function(t,n,e){return t[n]=e}}function c(t,n,e,r){var o=n&&n.prototype instanceof h?n:h,i=Object.create(o.prototype),a=new C(r||[]);return i._invoke=function(t,n,e){var r=f;return function(o,i){if(r===_)throw new Error("Generator is already running");if(r===d){if("throw"===o)throw i;return M()}for(e.method=o,e.arg=i;;){var a=e.delegate;if(a){var s=E(a,e);if(s){if(s===v)continue;return s}}if("next"===e.method)e.sent=e._sent=e.arg;else if("throw"===e.method){if(r===f)throw r=d,e.arg;e.dispatchException(e.arg)}else"return"===e.method&&e.abrupt("return",e.arg);r=_;var l=u(t,n,e);if("normal"===l.type){if(r=e.done?d:m,l.arg===v)continue;return{value:l.arg,done:e.done}}"throw"===l.type&&(r=d,e.method="throw",e.arg=l.arg)}}}(t,e,a),i}function u(t,n,e){try{return{type:"normal",arg:t.call(n,e)}}catch(t){return{type:"throw",arg:t}}}t.wrap=c;var f="suspendedStart",m="suspendedYield",_="executing",d="completed",v={};function h(){}function p(){}function g(){}var y={};l(y,i,(function(){return this}));var b=Object.getPrototypeOf,w=b&&b(b($([])));w&&w!==e&&r.call(w,i)&&(y=w);var x=g.prototype=h.prototype=Object.create(y);function k(t){["next","throw","return"].forEach((function(n){l(t,n,(function(t){return this._invoke(n,t)}))}))}function L(t,n){function e(o,i,a,s){var l=u(t[o],t,i);if("throw"!==l.type){var c=l.arg,f=c.value;return f&&"object"==typeof f&&r.call(f,"__await")?n.resolve(f.__await).then((function(t){e("next",t,a,s)}),(function(t){e("throw",t,a,s)})):n.resolve(f).then((function(t){c.value=t,a(c)}),(function(t){return e("throw",t,a,s)}))}s(l.arg)}var o;this._invoke=function(t,r){function i(){return new n((function(n,o){e(t,r,n,o)}))}return o=o?o.then(i,i):i()}}function E(t,e){var r=t.iterator[e.method];if(r===n){if(e.delegate=null,"throw"===e.method){if(t.iterator.return&&(e.method="return",e.arg=n,E(t,e),"throw"===e.method))return v;e.method="throw",e.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}var o=u(r,t.iterator,e.arg);if("throw"===o.type)return e.method="throw",e.arg=o.arg,e.delegate=null,v;var i=o.arg;return i?i.done?(e[t.resultName]=i.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=n),e.delegate=null,v):i:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,v)}function F(t){var n={tryLoc:t[0]};1 in t&&(n.catchLoc=t[1]),2 in t&&(n.finallyLoc=t[2],n.afterLoc=t[3]),this.tryEntries.push(n)}function S(t){var n=t.completion||{};n.type="normal",delete n.arg,t.completion=n}function C(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(F,this),this.reset(!0)}function $(t){if(t){var e=t[i];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,a=function e(){for(;++o<t.length;)if(r.call(t,o))return e.value=t[o],e.done=!1,e;return e.value=n,e.done=!0,e};return a.next=a}}return{next:M}}function M(){return{value:n,done:!0}}return p.prototype=g,l(x,"constructor",g),l(g,"constructor",p),p.displayName=l(g,s,"GeneratorFunction"),t.isGeneratorFunction=function(t){var n="function"==typeof t&&t.constructor;return!!n&&(n===p||"GeneratorFunction"===(n.displayName||n.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,g):(t.__proto__=g,l(t,s,"GeneratorFunction")),t.prototype=Object.create(x),t},t.awrap=function(t){return{__await:t}},k(L.prototype),l(L.prototype,a,(function(){return this})),t.AsyncIterator=L,t.async=function(n,e,r,o,i){void 0===i&&(i=Promise);var a=new L(c(n,e,r,o),i);return t.isGeneratorFunction(e)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},k(x),l(x,s,"Generator"),l(x,i,(function(){return this})),l(x,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var n=[];for(var e in t)n.push(e);return n.reverse(),function e(){for(;n.length;){var r=n.pop();if(r in t)return e.value=r,e.done=!1,e}return e.done=!0,e}},t.values=$,C.prototype={constructor:C,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=n,this.done=!1,this.delegate=null,this.method="next",this.arg=n,this.tryEntries.forEach(S),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=n)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function o(r,o){return s.type="throw",s.arg=t,e.next=r,o&&(e.method="next",e.arg=n),!!o}for(var i=this.tryEntries.length-1;i>=0;--i){var a=this.tryEntries[i],s=a.completion;if("root"===a.tryLoc)return o("end");if(a.tryLoc<=this.prev){var l=r.call(a,"catchLoc"),c=r.call(a,"finallyLoc");if(l&&c){if(this.prev<a.catchLoc)return o(a.catchLoc,!0);if(this.prev<a.finallyLoc)return o(a.finallyLoc)}else if(l){if(this.prev<a.catchLoc)return o(a.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<a.finallyLoc)return o(a.finallyLoc)}}}},abrupt:function(t,n){for(var e=this.tryEntries.length-1;e>=0;--e){var o=this.tryEntries[e];if(o.tryLoc<=this.prev&&r.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=n&&n<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=n,i?(this.method="next",this.next=i.finallyLoc,v):this.complete(a)},complete:function(t,n){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&n&&(this.next=n),v},finish:function(t){for(var n=this.tryEntries.length-1;n>=0;--n){var e=this.tryEntries[n];if(e.finallyLoc===t)return this.complete(e.completion,e.afterLoc),S(e),v}},catch:function(t){for(var n=this.tryEntries.length-1;n>=0;--n){var e=this.tryEntries[n];if(e.tryLoc===t){var r=e.completion;if("throw"===r.type){var o=r.arg;S(e)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:$(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=n),v}},t}(t.exports);try{regeneratorRuntime=n}catch(t){"object"==typeof globalThis?globalThis.regeneratorRuntime=n:Function("r","regeneratorRuntime = r")(n)}},338:(t,n,e)=>{"use strict";e.r(n),e.d(n,{default:()=>s});var r=e(7757),o=e.n(r);function i(t,n,e,r,o,i,a){try{var s=t[i](a),l=s.value}catch(t){return void e(t)}s.done?n(l):Promise.resolve(l).then(r,o)}const a={props:{form_monitoring_info:Object,monitoring_table:Array,laws:Array},data:function(){return{headers:[{text:"Law",align:"start",sortable:!1,value:"mon_law"},{text:"Date Monitored",align:"start",sortable:!1,value:"mon_date_monitored"},{text:"Type",align:"start",sortable:!1,value:"mon_type"},{text:"Attachment",align:"start",sortable:!1,value:"mon_file"},{width:"100px",text:"Actions",value:"actions",sortable:!1}],date_monitoring_menu:"",addFileForm:!1,mon_or_sur_selection:["Monitoring","Survey"]}},methods:{editMonitoring:function(t){var n=t.mon_law.split(", ");this.form_monitoring_info.mon_id=t.id,this.form_monitoring_info.mon_law=n,this.form_monitoring_info.mon_date_monitored=t.mon_date_monitored,this.form_monitoring_info.mon_or_survey=t.mon_or_survey,this.form_monitoring_info.mon_type=t.mon_type,this.form_monitoring_info.mon_file=t.mon_file,this.addFileForm=!0},deleteMonitoring:function(t){var n,e=this;return(n=o().mark((function n(){return o().wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return n.next=2,e.$inertia.delete("/app/delete_monitoring/".concat(t.id));case 2:e.resetMonitoring();case 3:case"end":return n.stop()}}),n)})),function(){var t=this,e=arguments;return new Promise((function(r,o){var a=n.apply(t,e);function s(t){i(a,r,o,s,l,"next",t)}function l(t){i(a,r,o,s,l,"throw",t)}s(void 0)}))})()},resetMonitoring:function(){this.form_monitoring_info.mon_id=null,this.form_monitoring_info.mon_law=[],this.form_monitoring_info.mon_date_monitored=null,this.form_monitoring_info.mon_or_survey=null,this.form_monitoring_info.mon_type=null,this.form_monitoring_info.mon_file=[]},addFile:function(){this.addFileForm=!0},closeFile:function(){this.addFileForm=!1,this.resetMonitoring()}}};const s=(0,e(1900).Z)(a,(function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("v-card",{staticClass:"p-4",attrs:{elevation:"0"}},[t.addFileForm?e("div",[e("div",{staticClass:"grid grid-cols-5 gap-y-0 gap-x-5 ml-8"},[e("div",{attrs:{hidden:""}},[e("v-text-field",{attrs:{label:"Monitoring Id",clearable:""},model:{value:t.form_monitoring_info.mon_id,callback:function(n){t.$set(t.form_monitoring_info,"mon_id",n)},expression:"form_monitoring_info.mon_id"}})],1),t._v(" "),e("div",[e("ValidationProvider",{attrs:{vid:"select_mon_laws",name:"Select Law/s",rules:"required"},scopedSlots:t._u([{key:"default",fn:function(n){var r=n.errors;return[e("v-select",{attrs:{"error-messages":r[0],items:t.laws,label:"Select Law/s",multiple:"",hint:"Select Law/s","persistent-hint":""},model:{value:t.form_monitoring_info.mon_law,callback:function(n){t.$set(t.form_monitoring_info,"mon_law",n)},expression:"form_monitoring_info.mon_law"}})]}}],null,!1,2770830561)})],1),t._v(" "),e("div",[e("ValidationProvider",{attrs:{vid:"date_mon",name:"Date Monitored",rules:"required"},scopedSlots:t._u([{key:"default",fn:function(n){var r=n.errors;return[e("v-menu",{ref:"date_monitoring_menu",attrs:{"close-on-content-click":!1,"return-value":t.form_monitoring_info.mon_date_monitored,transition:"scale-transition","offset-y":"","min-width":"auto"},on:{"update:returnValue":function(n){return t.$set(t.form_monitoring_info,"mon_date_monitored",n)},"update:return-value":function(n){return t.$set(t.form_monitoring_info,"mon_date_monitored",n)}},scopedSlots:t._u([{key:"activator",fn:function(n){var o=n.on,i=n.attrs;return[e("v-text-field",t._g(t._b({attrs:{"error-messages":r[0],label:"Date Monitored",readonly:"",clearable:"",required:""},model:{value:t.form_monitoring_info.mon_date_monitored,callback:function(n){t.$set(t.form_monitoring_info,"mon_date_monitored",n)},expression:"\n                                    form_monitoring_info.mon_date_monitored\n                                "}},"v-text-field",i,!1),o))]}}],null,!0),model:{value:t.date_monitoring_menu,callback:function(n){t.date_monitoring_menu=n},expression:"date_monitoring_menu"}},[t._v(" "),e("v-date-picker",{attrs:{"no-title":"",scrollable:""},model:{value:t.form_monitoring_info.mon_date_monitored,callback:function(n){t.$set(t.form_monitoring_info,"mon_date_monitored",n)},expression:"\n                                form_monitoring_info.mon_date_monitored\n                            "}},[e("v-spacer"),t._v(" "),e("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(n){t.date_monitoring_menu=!1}}},[t._v("\n                                Cancel\n                            ")]),t._v(" "),e("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(n){return t.$refs.date_monitoring_menu.save(t.form_monitoring_info.mon_date_monitored)}}},[t._v("\n                                OK\n                            ")])],1)],1)]}}],null,!1,3231336163)})],1),t._v(" "),e("div",[e("ValidationProvider",{attrs:{vid:"mon_sur",name:"Monitoring/Survey",rules:"required"},scopedSlots:t._u([{key:"default",fn:function(n){var r=n.errors;return[e("v-autocomplete",{attrs:{"error-messages":r[0],items:t.mon_or_sur_selection,label:"Monitoring/Survey",clearable:""},model:{value:t.form_monitoring_info.mon_or_survey,callback:function(n){t.$set(t.form_monitoring_info,"mon_or_survey",n)},expression:"form_monitoring_info.mon_or_survey"}})]}}],null,!1,1771508428)})],1),t._v(" "),e("div",[e("v-text-field",{attrs:{label:"Monitoring Type",clearable:""},model:{value:t.form_monitoring_info.mon_type,callback:function(n){t.$set(t.form_monitoring_info,"mon_type",n)},expression:"form_monitoring_info.mon_type"}})],1),t._v(" "),e("div",[e("v-file-input",{attrs:{accept:"application/pdf","show-size":"",counter:"",multiple:"",label:"Monitoring File"},model:{value:t.form_monitoring_info.mon_file,callback:function(n){t.$set(t.form_monitoring_info,"mon_file",n)},expression:"form_monitoring_info.mon_file"}})],1)]),t._v(" "),e("div",{staticClass:"text-center"},[e("v-btn",{attrs:{depressed:"",color:"primary",type:"submit"}},[e("v-icon",{staticClass:"mr-2",attrs:{small:""}},[t._v(" mdi-content-save ")]),t._v("\n                Submit\n            ")],1),t._v(" "),e("v-btn",{attrs:{depressed:"",color:"warning",type:"button"},on:{click:t.resetMonitoring}},[e("v-icon",{staticClass:"mr-2",attrs:{small:""}},[t._v(" mdi-autorenew ")]),t._v("\n                Reset\n            ")],1),t._v(" "),e("v-btn",{attrs:{depressed:"",color:"error",type:"button"},on:{click:t.closeFile}},[e("v-icon",{staticClass:"mr-2",attrs:{small:""}},[t._v(" mdi-plus-circle ")]),t._v("\n                Close\n            ")],1)],1)]):t._e(),t._v(" "),t.addFileForm?t._e():e("v-btn",{attrs:{depressed:"",color:"success",type:"button"},on:{click:t.addFile}},[e("v-icon",{staticClass:"mr-2",attrs:{small:""}},[t._v(" mdi-plus-circle ")]),t._v("\n        Add File\n    ")],1),t._v(" "),[e("v-card",{staticClass:"mt-5",attrs:{elevation:"2"}},[e("v-data-table",{staticClass:"elevation-1",attrs:{dense:"",headers:t.headers,items:t.monitoring_table,"item-key":"monitoring_tables"},scopedSlots:t._u([{key:"item.mon_file",fn:function(n){var r=n.item;return[e("a",{attrs:{href:"/app/attachments?type=monitoring&id="+r.id,target:"_blank"}},[e("v-btn",{attrs:{small:"",dark:""}},[t._v("Download File")])],1)]}},{key:"item.actions",fn:function(n){var r=n.item;return[e("v-icon",{staticClass:"mr-2",attrs:{small:""},on:{click:function(n){return t.editMonitoring(r)}}},[t._v("\n                        mdi-pencil\n                    ")]),t._v(" "),e("v-icon",{attrs:{small:""},on:{click:function(n){return t.deleteMonitoring(r)}}},[t._v("\n                        mdi-delete\n                    ")])]}}])})],1)]],2)}),[],!1,null,null,null).exports},1900:(t,n,e)=>{"use strict";function r(t,n,e,r,o,i,a,s){var l,c="function"==typeof t?t.options:t;if(n&&(c.render=n,c.staticRenderFns=e,c._compiled=!0),r&&(c.functional=!0),i&&(c._scopeId="data-v-"+i),a?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(a)},c._ssrRegister=l):o&&(l=s?function(){o.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:o),l)if(c.functional){c._injectStyles=l;var u=c.render;c.render=function(t,n){return l.call(n),u(t,n)}}else{var f=c.beforeCreate;c.beforeCreate=f?[].concat(f,l):[l]}return{exports:t,options:c}}e.d(n,{Z:()=>r})}}]);