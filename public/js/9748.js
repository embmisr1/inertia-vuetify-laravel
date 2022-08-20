"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[9748],{9748:(e,s,t)=>{t.r(s),t.d(s,{default:()=>n});const a={props:{modal:Object,close:Function,submit:Function,loading:{type:Boolean,default:!0},items:Array},data:function(){return{searchClass:null}},watch:{isModalActive:function(e){e&&(this.searchClass=this.modal.form.searchClass?this.modal.form.searchClass:null)}},computed:{isModalActive:function(){return this.modal.active}}};const n=(0,t(1900).Z)(a,(function(){var e=this,s=e.$createElement,t=e._self._c||s;return t("v-dialog",{attrs:{"max-width":"500",persistent:""},model:{value:e.modal.active,callback:function(s){e.$set(e.modal,"active",s)},expression:"modal.active"}},[t("ValidationObserver",{ref:"psic_sub_class_observer",scopedSlots:e._u([{key:"default",fn:function(s){s.handleSubmit;var a=s.invalid;return[t("form",{on:{submit:function(s){return s.preventDefault(),e.submit.apply(null,arguments)}}},[t("v-card",{attrs:{loading:e.loading}},[t("v-card-title",{staticClass:"text-h5"},[e._v("\n                    PSIC Sub Class Description\n                ")]),e._v(" "),t("v-card-text",{staticClass:"space-y-4"},[t("div",[t("ValidationProvider",{attrs:{vid:"psic_subclass_desc",name:"Sub Class Description",rules:"required"},scopedSlots:e._u([{key:"default",fn:function(s){var a=s.errors;return[t("b-field",{attrs:{label:"PSIC Sub Class Desc",type:{"is-danger":a[0]},message:a[0]}},[t("b-autocomplete",{attrs:{loading:e.loading,disabled:e.loading,placeholder:"Search...","keep-first":"","open-onfocus":"",data:e.items,field:"psic_class_desc",clearable:""},on:{select:function(s){return e.modal.form.psic_class_FK=s.id},typing:function(s){return e.$emit("search",s)}},scopedSlots:e._u([{key:"empty",fn:function(){return[e._v("\n                                        No Data Found\n                                    ")]},proxy:!0}],null,!0),model:{value:e.searchClass,callback:function(s){e.searchClass=s},expression:"searchClass"}})],1)]}}],null,!0)})],1),e._v(" "),t("div",[t("ValidationProvider",{attrs:{vid:"psic_subclass_desc",name:"Sub Class Description",rules:"required|min:6"},scopedSlots:e._u([{key:"default",fn:function(s){var a=s.errors;return[t("v-textarea",{attrs:{disabled:!e.modal.form.psic_class_FK,label:"Sub Class Description",filled:"",clearable:"",row:"3",outlined:"",loading:e.loading,"error-messages":a[0],readonly:"delete"===e.modal.form.request_type},model:{value:e.modal.form.psic_subclass_desc,callback:function(s){e.$set(e.modal.form,"psic_subclass_desc",s)},expression:"modal.form.psic_subclass_desc"}})]}}],null,!0)})],1)]),e._v(" "),t("v-card-actions",[t("v-spacer"),e._v(" "),t("v-btn",{staticClass:"cursor-pointer",attrs:{color:"red darken-1",text:"",loading:e.loading},on:{click:e.close}},[e._v("\n                        Close\n                    ")]),e._v(" "),t("v-btn",{staticClass:"cursor-pointer",attrs:{disabled:a,loading:e.loading,color:"green darken-1",text:""},on:{click:e.submit}},[e._v("\n                        "+e._s("delete"===e.modal.form.request_type?"Delete":"Submit")+"\n                    ")])],1)],1)],1)]}}])})],1)}),[],!1,null,null,null).exports},1900:(e,s,t)=>{function a(e,s,t,a,n,o,r,l){var i,c="function"==typeof e?e.options:e;if(s&&(c.render=s,c.staticRenderFns=t,c._compiled=!0),a&&(c.functional=!0),o&&(c._scopeId="data-v-"+o),r?(i=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),n&&n.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(r)},c._ssrRegister=i):n&&(i=l?function(){n.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:n),i)if(c.functional){c._injectStyles=i;var d=c.render;c.render=function(e,s){return i.call(s),d(e,s)}}else{var u=c.beforeCreate;c.beforeCreate=u?[].concat(u,i):[i]}return{exports:e,options:c}}t.d(s,{Z:()=>a})}}]);