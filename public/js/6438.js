"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[6438],{6438:(t,e,n)=>{n.r(e),n.d(e,{default:()=>o});const i={props:{title:{type:String,default:"Attachments"},attachments:Array,goTo:Function,removeFile:Function}};const o=(0,n(1900).Z)(i,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-list",{staticClass:"h-40 overflow-y-auto",attrs:{"two-line":"",subheader:""}},[n("v-subheader",[t._v(t._s(t.title)+" ")]),t._v(" "),n("v-list-item-group",{attrs:{"active-class":"black--text"}},[t._l(t.attachments,(function(e,i){return n("div",{key:i},[n("v-list-item",{scopedSlots:t._u([{key:"default",fn:function(o){o.active;return[n("v-list-item-content",[n("v-list-item-title",[t._v("\n                                Attachment\n                                "+t._s(i+1)+"\n                            ")]),t._v(" "),n("v-list-item-subtitle",{staticClass:"text--primary",domProps:{textContent:t._s(e.size)}})],1),t._v(" "),n("v-list-item-action",{staticClass:"flex flex-col"},[n("b-tooltip",{attrs:{label:"View Attachement",type:"is-dark",position:"is-left"}},[n("box-icon",{attrs:{name:"link",animation:"tada-hover"},on:{click:function(n){return t.goTo(e.url)}}})],1),t._v(" "),n("b-tooltip",{attrs:{label:"Remove Attachement",type:"is-dark",position:"is-left"}},[n("box-icon",{attrs:{color:"red ",type:"solid",name:"trash",animation:"tada-hover"},on:{click:function(n){return t.removeFile(e.id)}}})],1)],1)]}}],null,!0)})],1)}))],2)],1)}),[],!1,null,null,null).exports},1900:(t,e,n)=>{function i(t,e,n,i,o,s,r,a){var l,c="function"==typeof t?t.options:t;if(e&&(c.render=e,c.staticRenderFns=n,c._compiled=!0),i&&(c.functional=!0),s&&(c._scopeId="data-v-"+s),r?(l=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),o&&o.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(r)},c._ssrRegister=l):o&&(l=a?function(){o.call(this,(c.functional?this.parent:this).$root.$options.shadowRoot)}:o),l)if(c.functional){c._injectStyles=l;var u=c.render;c.render=function(t,e){return l.call(e),u(t,e)}}else{var d=c.beforeCreate;c.beforeCreate=d?[].concat(d,l):[l]}return{exports:t,options:c}}n.d(e,{Z:()=>i})}}]);