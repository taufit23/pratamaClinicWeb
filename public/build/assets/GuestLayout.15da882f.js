import{_}from"./NavLeftLink.2b1c518f.js";import{_ as h}from"./_plugin-vue_export-helper.cdc0426e.js";import{o as n,g as f,d as e,m as p,c as x,w as o,h as u,n as m,b as i,L as g,a,e as l}from"./app.d01356e3.js";const b={},w={class:"w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"},v=e("div",{class:"flex items-center relative"},[e("a",{class:"text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white",href:"/"},[e("img",{src:"img\\LOGOKLINIKPRATAMAUP.jpg",class:"w-10 rounded-full border border-gray-100 shadow-sm",alt:""})]),e("span",{class:"text-xl font-bold leading-relaxed inline-block ml-0 py-2 whitespace-nowrap uppercase text-white"},"Klinik Pratama")],-1),y=[v];function k(s,t){return n(),f("div",w,y)}const L=h(b,[["render",k]]),c={__name:"NavRightLink",props:["href","active"],setup(s){const t=s,r=p(()=>t.active?"bg-green-400":"bg-transparent");return(d,C)=>(n(),x(i(g),{href:s.href,class:m([i(r),"inline-block px-6 py-1.5 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-gray-100 focus:text-blue-700 focus:bg-gray-100 focus:outline-none focus:ring-0 active:text-blue-800 transition duration-300 ease-in-out"])},{default:o(()=>[u(d.$slots,"default")]),_:3},8,["href","class"]))}},$={class:"text-gray-800 antialiased"},N={class:"top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-1"},j={class:"container px-4 mx-auto flex flex-wrap items-center justify-between"},A={class:"lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden",id:"example-collapse-navbar"},B={class:"flex flex-col lg:flex-row list-none mr-auto"},K={class:"flex items-center"},P={class:"flex flex-col lg:flex-row list-none lg:ml-auto"},R={class:"flex items-center px-1"},V={class:"flex items-center px-1"},z={class:"absolute w-full h-full"},T={__name:"GuestLayout",setup(s){return(t,r)=>(n(),f("div",$,[e("nav",N,[e("div",j,[a(L),e("div",A,[e("ul",B,[e("li",K,[a(_,{href:t.route("home.index"),active:t.route().current("home.index")},{default:o(()=>[l("Home ")]),_:1},8,["href","active"])])]),e("ul",P,[e("li",R,[a(c,{href:t.route("login.index"),active:t.route().current("login.index")},{default:o(()=>[l(" Login ")]),_:1},8,["href","active"])]),e("li",V,[a(c,{href:t.route("register.index"),active:t.route().current("register.index")},{default:o(()=>[l(" Register ")]),_:1},8,["href","active"])])])])])]),e("main",null,[e("section",z,[u(t.$slots,"default")])])]))}};export{T as _};