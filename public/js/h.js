webpackJsonp([3],{28:function(n,t,e){n.exports=e(29)},29:function(n,t){!function(){var n,t,e,i,o,a,r=!0;function d(){r=!(document.body.scrollTop>t)}function h(){n=window.innerWidth,t=window.innerHeight/4,e.style.height=t+"px",i.width=n,i.height=t}function c(){if(r){o.clearRect(0,0,n,t);for(var e in a)a[e].draw()}requestAnimationFrame(c)}function l(){var e=this;function i(){e.pos.x=Math.random()*n,e.pos.y=t+100*Math.random(),e.alpha=.1+.3*Math.random(),e.scale=.1+.3*Math.random(),e.velocity=Math.random()}e.pos={},i(),this.draw=function(){e.alpha<=0&&i(),e.pos.y-=e.velocity,e.alpha-=5e-4,o.beginPath(),o.arc(e.pos.x,e.pos.y,10*e.scale,0,2*Math.PI,!1),o.fillStyle="rgba(255,255,255,"+e.alpha+")",o.fill()}}!function(){n=window.innerWidth,t=window.innerHeight/4,{x:0,y:t},(e=document.getElementById("header-container")).style.height=t+"px",(i=document.getElementById("canvas")).width=n,i.height=t,o=i.getContext("2d"),a=[];for(var r=0;r<.5*n;r++){var d=new l;a.push(d)}c()}(),window.addEventListener("scroll",d),window.addEventListener("resize",h)}()}},[28]);