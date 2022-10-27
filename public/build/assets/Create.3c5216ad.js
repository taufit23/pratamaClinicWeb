import{u as i,o as p,c as u,w as d,d as a,a as t,b as l,i as _,y as g,e as c,f as b}from"./app.d01356e3.js";import{_ as f}from"./AuthenticatedLayout.358931e7.js";import{_ as n}from"./PublicInputText.55392db8.js";import{_ as m}from"./InputError.3a08ebfc.js";import{_ as x}from"./PrimaryButton.5f400a16.js";import"./NavLeftLink.2b1c518f.js";import"./index.es.a8b2b918.js";import"./cib-twitter.8a3d22db.js";import"./cil-caret-right.c95fbe62.js";import"./cil-location-pin.6971a42f.js";import"./_plugin-vue_export-helper.cdc0426e.js";const w={class:"flex flex-wrap mb-3 -mx-3"},h={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},k={class:"w-full px-3 md:w-1/2"},V={class:"flex flex-wrap mb-3 -mx-3"},v={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},y={class:"w-full px-3 md:w-1/2"},U={class:"flex flex-wrap mb-3 -mx-3"},j={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},E={class:"w-full px-3 md:w-1/2"},N={class:"w-full px-3 md:w-1/1"},B=a("label",{class:"block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"}," Jenis Kelamin ",-1),$=a("option",{value:"laki-laki"},"Laki - Laki",-1),K=a("option",{value:"perempuan"},"Perempuan",-1),L=[$,K],P={class:"flex flex-wrap mb-3 -mx-3"},S={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},J={class:"w-full px-3 md:w-1/2"},T={class:"mt-6 text-center"},Q={__name:"Create",setup(z){const e=i({name:"",username:"",nik:"",bpjs:"",no_hp:"",jenis_kelamin:"",tanggal_lahir:"",alamat:""});return(r,s)=>(p(),u(f,{href:r.route("admin.pasien.index"),text:"Data Pasien"},{default:d(()=>[a("form",{onSubmit:s[8]||(s[8]=b(o=>l(e).post(r.route("admin.pasien.store"),{onSuccess:()=>l(e).reset()}),["prevent"]))},[a("div",w,[a("div",h,[t(n,{label:"Nama Lengkap",type:"text",placeholder:"Ex : Alzikri",modelValue:l(e).name,"onUpdate:modelValue":s[0]||(s[0]=o=>l(e).name=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.name,class:"mt-2"},null,8,["message"])]),a("div",k,[t(n,{label:"Username",type:"text",placeholder:"Ex : alzikri007",modelValue:l(e).username,"onUpdate:modelValue":s[1]||(s[1]=o=>l(e).username=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.username,class:"mt-2"},null,8,["message"])])]),a("div",V,[a("div",v,[t(n,{label:"Nomor Induk Kewarganegaraan(KTP)",type:"number",placeholder:"Ex : 65464661456464",modelValue:l(e).nik,"onUpdate:modelValue":s[2]||(s[2]=o=>l(e).nik=o)},null,8,["label","modelValue"]),t(m,{message:l(e).errors.nik,class:"mt-2"},null,8,["message"])]),a("div",y,[t(n,{label:"Nomor BPJS",type:"number",placeholder:"Ex : 6546546546",modelValue:l(e).bpjs,"onUpdate:modelValue":s[3]||(s[3]=o=>l(e).bpjs=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.bpjs,class:"mt-2"},null,8,["message"])])]),a("div",U,[a("div",j,[t(n,{label:"Nomor Handphone",type:"number",placeholder:"Ex : 085264884365",modelValue:l(e).no_hp,"onUpdate:modelValue":s[4]||(s[4]=o=>l(e).no_hp=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.no_hp,class:"mt-2"},null,8,["message"])]),a("div",E,[a("div",N,[B,_(a("select",{"onUpdate:modelValue":s[5]||(s[5]=o=>l(e).jenis_kelamin=o),class:"block w-full px-4 py-1 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"},L,512),[[g,l(e).jenis_kelamin]]),t(m,{message:l(e).errors.jenis_kelamin,class:"mt-2"},null,8,["message"])])])]),a("div",P,[a("div",S,[t(n,{label:"Tanggal lahir",type:"date",placeholder:"Ex : 1997/08/25",modelValue:l(e).tanggal_lahir,"onUpdate:modelValue":s[6]||(s[6]=o=>l(e).tanggal_lahir=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.tanggal_lahir,class:"mt-2"},null,8,["message"])]),a("div",J,[t(n,{label:"Alamat lengkap",type:"text",placeholder:"Ex : Jl.letnan boyak, Langgini, Bangkinang kota, Kampar, Riau",modelValue:l(e).alamat,"onUpdate:modelValue":s[7]||(s[7]=o=>l(e).alamat=o)},null,8,["placeholder","modelValue"]),t(m,{message:l(e).errors.alamat,class:"mt-2"},null,8,["message"])])]),a("div",T,[t(x,{disabled:l(e).processing},{default:d(()=>[c("Register")]),_:1},8,["disabled"])])],32)]),_:1},8,["href"]))}};export{Q as default};