import{u,o as _,c,w as d,d as a,a as t,b as l,i as f,y as g,e as b,f as x}from"./app.d01356e3.js";import{_ as h}from"./AuthenticatedLayout.358931e7.js";import{_ as i}from"./PublicInputText.55392db8.js";import{_ as m}from"./InputError.3a08ebfc.js";import{_ as w}from"./PrimaryButton.5f400a16.js";import"./NavLeftLink.2b1c518f.js";import"./index.es.a8b2b918.js";import"./cib-twitter.8a3d22db.js";import"./cil-caret-right.c95fbe62.js";import"./cil-location-pin.6971a42f.js";import"./_plugin-vue_export-helper.cdc0426e.js";const k={class:"flex flex-wrap mb-3 -mx-3"},V={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},v={class:"w-full px-3 md:w-1/2"},y={class:"flex flex-wrap mb-3 -mx-3"},j={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},U={class:"w-full px-3 md:w-1/2"},E={class:"w-full px-3 md:w-1/1"},N=a("label",{class:"block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"}," Jenis Kelamin ",-1),B=a("option",{value:"laki-laki"},"Laki - Laki",-1),$=a("option",{value:"perempuan"},"Perempuan",-1),K=[B,$],L={class:"flex flex-wrap mb-3 -mx-3"},P={class:"w-full px-3 mb-6 md:w-1/2 md:mb-0"},S={class:"w-full px-3 md:w-1/2"},J={class:"flex flex-wrap mb-3 -mx-3"},T={class:"w-full px-3 mb-6 md:w-full md:mb-0"},A={class:"mt-6 text-center"},Q={__name:"Edit",props:{pasien:Object},setup(p){const n=p,e=u({name:n.pasien.name,nik:n.pasien.ktp,bpjs:n.pasien.bpjs,no_hp:n.pasien.no_hp,jenis_kelamin:n.pasien.jenis_kelamin,tanggal_lahir:n.pasien.tanggal_lahir,alamat:n.pasien.alamat});return(r,s)=>(_(),c(h,{href:r.route("profile.index"),text:"Profile"},{default:d(()=>[a("form",{onSubmit:s[7]||(s[7]=x(o=>l(e).put(r.route("profile.update"),{onSuccess:()=>l(e).reset()}),["prevent"]))},[a("div",k,[a("div",V,[t(i,{label:"Nama Lengkap",type:"text",placeholder:"Ex : Alzikri",modelValue:l(e).name,"onUpdate:modelValue":s[0]||(s[0]=o=>l(e).name=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.name,class:"mt-2"},null,8,["message"])]),a("div",v,[t(i,{label:"Nomor BPJS",type:"number",placeholder:"Ex : 6546546546",modelValue:l(e).bpjs,"onUpdate:modelValue":s[1]||(s[1]=o=>l(e).bpjs=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.bpjs,class:"mt-2"},null,8,["message"])])]),a("div",y,[a("div",j,[t(i,{label:"Nomor Induk Kewarganegaraan(KTP)",type:"number",placeholder:"Ex : 65464661456464",modelValue:l(e).nik,"onUpdate:modelValue":s[2]||(s[2]=o=>l(e).nik=o)},null,8,["label","modelValue"]),t(m,{message:l(e).errors.nik,class:"mt-2"},null,8,["message"])]),a("div",U,[a("div",E,[N,f(a("select",{"onUpdate:modelValue":s[3]||(s[3]=o=>l(e).jenis_kelamin=o),class:"block w-full px-4 py-1 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white"},K,512),[[g,l(e).jenis_kelamin]]),t(m,{message:l(e).errors.jenis_kelamin,class:"mt-2"},null,8,["message"])])])]),a("div",L,[a("div",P,[t(i,{label:"Nomor Handphone",type:"number",placeholder:"Ex : 085264884365",modelValue:l(e).no_hp,"onUpdate:modelValue":s[4]||(s[4]=o=>l(e).no_hp=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.no_hp,class:"mt-2"},null,8,["message"])]),a("div",S,[t(i,{label:"Tanggal lahir",type:"date",placeholder:"Ex : 1997/08/25",modelValue:l(e).tanggal_lahir,"onUpdate:modelValue":s[5]||(s[5]=o=>l(e).tanggal_lahir=o)},null,8,["modelValue"]),t(m,{message:l(e).errors.tanggal_lahir,class:"mt-2"},null,8,["message"])])]),a("div",J,[a("div",T,[t(i,{label:"Alamat lengkap",type:"text",placeholder:"Ex : Jl.letnan boyak, Langgini, Bangkinang kota, Kampar, Riau",modelValue:l(e).alamat,"onUpdate:modelValue":s[6]||(s[6]=o=>l(e).alamat=o)},null,8,["placeholder","modelValue"]),t(m,{message:l(e).errors.alamat,class:"mt-2"},null,8,["message"])])]),a("div",A,[t(w,{disabled:l(e).processing},{default:d(()=>[b("Update")]),_:1},8,["disabled"])])],32)]),_:1},8,["href"]))}};export{Q as default};