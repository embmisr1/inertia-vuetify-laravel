(self.webpackChunk=self.webpackChunk||[]).push([[2045,1862,3802,7338,4829,508],{4829:()=>{},1862:(e,r,t)=>{"use strict";t.r(r),t.d(r,{default:()=>a});const i={components:{Link:t(6454).rU},props:{items:{type:Array,require:!0,default:[]},themeColor:{type:Boolean,require:!1,default:!0}}};const a=(0,t(1900).Z)(i,(function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",[t("v-list",e._l(e.items,(function(r,i){return t("v-list-item",{key:i},[t("v-list-item-icon",[t("v-icon",{domProps:{textContent:e._s(r.icon)}})],1),e._v(" "),t("v-list-item-content",[t("Link",{staticClass:"text-gray-900",attrs:{href:r.link,as:"button",method:"Log Out"!==r.title?"get":"delete"},domProps:{innerHTML:e._s(r.title)}})],1)],1)})),1)],1)}),[],!1,null,null,null).exports},3802:(e,r,t)=>{"use strict";t.r(r),t.d(r,{default:()=>a});const i={components:{Link:t(6454).rU},props:{items:{type:Array,require:!0}},data:function(){return{selected:0,admins:[["Management","mdi-account-multiple-outline"],["Settings","mdi-cog-outline"]],cruds:[["Create","mdi-plus-outline"],["Read","mdi-file-outline"],["Update","mdi-update"],["Delete","mdi-delete"]]}}};const a=(0,t(1900).Z)(i,(function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",{staticClass:"overflow-hidden"},e._l(e.items,(function(r,i){return t("v-list",{key:i,staticClass:"overflow-hidden  ",attrs:{dense:"",nav:""}},[t("v-subheader",[e._v(e._s(r.header))]),e._v(" "),e._l(r.child,(function(r,i){return t("v-list-group",{key:i,attrs:{dark:"","prepend-icon":r.icon,value:!1,"append-icon":r.child.length?"mdi-chevron-down":null},scopedSlots:e._u([{key:"activator",fn:function(){return[t("v-list-item-content",[r.link?t("v-list-item-subtitle",[t("Link",{attrs:{href:r.link,as:"button","preserve-scroll":""}},[e._v(e._s(r.name))])],1):t("v-list-item-subtitle",{domProps:{textContent:e._s(r.name)}})],1)]},proxy:!0}],null,!0)},[e._v(" "),e._l(r.child,(function(r){return t("v-list-item",{key:r.name,attrs:{dense:""}},[t("v-list-item-icon",[t("v-icon",[e._v("\n                        "+e._s(r.icon)+"\n                    ")])],1),e._v(" "),t("v-list-item-content",[r.link?t("v-list-item-subtitle",[t("Link",{attrs:{href:r.link,as:"button","preserve-scroll":""}},[e._v(e._s(r.name))])],1):t("v-list-item-subtitle",{domProps:{textContent:e._s(r.name)}})],1)],1)}))],2)}))],2)})),1)}),[],!1,null,null,null).exports},7338:(e,r,t)=>{"use strict";t.r(r),t.d(r,{default:()=>c});var i=t(6454),a=t(1862),s=t(3802);const n={components:{Link:i.rU,RightMenu:a.default,SideNavItems:s.default},metaInfo:{title:"Unisys",titleTemplate:"%s | EMB - Region 1 - Unisys",link:[{rel:"icon",href:"http://r1.emb.gov.ph/wp-content/uploads/2022/03/DENR-LOGO.png"}],author:[{name:"Allan Daryl Ancheta",email:"allandaryl.dev@gmail.com",github:"allandaryldev"}]},data:function(){return{drawer:!0,items:[{title:"Profile",icon:"mdi-account",link:"/app/profile/"},{title:"Log Out",icon:"mdi-logout",link:"/app/"}],sidebarItems:[{header:"Firm Management",child:[{name:"Firm Management",link:null,icon:"mdi-view-dashboard",child:[{name:"Universe Dashboard Firm",link:"/app/universe_dashboard/firm",icon:"mdi-link"},{name:"Universe Dashboard LGU",link:"/app/universe_dashboard/lgu",icon:"mdi-link"},{name:"Universe",link:"/app/universe/",icon:"mdi-link"},{name:"Universe Registration",link:"/app/universe_form/",icon:"mdi-link"},{name:"Activity Log",link:"",icon:"mdi-link"}]}]},{header:"Monitoring",child:[{name:"ECC/NCC",link:null,icon:"mdi-clipboard-file",child:[]},{name:"AIR",link:null,icon:"mdi-air-filter",child:[]},{name:"WATER",link:null,icon:"mdi-water",child:[]},{name:"AMBIENT",link:null,icon:"mdi-shield-alert",child:[]},{name:"SOLID WASTE",link:"/app/swm/lce_list",icon:"mdi-trash-can",child:[]},{name:"HAZARDOUS WASTE",link:null,icon:"mdi-biohazard",child:[]}]},{header:"LEGAL UNIT",child:[{name:"VIOLATIONS",link:null,icon:"mdi-ticket",child:[{name:"MASTER LIST",link:"",icon:"mdi-link"},{name:"ACTIVE",link:"",icon:"mdi-link"}]},{name:"TECHNICAL CONFERENCE",link:null,icon:"mdi-account-group",child:[{name:"MASTER LIST",link:"",icon:"mdi-link"},{name:"ACTIVE",link:"",icon:"mdi-link"}]},{name:"COMPLAINTS",link:null,icon:"mdi-clipboard-file",child:[]}]},{header:"USER MANAGEMENT",child:[{name:"SYSTEM USERS",link:"/app/users/",icon:"mdi-account-group",child:[]},{name:"USER GROUPS",link:null,icon:"mdi-account-supervisor",child:[]},{name:"POSITION",link:"/app/position",icon:"mdi-account-supervisor",child:[]},{name:"DIVISION",link:"/app/division",icon:"mdi-account-supervisor",child:[]},{name:"UNIT SECTION",link:"/app/unit_section",icon:"mdi-account-supervisor",child:[]},{name:"User Access",link:null,icon:"mdi-account-group",child:[{name:"User Roles",link:"/app/users_access/users_access_role_list",icon:"mdi-link"},{name:"User Role Template",link:"/app/users_access/users_access_template_list",icon:"mdi-link"}]}]},{header:"INDUSTRY CONFIGURATION",child:[{name:"PROJECT TYPE",link:null,icon:"mdi-file-document-multiple",child:[{name:"PROJECT TYPE",link:"/app/project/type",icon:"mdi-link"},{name:"PROJECT SUB-TYPE",link:"/app/project/subtype",icon:"mdi-link"},{name:"PROJECT SPECIFIC TYPE",link:"/app/project/specifictype",icon:"mdi-link"},{name:"PROJECT SPECIFIC SUB-TYPE",link:"/app/project/specificsubtype",icon:"mdi-link"},{name:"DETAILED DESCRIPTION",link:"",icon:"mdi-link"}]},{name:"2009 PSIC CODES",link:null,icon:"mdi-file-document-multiple",child:[{name:"PSIC GROUP",link:"/app/psic/group",icon:"mdi-link"},{name:"PSIC CLASS",link:"/app/psic/class",icon:"mdi-link"},{name:"PSIC SUB CLASS",link:"/app/psic/sub-class",icon:"mdi-link"}]}]},{header:"APP CONFIGURATION",child:[{name:"REFERENCE PLACES",link:null,icon:"mdi-map",child:[{name:"REGION ",link:"",icon:"mdi-link"},{name:"PROVINCE",link:"",icon:"mdi-link"},{name:"DISTRICT",link:"",icon:"mdi-link"},{name:"TOWN/CITY",link:"",icon:"mdi-link"},{name:"BARANGAY",link:"",icon:"mdi-link"}]}]}]}},computed:{isDark:function(){return this.$vuetify.theme.dark}}};const c=(0,t(1900).Z)(n,(function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("v-app",[t("v-navigation-drawer",{staticClass:"scrollbar-thin overflow-y-scroll",attrs:{app:"",clipped:""},model:{value:e.drawer,callback:function(r){e.drawer=r},expression:"drawer"}},[t("SideNavItems",{attrs:{items:e.sidebarItems}})],1),e._v(" "),t("v-app-bar",{attrs:{app:"","clipped-left":"",short:"",rounded:""}},[e.drawer?t("box-icon",{attrs:{name:"x",color:e.isDark?"white":"black"},on:{click:function(r){e.drawer=!e.drawer}}}):t("v-app-bar-nav-icon",{on:{click:function(r){r.stopPropagation(),e.drawer=!e.drawer}}}),e._v(" "),t("v-spacer"),e._v(" "),t("v-menu",{attrs:{"offset-x":"",left:"","z-index":"50",origin:"center center",transition:"scale-transition"},scopedSlots:e._u([{key:"activator",fn:function(r){var i=r.on,a=r.attrs;return[t("img",e._g(e._b({staticClass:"max-h-12 object-cover",attrs:{src:"http://r1.emb.gov.ph/wp-content/uploads/2022/03/cropped-DENR-LOGO.png",alt:"DENR - EMB Region 1"}},"img",a,!1),i))]}}])})],1),e._v(" "),t("v-main",{staticStyle:{"background-color":"#f4f5fa !important","overflow-y":"hidden"}},[t("div",{staticClass:"p-4"},[e._t("default")],2)]),e._v(" "),t("v-footer",{attrs:{app:"",rounded:""}},[t("v-spacer"),e._v("\n        © DENR - EMB REGION 1 - UNISYS\n    ")],1)],1)}),[],!1,null,null,null).exports},508:(e,r,t)=>{"use strict";t.r(r),t.d(r,{default:()=>s});var i=t(6454);const a={props:{label:String,firm_type:String,query_counter_total:Number,query_counter_valid:Number,query_counter_expired:Number,query_counter_undefined:Number,query_counter_1586:Number,query_counter_8749:Number,query_counter_9275:Number,query_counter_6969:Number,query_counter_9003:Number,href_1586:String,href_8749:String,href_9275:String,href_6969:String,href_9003:String,href_valid:String,href_expired:String,href_undefined:String,href:String},components:{Link:i.rU},data:function(){return{}}};const s=(0,t(1900).Z)(a,(function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",{staticClass:"text-black bg-white rounded-lg",staticStyle:{"box-shadow":"0px 0px 5px #9C9C9C"}},[t("div",{staticClass:"primary text-xl rounded-t-lg text-white border-b p-2 text-center"},[t("b",{staticClass:"text-xl"},[t("v-icon",{staticClass:"float-left mt-1",attrs:{dark:""}},[e._v(" mdi-folder")]),e._v(" "+e._s(e.label)+"\n        ")],1)]),e._v(" "),t("div",{staticClass:"text-lg p-4"},["REGISTERED FIRMS"==e.label||"WITH 1586"==e.label||"WITH 6969"==e.label||"WITH PCO"==e.label||"WITH ORDER"==e.label||"COMPLAINT"==e.label?t("div",{staticClass:"text-xl text-center grid grid-cols-1"},[t("div",{staticClass:"text-xl text-center grid grid-cols-1 pt-6"},[t("div",[t("Link",{attrs:{href:e.href}},[t("span",{staticClass:"text-black"},[e._v("Total: "),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_total))])])])],1)]),e._v(" "),e._m(0)]):e._e(),e._v(" "),"WITH 8749"==e.label||"WITH 9275"==e.label?t("div",[t("div",{staticClass:"text-xl text-center grid grid-cols-1"},[t("div",[t("Link",{attrs:{href:e.href}},[t("span",{staticClass:"text-black"},[e._v("Total: "),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_total))])])])],1)]),e._v(" "),t("div",{staticClass:"text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500"},[t("div",[t("Link",{attrs:{href:e.href_valid}},[t("span",{staticClass:"text-black"},[e._v("Valid: "),t("br"),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_valid))])])])],1),e._v(" "),t("div",[t("Link",{attrs:{href:e.href_expired}},[t("span",{staticClass:"text-black"},[e._v("Expired: "),t("br"),t("b",{staticClass:"text-2xl text-rose-600"},[e._v(e._s(e.query_counter_expired))])])])],1)]),e._v(" "),t("div",{staticClass:"text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500"},[t("div",[t("Link",{attrs:{href:e.href_undefined}},[t("span",{staticClass:"text-black"},[e._v("Undefined: "),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_undefined))])])])],1)])]):e._e(),e._v(" "),"WITH NOV"==e.label||"MONITORING"==e.label?t("div",[t("div",{staticClass:"text-xl text-center grid grid-cols-1"},[t("div",[t("Link",{attrs:{href:e.href}},[t("span",{staticClass:"text-black"},[e._v("Total: "),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_total))])])])],1)]),e._v(" "),t("div",{staticClass:"text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500"},[t("div",[t("Link",{attrs:{href:e.href_1586}},[t("span",{staticClass:"text-black"},[e._v("PD1586: "),t("br"),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_1586))])])])],1),e._v(" "),t("div",[t("Link",{attrs:{href:e.href_8749}},[t("span",{staticClass:"text-black"},[e._v("RA8749: "),t("br"),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_8749))])])])],1)]),e._v(" "),t("div",{staticClass:"text-xl text-left grid grid-cols-2 mt-5 border-t-2 border-blue-500"},[t("div",[t("Link",{attrs:{href:e.href_9275}},[t("span",{staticClass:"text-black"},[e._v("RA9275: "),t("br"),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_9275))])])])],1),e._v(" "),t("div",[t("Link",{attrs:{href:e.href_6969}},[t("span",{staticClass:"text-black"},[e._v("RA6969: "),t("br"),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_6969))])])])],1)]),e._v(" "),t("div",{staticClass:"text-xl text-left grid grid-cols-1 mt-5 border-t-2 border-blue-500"},[t("div",[t("Link",{attrs:{href:e.href_9003}},[t("span",{staticClass:"text-black"},[e._v("RA9003: "),t("b",{staticClass:"text-2xl"},[e._v(e._s(e.query_counter_9003))])])])],1)])]):e._e()])])}),[function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("div",{staticClass:"text-xl text-left grid grid-cols-1"},[t("div",[e._v(" ")])])}],!1,null,null,null).exports},2045:(e,r,t)=>{"use strict";t.r(r),t.d(r,{default:()=>l});var i=t(7338),a=t(4829),s=t.n(a),n=t(508),c=t(6454);const _={mixins:[s()],components:{DefaultLayout:i.default,Link:c.rU,MainDashboard:n.default},props:{firm_type:String,query_registered_industries:Number,query_all_firm:Number,query_permit_1586:Number,query_permit_8749:Number,query_permit_9275:Number,query_permit_6969:Number,query_permit_8749_valid:Number,query_permit_9275_valid:Number,query_permit_8749_expired:Number,query_permit_9275_expired:Number,query_permit_8749_undefined:Number,query_permit_9275_undefined:Number,query_pco_all:Number,query_nov_all:Number,query_nov_1586:Number,query_nov_8749:Number,query_nov_9275:Number,query_nov_6969:Number,query_nov_9003:Number,query_order_issued:Number,query_monitoring_all:Number,query_monitoring_1586:Number,query_monitoring_8749:Number,query_monitoring_9275:Number,query_monitoring_6969:Number,query_monitoring_9003:Number,query_complaint:Number},data:function(){return{}}};const l=(0,t(1900).Z)(_,(function(){var e=this,r=e.$createElement,t=e._self._c||r;return t("DefaultLayout",[t("div",{staticClass:"grid grid-cols-5 gap-5 mb-5"},[t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_permit_9275,query_counter_valid:e.query_permit_9275_valid,query_counter_expired:e.query_permit_9275_expired,query_counter_undefined:e.query_permit_9275_undefined,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",href_valid:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=VALID",href_expired:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=EXPIRED",href_undefined:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=&searchValidity=UNDEFINED",label:"WITH 9275"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_permit_8749,query_counter_valid:e.query_permit_8749_valid,query_counter_expired:e.query_permit_8749_expired,query_counter_undefined:e.query_permit_8749_undefined,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",href_valid:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=VALID",href_expired:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=EXPIRED",href_undefined:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%208749&search6969=&search9003=&searchValidity=UNDEFINED",firm_type:e.firm_type,label:"WITH 8749"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_permit_6969,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",label:"WITH 6969"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_permit_1586,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PERMIT&searchStatus=&searchType="+e.firm_type+"&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",label:"WITH 1586"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_registered_industries,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=",label:"REGISTERED FIRMS"}})],1)]),e._v(" "),t("div",{staticClass:"grid grid-cols-5 gap-5"},[t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_monitoring_all,query_counter_1586:e.query_monitoring_1586,query_counter_8749:e.query_monitoring_8749,query_counter_9275:e.query_monitoring_9275,query_counter_6969:e.query_monitoring_6969,query_counter_9003:e.query_monitoring_9003,href_1586:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",href_8749:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",href_9275:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",href_6969:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",href_9003:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003",href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=MONITORING&searchStatus=&searchType="+e.firm_type+"&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003",firm_type:e.firm_type,label:"MONITORING"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_nov_all,query_counter_1586:e.query_nov_1586,query_counter_8749:e.query_nov_8749,query_counter_9275:e.query_nov_9275,query_counter_6969:e.query_nov_6969,query_counter_9003:e.query_nov_9003,href_1586:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=PD%201586&search8749=&search9275=&search6969=&search9003=",href_8749:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=RA%208749&search9275=&search6969=&search9003=",href_9275:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=RA%209275&search6969=&search9003=",href_6969:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=RA%206969&search9003=",href_9003:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=RA%209003",href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=NOV&searchStatus=&searchType="+e.firm_type+"&search1586=PD%201586&search8749=RA%208749&search9275=RA%209275&search6969=RA%206969&search9003=RA%209003",firm_type:e.firm_type,label:"WITH NOV"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_order_issued,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=ORDER&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=",label:"WITH ORDER"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_pco_all,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=PCO&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=",label:"WITH PCO"}})],1),e._v(" "),t("div",[t("MainDashboard",{attrs:{query_counter_total:e.query_complaint,firm_type:e.firm_type,href:"/app/universe/?PK_province_ID=&PK_citymun_ID=&PK_brgy_ID=&selectedSearchCategory=COMPLAINT&searchStatus=&searchType="+e.firm_type+"&search1586=&search8749=&search9275=&search6969=&search9003=",label:"COMPLAINT"}})],1)])])}),[],!1,null,null,null).exports},1900:(e,r,t)=>{"use strict";function i(e,r,t,i,a,s,n,c){var _,l="function"==typeof e?e.options:e;if(r&&(l.render=r,l.staticRenderFns=t,l._compiled=!0),i&&(l.functional=!0),s&&(l._scopeId="data-v-"+s),n?(_=function(e){(e=e||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(e=__VUE_SSR_CONTEXT__),a&&a.call(this,e),e&&e._registeredComponents&&e._registeredComponents.add(n)},l._ssrRegister=_):a&&(_=c?function(){a.call(this,(l.functional?this.parent:this).$root.$options.shadowRoot)}:a),_)if(l.functional){l._injectStyles=_;var o=l.render;l.render=function(e,r){return _.call(r),o(e,r)}}else{var u=l.beforeCreate;l.beforeCreate=u?[].concat(u,_):[_]}return{exports:e,options:l}}t.d(r,{Z:()=>i})}}]);