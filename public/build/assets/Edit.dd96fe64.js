import{u,o as _,c as f,w as d,d as s,a as l,b as e,e as c,f as y}from"./app.d01356e3.js";import{_ as x}from"./AuthenticatedLayout.358931e7.js";import{_ as i}from"./PublicInputText.55392db8.js";import{_ as p}from"./InputError.3a08ebfc.js";import{_ as g}from"./PrimaryButton.5f400a16.js";import"./NavLeftLink.2b1c518f.js";import"./index.es.a8b2b918.js";import"./cib-twitter.8a3d22db.js";import"./cil-caret-right.c95fbe62.js";import"./cil-location-pin.6971a42f.js";import"./_plugin-vue_export-helper.cdc0426e.js";const b={class:"flex flex-wrap mb-3 -mx-3"},h={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},w={class:"w-full px-3 md:w-1/2"},V={class:"mt-6 text-center"},F={__name:"Edit",props:{layanan:Object},setup(o){const m=o,a=u({nama_layanan:m.layanan.nama_layanan,harga_layanan:m.layanan.harga_layanan});return(r,n)=>(_(),f(x,{href:r.route("admin.layanan.index"),text:"Data Layanan"},{default:d(()=>[s("form",{onSubmit:n[2]||(n[2]=y(t=>e(a).put(r.route("admin.layanan.update",o.layanan.id),{onSuccess:()=>e(a).reset()}),["prevent"]))},[s("div",b,[s("div",h,[l(i,{label:"Nama layanan",type:"text",placeholder:"Ex : Pasang Infus Dewasa ",modelValue:e(a).nama_layanan,"onUpdate:modelValue":n[0]||(n[0]=t=>e(a).nama_layanan=t)},null,8,["modelValue"]),l(p,{message:e(a).errors.nama_layanan,class:"mt-2"},null,8,["message"])]),s("div",w,[l(i,{label:"Harga layanan",type:"number",placeholder:"Ex : 35000",modelValue:e(a).harga_layanan,"onUpdate:modelValue":n[1]||(n[1]=t=>e(a).harga_layanan=t)},null,8,["modelValue"]),l(p,{message:e(a).errors.harga_layanan,class:"mt-2"},null,8,["message"])])]),s("div",V,[l(g,{disabled:e(a).processing},{default:d(()=>[c("Update")]),_:1},8,["disabled"])])],32)]),_:1},8,["href"]))}};export{F as default};