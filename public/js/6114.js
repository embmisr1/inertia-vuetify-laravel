"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[6114],{6114:(e,t,o)=>{o.r(t),o.d(t,{default:()=>r});const n={props:{modal:Object,close:Function,submit:Function,loading:{type:Boolean,default:!0}}};const r=(0,o(1900).Z)(n,(function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("v-dialog",{attrs:{"max-width":"500",persistent:""},model:{value:e.modal.active,callback:function(t){e.$set(e.modal,"active",t)},expression:"modal.active"}},[o("ValidationObserver",{ref:"psic_group_observer",scopedSlots:e._u([{key:"default",fn:function(t){t.handleSubmit;var n=t.invalid;return[o("form",{on:{submit:function(t){return t.preventDefault(),e.submit.apply(null,arguments)}}},[o("v-card",{attrs:{loading:e.loading}},[o("v-card-title",{staticClass:"text-h5"},[e._v("\n                    PSIC Group Description\n                ")]),e._v(" "),o("v-card-text",[o("ValidationProvider",{attrs:{vid:"psic_group_desc",name:"Group Description",rules:"required|min:6"},scopedSlots:e._u([{key:"default",fn:function(t){var n=t.errors;return[o("v-textarea",{attrs:{label:"Group Description",filled:"",clearable:"",row:"3",outlined:"",loading:e.loading,"error-messages":n[0],readonly:"delete"===e.modal.form.request_type},model:{value:e.modal.form.psic_group_desc,callback:function(t){e.$set(e.modal.form,"psic_group_desc",t)},expression:"modal.form.psic_group_desc"}})]}}],null,!0)})],1),e._v(" "),o("v-card-actions",[o("v-spacer"),e._v(" "),o("v-btn",{staticClass:"cursor-pointer",attrs:{color:"red darken-1",text:"",loading:e.loading},on:{click:e.close}},[e._v("\n                        Close\n                    ")]),e._v(" "),o("v-btn",{staticClass:"cursor-pointer white--text",attrs:{disabled:n,loading:e.loading,color:"green darken-1"},on:{click:e.submit}},[e._v("\n                        "+e._s("delete"===e.modal.form.request_type?"Delete":"Submit")+"\n                    ")])],1)],1)],1)]}}])})],1)}),[],!1,null,null,null).exports},1900:(e,t,o)=>{function n(e,t,o,n,r,s,a,i){var l,c="function"==typeof e?e.options:e;if(t&&(c.render=t,c.staticRenderFns=o,c._compiled=!0),n&&(c.functional=!0),s&&(c._scopeId="data-v-"+s),a?(l=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),r&&r.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(a)},c._ssrRegister=l):r&&(l=i?function(){r.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:r),l)if(c.functional){c._injectStyles=l;var d=c.render;c.render=function(e,t){return l.call(t),d(e,t)}}else{var u=c.beforeCreate;c.beforeCreate=u?[].concat(u,l):[l]}return{exports:e,options:c}}o.d(t,{Z:()=>n})}}]);