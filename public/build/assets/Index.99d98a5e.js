import{u as x,o as s,c as u,w as i,d as e,f,a as o,b as l,e as m,g as d,D as y,F as g,t as c,l as h}from"./app.d01356e3.js";import{_ as k,c as b}from"./AuthenticatedLayout.358931e7.js";import{_}from"./SuccessButton.6fe5d2f8.js";import{C as v}from"./index.es.a8b2b918.js";import{_ as w}from"./PrimaryButton.d2d32afa.js";import{_ as V}from"./TextInput.a446cfc1.js";import"./NavLeftLink.2b1c518f.js";import"./cib-twitter.8a3d22db.js";import"./cil-caret-right.c95fbe62.js";import"./cil-location-pin.6971a42f.js";import"./_plugin-vue_export-helper.cdc0426e.js";const C={class:"container flex justify-center mx-auto"},j={class:"flex flex-col"},D={class:"relative w-full"},N={class:"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"},$={class:"w-full"},B={class:"border-b border-gray-200 shadow"},F={class:"divide-y divide-gray-300"},S=e("thead",{class:"bg-gray-50"},[e("tr",null,[e("th",{class:"px-6 py-2 text-xs text-gray-500"}," Pasien "),e("th",{class:"px-6 py-2 text-xs text-gray-500"}," Tanggal Kunjungan "),e("th",{class:"px-6 py-2 text-xs text-gray-500"}," Nama dokter "),e("th",{class:"px-6 py-2 text-xs text-gray-500"}," Aksi ")])],-1),T={class:"bg-white divide-y divide-gray-300"},I={class:"px-6 py-4 text-sm text-gray-500"},L={class:"px-6 py-4"},z={class:"text-sm text-gray-500"},A={class:"px-6 py-4"},E={key:0,class:"text-sm text-gray-900"},K={key:1,class:"text-sm text-red-500"},M={class:"px-6 py-4 text-sm text-gray-500"},Y={__name:"Index",props:{rekam_medis:Object},setup(p){const n=x({cari:""});return(a,r)=>(s(),u(k,{href:a.route("dokter.rekam_medis.index"),text:"Data rekam medis"},{default:i(()=>[e("div",C,[e("div",j,[e("form",{class:"flex items-center w-full my-3",onSubmit:r[1]||(r[1]=f(t=>l(n).get(a.route("dokter.rekam_medis.index")),["prevent"]))},[e("div",D,[e("div",N,[o(l(v),{icon:b,size:"sm",class:"inline-flex items-center justify-center w-5 h-5 mr-2 text-center"},null,8,["icon"])]),o(V,{modelValue:l(n).cari,"onUpdate:modelValue":r[0]||(r[0]=t=>l(n).cari=t),class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",placeholder:"Cari berdasarkan nama pasien / Tanggal kunjungan",autofocus:""},null,8,["modelValue"])]),o(w,{class:"mx-2 py-3"},{default:i(()=>[m("Cari")]),_:1})],32),e("div",$,[e("div",B,[e("table",F,[S,e("tbody",T,[(s(!0),d(g,null,y(p.rekam_medis,t=>(s(),d("tr",{class:"whitespace-nowrap",key:t.id},[e("td",I,c(t.pasien.name),1),e("td",L,[e("div",z,c(t.tanggal_periksa),1)]),e("td",A,[t.dokter!=null?(s(),d("div",E,c(t.dokter.name),1)):(s(),d("div",K," Dokter belum melayani "))]),e("td",M,[o(_,{class:"mx-1",href:a.route("dokter.pasien.rekam_medis",[t.user.id,t.id])},{default:i(()=>[m("Detail")]),_:2},1032,["href"]),t.dokter==null?(s(),u(_,{key:0,class:"mx-1",href:a.route("dokter.pasien.rekam_medis",[t.user.id,t.id])},{default:i(()=>[m("Layanai")]),_:2},1032,["href"])):h("",!0)])]))),128))])])])])])])]),_:1},8,["href"]))}};export{Y as default};