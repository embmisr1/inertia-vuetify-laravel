"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[3603],{3603:(e,t,i)=>{i.r(t),i.d(t,{default:()=>o});const n={props:{modal:Object,close:Function,form_field:Object,submitForm:Function},computed:{modalType:function(){return this.modal.type}}};const o=(0,i(1900).Z)(n,(function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-dialog",{attrs:{transition:"dialog-bottom-transition","max-width":"600",persistent:""},scopedSlots:e._u([{key:"default",fn:function(t){return[i("v-card",[i("v-toolbar",[e._v("Equipment Form")]),e._v(" "),i("div",{staticClass:"p-4"},[i("ValidationObserver",{ref:"psic_group_class_observer",scopedSlots:e._u([{key:"default",fn:function(t){var n=t.handleSubmit,o=t.invalid;return[i("form",{on:{submit:function(t){return t.preventDefault(),n(e.submitForm)}}},[i("ValidationProvider",{attrs:{vid:"equipment_description",name:"Equipment Description",rules:"required"},scopedSlots:e._u([{key:"default",fn:function(t){var n=t.errors;return[i("v-text-field",{attrs:{label:"Equipment Description",filled:"",outlined:"","error-messages":n[0],disabled:"Delete"===e.modalType},model:{value:e.form_field.equipment_description,callback:function(t){e.$set(e.form_field,"equipment_description",t)},expression:"form_field.equipment_description"}})]}}],null,!0)}),e._v(" "),i("v-card-actions",{staticClass:"justify-end"},["Delete"!==e.modalType?i("v-btn",{attrs:{type:"submit",disabled:o,dark:""}},[e._v("Submt")]):i("v-btn",{attrs:{type:"submit",color:"error"}},[e._v("Delete")]),e._v(" "),i("v-btn",{attrs:{text:"",color:"red darken-2"},on:{click:e.close}},[e._v("Close")])],1)],1)]}}],null,!0)})],1)],1)]}}]),model:{value:e.modal.active,callback:function(t){e.$set(e.modal,"active",t)},expression:"modal.active"}})}),[],!1,null,null,null).exports}}]);